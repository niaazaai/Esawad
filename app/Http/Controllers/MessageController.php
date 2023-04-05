<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use App\Models\UserMessage;
use Illuminate\Support\Facades\Auth;
use App\Events\PrivateMessageEvent;
// use App\Models\MessageGroup;

class MessageController extends Controller
{


    public function index($UserId){
        $users = User::where('id' , '!=' , Auth::id())->get();
    	$friendInfo = User::findOrFail($UserId);
    	$myInfo = User::find(Auth::id());

        // $groups = MessageGroup::get();

        // Message::latest()->take(10)->get();
        // // Message::latest()->take(10)->get();
        // $chatMessage = ChatMessage::where('id', $game->id)
        // ->latest()
        // ->take(5)
        // ->get();
        // $messages = $chatMessage->reverse()->values();
        // return $messages->all();

      $this->data['Users'] = $users;
      $this->data['FriendInformation'] = $friendInfo;
      $this->data['MyInformation'] = $myInfo;
      $this->data['UserId'] = $UserId;
    //   $this->data['GroupId'] = $groups;
		return view('chat.chat' , $this->data);
    }



    public function SendMessage(Request $request) {
        $request->validate([
           'message' => 'required',
           'receiver_id' => 'required'
        ]);

        $sender_id = Auth::id();
        $receiver_id = $request->receiver_id;

        $message = new Message();
        $message->message = $request->message;


        if ($message->save()) {
            try {
                $message->users()->attach($sender_id, ['receiver_id' => $receiver_id]);
                $sender = User::where('id', '=', $sender_id)->first();

                $data = [];
                $data['sender_id'] = $sender_id;
                $data['receiver_id'] = $receiver_id;
                $data['sender_name'] = $sender->name;
                $data['content'] = $message->message;
                $data['created_at'] = $message->created_at;
                $data['message_id'] = $message->id;

                event(new PrivateMessageEvent($data));

                return response()->json([
                   'data' => $data,
                   'success' => true,
                    'message' => 'Message sent successfully'
                ]);
            } catch (\Exception $e) {
                $message->delete();
            }
        } // end of large if block
    } // end of send method



    // public function sendGroupMessage(Request $request) {
    //     $request->validate([
    //        'message' => 'required',
    //        'message_group_id' => 'required'
    //     ]);

    //     $sender_id = Auth::id();
    //     $messageGroupID  = $request->message_group_id;

    //     $receiver_id = $request->receiver_id;

    //     $message = new Message();
    //     $message->message = $request->message;

    //     if ($message->save()) {
    //         try {
    //             $message->users()->attach($sender_id, ['message_group_id' => $messageGroupID]);
    //             $sender = User::where('id', '=', $sender_id)->first();

    //             $data = [];
    //             $data['sender_id'] = $sender_id;
    //             $data['sender_name'] = $sender->name;
    //             $data['content'] = $message->message;
    //             $data['created_at'] = $message->created_at;
    //             $data['message_id'] = $message->id;
    //             $data['group_id'] = $messageGroupID;
    //             $data['type'] = 2;

    //             event(new GroupMessageEvent($data));

    //             return response()->json([
    //                'data' => $data,
    //                'success' => true,
    //                 'message' => 'Message sent successfully'
    //             ]);
    //         } catch (\Exception $e) {
    //             $message->delete();
    //         }
    //     } // end of large if block
    // } // end of send method









}// end of class 
