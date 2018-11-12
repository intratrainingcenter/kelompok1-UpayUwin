// Firebase Connection
var config = {
  apiKey: "AIzaSyD8-rrhG5b2DtN58gXLNvCD4ZRiKAvslOs",
  authDomain: "ecommerce-upayuwin.firebaseapp.com",
  databaseURL: "https://ecommerce-upayuwin.firebaseio.com",
  projectId: "ecommerce-upayuwin",
  storageBucket: "ecommerce-upayuwin.appspot.com",
  messagingSenderId: "179852905701"
};
function scrolling()
{
  var objDiv = document.getElementById("chatroom");
  objDiv.scrollTop = objDiv.scrollHeight;
}

var db = firebase.initializeApp(config).database();
var chatRef = db.ref('livechat/users/');
var users = "";
chatRef.on('child_added', function showData(items)
{
      var chatRef3 = db.ref('livechat/users/'+items.key);
     chatRef3.orderByValue().limitToLast(1).on('child_added',function showData(items)
      {
        lastmsguser = items.val().message;
      });
      users +=       "<div class='chat_list' onclick='clickme(this)'><div class='chat_people'><div class='chat_img'><img src='https://ptetutorials.com/images/user-profile.png' alt='sunil'></div><div class='chat_ib'><h5>"+items.key+"</h5><h4><span class='chat_date'>Dec 25</span></h4><p id='lastmsg"+items.key+"'>"+lastmsguser+"</p></div></div></div>";

      $('#myDIV').html(users);

})

var Title = '';
function clickme(elem) {
  var Title = $('h5', elem).text();
  // get all 'a' elements
  var a = document.getElementsByClassName("chat_list");
  // loop through all 'a' elements
  for (i = 0; i < a.length; i++) {
      // Remove the class 'active' if it exists
      a[i].classList.remove('active_chat')
      $('#chat-input').prop("disabled", false);
  }
  // add 'active' classs to the element that was clicked
  elem.classList.add('active_chat');
  var msg ='';
  var chatRef2 = db.ref('livechat/users/'+Title);
  chatRef2.on('child_added',function showData(items)
			{
                if (items.val().pembalas == 'admin') {
                    msg += "<div class='outgoing_msg'><div class='sent_msg'><p>"+ items.val().message +"</p><span class='time_date'>"+ items.val().waktu +"</span> </div></div>";
                }
                   else {
                    msg +="<div class='incoming_msg'><div class='incoming_msg_img'> <img src='https://ptetutorials.com/images/user-profile.png' alt='sunil'> </div><div class='received_msg'><div class='received_withd_msg'><p>"+ items.val().message +"</p><span class='time_date'>"+ items.val().waktu +"</span></div></div></div>";
                }
                $('#chatroom').html(msg);
      });
      scrolling();
      //Send Chat onKey Enter
      var send = document.getElementById('chat-input');
      var date = new Date().toLocaleString();
      send.addEventListener("keyup",function(event){
          event.preventDefault();
          if (event.keyCode == 13) {
          chatRef2.push({
              message : this.value,
              pembalas : "admin",
              status : "unread",
              waktu : date
          })
          this.value = "";
          }
      })
}
