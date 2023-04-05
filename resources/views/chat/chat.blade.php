@extends('layouts.chat.app')

@section('content')

<div class="layout">
<!-- Navigation -->
<div class="navigation navbar navbar-light justify-content-center py-xl-7">

    <!-- Brand -->
    <a href="chat-2.html#" class="d-none d-xl-block mb-6">
        <img src="{{asset('chat_assets/images/brand.svg')}}" class="mx-auto fill-primary" data-inject-svg="" alt="" style="height: 46px;">
    </a>

    <!-- Menu -->
    <ul class="nav navbar-nav flex-row flex-xl-column flex-grow-1 justify-content-between justify-content-xl-center py-3 py-lg-0" role="tablist">

        <!-- Invisible item to center nav vertically -->
        <li class="nav-item d-none d-xl-block invisible flex-xl-grow-1">
            <a class="nav-link position-relative p-0 py-xl-3" href="chat-2.html#" title="">
                <i class="icon-lg fe-x"></i>
            </a>
        </li>

        <!-- Create group -->
        <li class="nav-item">
            <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="chat-2.html#tab-content-create-chat" title="Create chat" role="tab">
                <i class="icon-lg fe-edit"></i>
            </a>
        </li>

        <!-- Friend -->
        <li class="nav-item mt-xl-9">
            <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="chat-2.html#tab-content-friends" title="Friends" role="tab">
                <i class="icon-lg fe-users"></i>
            </a>
        </li>

        <!-- Chats -->
        <li class="nav-item mt-xl-9">
            <a class="nav-link position-relative p-0 py-xl-3 active" data-toggle="tab" href="chat-2.html#tab-content-dialogs" title="Chats" role="tab">
                <i class="icon-lg fe-message-square"></i>
                <div class="badge badge-dot badge-primary badge-bottom-center"></div>
            </a>
        </li>

        <!-- Profile -->
        <li class="nav-item mt-xl-9">
            <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="chat-2.html#tab-content-user" title="User" role="tab">
                <i class="icon-lg fe-user"></i>
            </a>
        </li>

        <!-- Demo only: Documentation -->
        <li class="nav-item mt-xl-9 d-none d-xl-block flex-xl-grow-1">
            <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="chat-2.html#tab-content-demos" title="Demos" role="tab">
                <i class="icon-lg fe-layers"></i>
            </a>
        </li>

        <!-- Settings -->
        <li class="nav-item mt-xl-9">
            <a class="nav-link position-relative p-0 py-xl-3" href="settings.html" title="Settings">
                <i class="icon-lg fe-settings"></i>
            </a>
        </li>

    </ul>
    <!-- Menu -->

</div>
<!-- Navigation -->

<!-- Sidebar -->
<div class="sidebar">
<div class="tab-content h-100" role="tablist">

<div class="tab-pane fade h-100 show active" id="tab-content-dialogs" role="tabpanel">
    <div class="d-flex flex-column h-100">
        <div class="hide-scrollbar">
            <div class="container-fluid py-6">
            <!-- Title -->
            <h2 class="font-bold mb-6">Chats</h2>
            <!-- Title -->
            <!-- Search -->
            <form class="mb-6">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                    <div class="input-group-append">
                        <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                            <i class="fe-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <!-- Search -->
            <!-- Favourites -->
            <div class="text-center hide-scrollbar d-flex my-7" data-horizontal-scroll="">
            @if($Users->count() > 0 )
            @foreach($Users as $user)
                <a href="{{route('chat.conversation' , $user->id)}}" class="d-block text-reset mr-7 mr-lg-6">
                    <div class="avatar avatar-sm mb-3" id = "user-icon-{{$user->id}}">
                        <img class="avatar-img" src="{{asset('chat_assets/images/avatars/2.jpg')}}" alt="Image Description">
                    </div>
                    <div class="small text-uppercase">{!!  makeImageFromName($user->name)!!}</div>
                </a>
            @endforeach
            @endif
            </div>
            <!-- Favourites -->

            <!-- Chats -->
            <nav class="nav d-block list-discussions-js mb-n6">
            @if($Users->count() > 0 )
            @foreach($Users as $user)
                <a class="text-reset nav-link p-0 mb-6" href="{{route('chat.conversation' , $user->id)}}">
                    <div class="card card-active-listener">
                        <div class="card-body">
                            <div class="media">
                                <div class="avatar mr-5 ">
                                    <span class="avatar-img  avatar-sm avatar-online h3 text-uppercase">{!!  makeImageFromName($user->name)!!}</span>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <div class="d-flex align-items-center mb-1">
                                        <h6 class="text-truncate mb-0 mr-auto">{{$user->name}}</h6>
                                        <p class="small text-muted text-nowrap ml-4">10:42 am</p>
                                    </div>
                                    <div class="text-truncate">Anna Bridges: Hey, Maher! How are you? The weather is great isn't it?</div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="badge badge-circle badge-primary badge-border-light badge-top-right">
                            <span>3</span>
                        </div> -->
                    </div>
                </a>
                @endforeach
                @endif
                
                </nav>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<!-- Sidebar -->

<!-- Main Content -->
<div class="main main-visible" data-mobile-height="">
    <!-- Chat -->
    <div id="chat-2" class="chat dropzone-form-js" data-dz-url="some.php">
        <!-- Chat: body -->
        <div class="chat-body">
            <!-- Chat: Header -->
            <div class="chat-header border-bottom py-4 py-lg-6 px-lg-8">
                <div class="container-xxl">
                    <div class="row align-items-center">
                        <!-- Close chat(mobile) -->
                        <div class="col-3 d-xl-none">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="text-muted px-0" href="chat-2.html#" data-chat="open">
                                        <i class="icon-md fe-chevron-left"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Chat photo -->
                        <div class="col-6 col-xl-6">
                            <div class="media text-center text-xl-left">
                                <div class="avatar avatar-sm  d-none d-lg-inline-block mr-5" id = "cs-btn-{{$FriendInformation->id}}">
                                    <img src="{{asset('chat_assets/images/avatars/10.jpg')}}" class="avatar-img" alt="">
                                    
                                </div>

                                <div class="media-body align-self-center text-truncate">
                                    <h6 class="text-truncate mb-n1">{{$FriendInformation->name}}</h6>
                                    <span class="badge badge-dot badge-success d-inline-block d-xl-none mr-1"></span>
                                    <small id = "cs-text-{{$FriendInformation->id}}" class="text-muted">Offline</small>
                
                                </div>
                            </div>
                        </div>

                <!-- Chat toolbar -->
                <div class="col-3 col-xl-6 text-right">
                    <ul class="nav justify-content-end">
                        <li class="nav-item list-inline-item d-none d-xl-block mr-3">
                            <a class="nav-link text-muted px-3" data-toggle="collapse" data-target="#chat-2-search" href="chat-2.html#" title="Search this chat">
                                <i class="icon-md fe-search"></i>
                            </a>
                        </li>

                        <li class="nav-item list-inline-item d-none d-xl-block mr-0">
                            <a class="nav-link text-muted px-3" href="chat-2.html#" data-chat-sidebar-toggle="#chat-2-info" title="Details">
                                <i class="icon-md fe-more-vertical"></i>
                            </a>
                        </li>

                        <!-- Mobile nav -->
                        <li class="nav-item list-inline-item d-block d-xl-none">
                            <div class="dropdown">
                                <a class="nav-link text-muted px-0" href="chat-2.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-md fe-more-vertical"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item d-flex align-items-center" data-toggle="collapse" data-target="#chat-2-search" href="chat-2.html#">
                                        Search <span class="ml-auto pl-5 fe-search"></span>
                                    </a>

                                    <a class="dropdown-item d-flex align-items-center" href="chat-2.html#" data-chat-sidebar-toggle="#chat-2-info">
                                        Chat Info <span class="ml-auto pl-5 fe-more-horizontal"></span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!-- Mobile nav -->
                    </ul>
                </div>

            </div><!-- .row -->

        </div>
    </div>
                       

<!-- Chat: Content-->
<div class="chat-content px-lg-8">
    <div class="container-xxl py-6 py-lg-10 ChatBody" >


    <!-- Message -->
    <div class="message">
        <!-- Avatar -->
        <a class="avatar avatar-sm mr-4 mr-lg-5" href="chat-2.html#" data-chat-sidebar-toggle="#chat-2-info">
            <img class="avatar-img" src="{{asset('chat_assets/images/avatars/10.jpg')}}" alt="">
        </a>
        <!-- Message: body -->
        <div class="message-body">
        <!-- Message: row -->
        <div class="message-row">
            <div class="d-flex align-items-center">

            <!-- Message: content -->
            <div class="message-content bg-light">
                <h6 class="mb-2">Anna Bridges</h6>
                <div>Yeah, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents.</div>

                <div class="mt-1">
                    <small class="opacity-65">8 mins ago</small>
                </div>
            </div>
            <!-- Message: content -->

            <!-- Message: dropdown -->
            <div class="dropdown">
                <a class="text-muted opacity-60 ml-3" href="chat-2.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fe-more-vertical"></i>
                </a>

                <div class="dropdown-menu">
                    <a class="dropdown-item d-flex align-items-center" href="chat-2.html#">
                        Share <span class="ml-auto fe-share-2"></span>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="chat-2.html#">
                        Delete <span class="ml-auto fe-trash-2"></span>
                    </a>
                </div>
            </div>
            <!-- Message: dropdown -->

            </div>
        </div>
        <!-- Message: row -->

        </div>
         <!-- Message: Body -->
</div>
<!-- Message -->

<!-- Message -->
<div class="message message-right">
    <!-- Avatar -->
    <div class="avatar avatar-sm ml-4 ml-lg-5 d-none d-lg-block">
        <img class="avatar-img" src="{{asset('chat_assets/images/avatars/12.jpg')}}" alt="">
    </div>

    <!-- Message: body -->
    <div class="message-body">

        <!-- Message: row -->
        <div class="message-row">
            <div class="d-flex align-items-center justify-content-end">

                <!-- Message: dropdown -->
                <div class="dropdown">
                    <a class="text-muted opacity-60 mr-3" href="chat-2.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fe-more-vertical"></i>
                    </a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item d-flex align-items-center" href="chat-2.html#">
                            Edit <span class="ml-auto fe-edit-3"></span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="chat-2.html#">
                            Share <span class="ml-auto fe-share-2"></span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="chat-2.html#">
                            Delete <span class="ml-auto fe-trash-2"></span>
                        </a>
                    </div>
                </div>
                <!-- Message: dropdown -->

                <!-- Message: content -->
                <div class="message-content bg-primary text-white">
                    <div>Yeah, I'm going to meet a friend of mine at the department store. I have to buy some presents for my parents.</div>

                    <div class="mt-1">
                        <small class="opacity-65">8 mins ago</small>
                    </div>
                </div>
                <!-- Message: content -->

            </div>
        </div>
        <!-- Message: row -->

    </div>
    <!-- Message: body -->
</div>
<!-- Message -->

<!-- Divider -->
<div class="message-divider my-9 mx-lg-5">
    <div class="row align-items-center">

        <div class="col">
            <hr>
        </div>

        <div class="col-auto">
            <small class="text-muted">Today</small>
        </div>

        <div class="col">
            <hr>
        </div>
    </div>
</div>
<!-- Divider -->

<!-- Message: Typing -->
<div class="message">
    <!-- Avatar -->
    <a class="avatar avatar-sm mr-4 mr-lg-5" href="chat-2.html#" data-chat-sidebar-toggle="#chat-2-info">
        <img class="avatar-img" src="{{asset('chat_assets/images/avatars/10.jpg')}}" alt="">
    </a>

    <!-- Message: body -->
    <div class="message-body">

        <!-- Message: row -->
        <div class="message-row">
            <div class="d-flex align-items-center">

                <!-- Message: content -->
                <div class="message-content bg-light">
                    <div>Anna is typing<span class="typing-dots"><span>.</span><span>.</span><span>.</span></span></div>
                </div>
                <!-- Message: content -->

            </div>
        </div>
        <!-- Message: row -->

    </div>
    <!-- Message: body -->
</div>
<!-- Message: Typing -->


        </div>
    <!-- Scroll to end -->
    <div class="end-of-chat"></div>
</div>
<!-- Chat: Content -->

    <!-- Chat: DropzoneJS container -->
    <div class="chat-files hide-scrollbar px-lg-8">
        <div class="container-xxl">
            <div class="dropzone-previews-js form-row py-4"></div>
        </div>
    </div>
    <!-- Chat: DropzoneJS container -->

<!-- Chat: Footer -->
<div class="chat-footer border-top py-4 py-lg-6 px-lg-8">
    <div class="container-xxl">
        <form id="chat-id-2-form" action="" data-emoji-form="">
            <div class="form-row align-items-center">
                <div class="col">
                    <div class="input-group">

                        <!-- Textarea -->
                        <textarea id="ChatInput" 
                        class="form-control bg-transparent border-0" 
                        placeholder="Type your message..." 
                         data-emoji-input="" 
                        data-autosize="true"></textarea>

                        <!-- Emoji button -->
                        <div class="input-group-append">
                            <button class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0" type="button" data-emoji-btn="">
                                <img src="{{asset('chat_assets/images/smile.svg')}}" data-inject-svg="" alt="">
                            </button>
                        </div>

                        <!-- Upload button -->
                        <div class="input-group-append">
                            <button id="chat-upload-btn-2" class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0 dropzone-button-js" type="button">
                                <img src="{{asset('chat_assets/images/paperclip.svg')}}" data-inject-svg="" alt="">
                            </button>
                        </div>

                    </div>

                </div>

                <!-- Submit button -->
                <div class="col-auto">
                    <button class="btn btn-ico btn-primary rounded-circle" type="submit">
                        <span class="fe-send"></span>
                    </button>
                </div>

            </div>

        </form>

    </div>
</div>
<!-- Chat: Footer -->
</div>
<!-- Chat: body -->

<!-- Chat Details -->
<div id="chat-2-info" class="chat-sidebar">
<div class="d-flex h-100 flex-column">

<!-- Header -->
<div class="border-bottom py-4 py-lg-6">
    <div class="container-fluid">

        <ul class="nav justify-content-between align-items-center">
            <!-- Close sidebar -->
            <li class="nav-item list-inline-item">
                <a class="nav-link text-muted px-0" href="chat-1.html#" data-chat-sidebar-close="">
                    <i class="icon-md fe-chevron-left"></i>
                </a>
            </li>

            <!-- Title(mobile) -->
            <li class="text-center d-block d-lg-none">
                <h6 class="mb-n2">Anna Bridges</h6>
                <small class="text-muted">Chat Details</small>
            </li>

            <!-- Dropdown -->
            <li class="nav-item list-inline-item">
                <div class="dropdown">
                    <a class="nav-link text-muted px-0" href="chat-2.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-md fe-sliders"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item d-flex align-items-center" href="chat-2.html#">
                            Mute
                            <span class="ml-auto fe-bell"></span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="chat-2.html#">
                            Delete
                            <span class="ml-auto fe-trash-2"></span>
                        </a>
                    </div>
                </div>
            </li>
        </ul>

    </div>
</div>
<!-- Header -->

<!-- Body -->
<div class="hide-scrollbar flex-fill">

<div class="border-bottom text-center py-9 px-10">
    <!-- Photo -->
    <div class="avatar avatar-xl mx-5 mb-5">
        <img class="avatar-img" src="{{asset('chat_assets/images/avatars/10.jpg')}}" alt="">
    </div>
    <h5>Anna Bridges</h5>
    <!-- <p class="text-muted">Bootstrap is an open source toolkit for developing web with HTML, CSS, and JS.</p> -->
</div>

<div class="tab-content" role="tablist">
    <!-- Details -->
    <div id="chat-2-user-details" class="tab-pane fade show active" role="tabpanel">
        <ul class="list-group list-group-flush mb-8">
            <li class="list-group-item py-6">
                <div class="media align-items-center">
                    <div class="media-body">
                        <p class="small text-muted mb-0">Country</p>
                        <p>Warsaw, Poland</p>
                    </div>
                    <i class="text-muted icon-sm fe-globe"></i>
                </div>
            </li>

            <li class="list-group-item py-6">
                <div class="media align-items-center">
                    <div class="media-body">
                        <p class="small text-muted mb-0">Phone</p>
                        <p>+39 02 87 21 43 19</p>
                    </div>
                    <i class="text-muted icon-sm fe-mic"></i>
                </div>
            </li>

            <li class="list-group-item py-6">
                <div class="media align-items-center">
                    <div class="media-body">
                        <p class="small text-muted mb-0">Email</p>
                        <p>anna@gmail.com</p>
                    </div>
                    <i class="text-muted icon-sm fe-mail"></i>
                </div>
            </li>

            <li class="list-group-item py-6">
                <div class="media align-items-center">
                    <div class="media-body">
                        <p class="small text-muted mb-0">Time</p>
                        <p>10:03 am</p>
                    </div>
                    <i class="text-muted icon-sm fe-clock"></i>
                </div>
            </li>
        </ul>

        <ul class="list-group list-group-flush">
            <li class="list-group-item py-6">
                <a href="chat-2.html#" class="media text-muted">
                    <div class="media-body align-self-center">
                        Twitter
                    </div>
                    <i class="icon-sm fe-twitter"></i>
                </a>
            </li>

            <li class="list-group-item py-6">
                <a href="chat-2.html#" class="media text-muted">
                    <div class="media-body align-self-center">
                    Facebook
                    </div>
                    <i class="icon-sm fe-facebook"></i>
                </a>
            </li>

            <li class="list-group-item py-6">
                <a href="chat-2.html#" class="media text-muted">
                    <div class="media-body align-self-center">
                        Github
                    </div>
                    <i class="icon-sm fe-github"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- Details -->

            </div>
        </div>
        <!-- Body -->
    </div>
</div>
<!-- Chat Details -->
</div>
<!-- Chat -->
</div>
<!-- Main Content -->
</div>
<!-- Layout -->
    

@endsection

@push('scripts')
<!-- Scripts -->
    <script src="{{asset('chat_assets/js/libs/jquery.min.js')}}"></script>
    <script src="{{asset('chat_assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('chat_assets/js/plugins/plugins.bundle.js')}}"></script>
    <!-- <script src="{{asset('chat_assets/js/template.js')}}"></script> -->
<!-- Scripts -->


<script>

  $(function(){
    let user_id  = "{{auth()->user()->id}}";
    let user_name = "{{auth()->user()->name}}";
    let ip = '127.0.0.1';
    let port = '8028';
    let socket = io(ip + ':' + port);

    socket.on('connect' , function(){
      socket.emit('user_connected' , user_id , user_name  );
    });

    socket.on('updateUserStatus' , (data) => {
        // $(".cs-btn").removeClass('avatar-online');

        $.each(data, function(key , val){
        if(val !== null && val !== 0){
            // let e = document.getElementById("user-icon-" + key);
            $("#user-icon-" + key).addClass('avatar-online');
            $("#cs-text-" + key).text('Online');
            $("#cs-btn-" + key).addClass('avatar-online');
        }
        });
    });
    
    let $ChatInput = $('#ChatInput');
    let $chatBody = $('.ChatBody');
    let FriendId  = "{{$FriendInformation->id}}";

    $ChatInput.keypress(function(event){
    let message = $(this).val();
    if(event.which == 13 && !event.shiftKey){
        $(this).val("");
        SendMessageFromClient(message);
        return false;
    }
    }); // end of chatInput


     function SendMessageFromClient(message){
        let url = "{{route('SendMessage')}}";
        let form = $(this);
        let formData = new FormData();
        let token = '{{ csrf_token() }}';
        formData.append('message' , message)
        formData.append('_token' , token);
        formData.append('receiver_id' , FriendId);
        appendMessageToSender(message);
        $.ajax({
        url: url,
        type: 'POST',
        data: formData,
            processData: false,
            contentType: false,
            dataType: 'JSON',
        success: function (response) {
            if (response.success) {
                console.log(response.data);
            }
        }
        });
    }// end of  function
    

  function appendMessageToSender(message) {
    let name = '{{ $MyInformation->name }}';
    let MessageTag = '<div class="message message-right">'+ 
    '<div class="avatar avatar-sm ml-4 ml-lg-5 d-none d-lg-block"><img class="avatar-img"' + 'src="{{asset("chat_assets/images/avatars/12.jpg")}}"' +  ' alt=""></div>'  + 
    '<div class="message-body"> <div class="message-row">' + 
    '<div class="d-flex align-items-center justify-content-end">' + 
    '<div class="message-content bg-primary text-white">' 
    + message +
    '<div class="mt-1"><small class="opacity-65">'+ getCurrentTime() +'</small></div>' + 
    '</div></div></div></div></div>'; //end of message right  
    $chatBody.append(MessageTag);
  }

  function appendMessageToReceiver(message) {
    let name = '{{ $FriendInformation->name }}';
    let MessageTagR = '<div class="message ">'+ 
    '<a class="avatar avatar-sm mr-4 mr-lg-5"><img class="avatar-img"' + 'src="{{asset("chat_assets/images/avatars/12.jpg")}}"' +  ' alt=""></a>'  + 
    '<div class="message-body"> <div class="message-row">' + 
    '<div class="d-flex align-items-center">' + 
    '<div class="message-content bg-light "><h6 class="mb-2">' + name + '</h6>' 
    + message.content +
    '<div class="mt-1"><small class="opacity-65">'+ getCurrentTime() +' </small></div>' + 
    '</div></div></div></div>'; //end of message right  
    $chatBody.append(MessageTagR);

  }

  socket.on("private-channel:App\\Events\\PrivateMessageEvent", function (message) {
    appendMessageToReceiver(message);
  });

  












  }); // end of $ function 


</script>
@endpush