var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http ,  {cors: {origin: "*"}});
var Redis = require('ioredis');
var redis = new Redis();
var users = [];
var groups = [];

http.listen(8028, function () {
    console.log('Listening to port 8005');
});

redis.subscribe('private-channel', function() {
    console.log('Subscribed to private channel');
});

redis.on('message', function(channel, message) {
    message = JSON.parse(message);
    
    if (channel == 'private-channel') {
        let data = message.data.data;
        let receiver_id = data.receiver_id;
        let event = message.event;

        io.to(`${users[receiver_id]}`).emit(channel + ':' + message.event, data);
    }

    // console.log(channel);
    // console.log(message);
    // if (channel == 'group-channel') {
    //     let data = message.data.data;
    //     // console.log("Data::::::::::::::::::::::> " + data.type)
    //     if(data.type ==  2 ){
    //       let socket_id  = getSocketIdOfUserInGroup(data.sender_id , data.group_id );
    //       // console.log("group chatt SOCKET ID : "  + socket_id);
    //       let king = io.sockets.connected[socket_id];
    //       console.log(data);
    //       king.broadcast.to('group'+data.group_id).emit('groupMessage' , data);
    //     }
    // }

});

redis.on('error', (e) =>  console.log("Error " + e))

io.on('connection', function (socket) {
    socket.on("user_connected", function (user_id , user_name ) {
        users[user_id] = socket.id;
        io.emit('updateUserStatus', users);
        console.log("SOCKET ID : " + socket.id + " :: "  + user_name + " connected with ID: " + user_id );
        console.log()
      });
    socket.on('disconnect', function() {
        var i = users.indexOf(socket.id);
        users.splice(i, 1, 0);
        io.emit('updateUserStatus', users);
        console.log(users);
    });

}); // end of connection io.on 














// redis.subscribe('group-channel', function() {
//     console.log('subscribed to group channel');
// });



// redis.on('error', (e) =>  console.log("Error " + e))


//     socket.on('joinGroup', function(data) {
//       console.log('Join Group : ');
//       console.log(data);
//       data['socket_id'] = socket.id;

//       console.log("---------------------------");
//       console.log(groups[data.group_id]);
//       console.log(data.group_id);
//       console.log(groups);
//       console.log("---------------------------");

//       if(groups[data.group_id]){
//         console.log("group already exist!");
//         var userExist = checkIfUserExistInGroup(data.user_id ,data.group_id);

//         if(!userExist){
//           groups[data.group_id].push(data);

//           socket.join(data.room);
//           console.log('user does not exist');
//         }
//         else {

//         var index  = groups[data.group_id].map(function(obj){
//           return obj.user_id;
//         }).indexOf(data.user_id);

//         groups[data.group_id].splice(index, 1);
//         groups[data.group_id].push(data);
//         socket.join(data.room);
//         console.log('user exist');
//         }

//       }else {
//         console.log("New Group");
//         groups[data.group_id] = [data];
//         socket.join(data.room);
//       }// end of else

//       console.log("Socket ID:  " + socket.id + " - User ID: " + data.user_id)
//       console.log(groups);

//     });// end of join_group socket block


// });


//  function checkIfUserExistInGroup( user_id , group_id){

//   var group = groups[group_id];
//   var exist = false ;

//   if(groups.length > 0 ){
//     for (var i = 0; i < group.length; i++) {

//       if(group[i]['user_id'] == user_id) {
//         exist = true;
//         break;
//       }

//     }// end of loop
//   } // end of if
// }// end of checkIfUserExistInGroup method




// function getSocketIdOfUserInGroup( user_id , group_id){
//      var group = groups[group_id];
//      if(groups.length > 0 ){
//        for (var i = 0; i < group.length; i++) {
//          if(group[i]['user_id'] == user_id) {
//            return group[i]['socket_id'];
//          }

//        }// end of loop
//      } // end of if
// }
