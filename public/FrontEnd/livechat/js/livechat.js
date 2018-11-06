var config = {
    apiKey: "AIzaSyD8-rrhG5b2DtN58gXLNvCD4ZRiKAvslOs",
    authDomain: "ecommerce-upayuwin.firebaseapp.com",
    databaseURL: "https://ecommerce-upayuwin.firebaseio.com",
    projectId: "ecommerce-upayuwin",
    storageBucket: "ecommerce-upayuwin.appspot.com",
    messagingSenderId: "179852905701"
  };
var db = firebase.initializeApp(config).database();
var chatRef = db.ref('livechat/users/');
$(document).on('ready',function(){
    //alert('Ready')
    fetch_data();
    chatRef.once('value', function(snapshot) {
        if (snapshot.hasChild(authed)) {
          fetch_data();
        } else {
            alert('Your Account not yet started an customer service conversation')
        }
      });

});
function scrolling()
{
  var objDiv = document.getElementById("chatroom");
  objDiv.scrollTop = objDiv.scrollHeight;
}
function fetch_data()
{
    var msg = '';
    var chatRef2 = db.ref('livechat/users/'+authed);
    chatRef2.on('child_added',function showData(items)
              {
                  if (items.val().pembalas == 'user') {
                      msg += "<div class='outgoing_msg'><div class='sent_msg'><p>"+ items.val().message +"</p><span class='time_date'>"+ items.val().waktu +"</span> </div></div>";
                  } 
                     else {
                      msg +="<div class='incoming_msg'><div class='incoming_msg_img'> <img src='https://ptetutorials.com/images/user-profile.png' alt='sunil'> </div><div class='received_msg'><div class='received_withd_msg'><p>"+ items.val().message +"</p><span class='time_date'>"+ items.val().waktu +"</span></div></div></div>";
                  }
                  
                  $('#sendreplyurl').val(authed);
                  $('#chatroom').html(msg);
                  scrolling();
              });
}
function fetch_voucher()
        {
            var msg ='';
            $.ajax({
                url: '/frontend/feeds',
                type : 'GET',
                dataType : 'json',
                success: function(data){
                    //console.log(data['msg']);
                    $.each(data['msg'], function(key,items){
                        if (items.from == 'admin') {
                            msg += "<div class='outgoing_msg'><div class='sent_msg'><p>"+ items.messages +"</p><span class='time_date'>"+ items.created_at +"</span> </div></div>";
                        } 
                           else {
                            msg +="<div class='incoming_msg'><div class='incoming_msg_img'> <img src='https://ptetutorials.com/images/user-profile.png' alt='sunil'> </div><div class='received_msg'><div class='received_withd_msg'><p>"+ items.messages +"</p><span class='time_date'>"+ items.created_at +"</span></div></div></div>";
                        }
                        
                    })
                    
                    $('#chatroom').html(msg);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    // $('#content').html(errorMsg);
                  }
            });
}
function clickme(elem) 
{
            // get all 'a' elements
            var a = document.getElementsByClassName("chat_list");
            // loop through all 'a' elements
            for (i = 0; i < a.length; i++) {
                // Remove the class 'active' if it exists
                a[i].classList.remove('active_chat')
                
            }
            // add 'active' classs to the element that was clicked
            elem.classList.add('active_chat');
            if ($('h5', elem).text() == 'Upay-Uwin') {
                $('#sendreplyurl').val("")
                $('#chat-input').prop("disabled", true);
                $('#chat-input').val("")
                fetch_voucher()
            } if ($('h5', elem).text() == 'Customer Service') {
                $('#chat-input').prop("disabled", false);
                $('#sendreplyurl').val(authed);
                fetch_data()
            }          
}

$('#sendreply').on('click',function(){
        
    if ($('#chat-input').val() == '') {
        alert('Fill the Question')
    } else {
        var chatRef3 = db.ref('livechat/users/'+$('#sendreplyurl').val());
        chatRef3.push({
                message : $('#chat-input').val(),
                pembalas : "user",
                status : "unread",
                waktu : date
            })
            scrolling();
        $('#chat-input').val("")
    }
    
        
})
function sendMessage() {
    // Get text message from input.
    var newMessage = $('#chat-input').val();
    // If input is empty on trying to send message, prevent sending.
    if (newMessage == '') {
        alert('Feel Fre To Ask')
        return false;
    } else {
        $('#sendreply').click()
        $('#chat-input').val('');
    }
}

//Send Chat onKey Enter
var send = document.getElementById('chat-input');
var date = new Date().toLocaleString();
send.addEventListener("keyup",function(event){
    event.preventDefault();
    if (event.keyCode == 13) {
        sendMessage();
    }
})