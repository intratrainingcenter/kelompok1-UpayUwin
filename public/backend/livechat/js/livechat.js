// Firebase Connection
var config = {
  apiKey: "AIzaSyD8-rrhG5b2DtN58gXLNvCD4ZRiKAvslOs",
  authDomain: "ecommerce-upayuwin.firebaseapp.com",
  databaseURL: "https://ecommerce-upayuwin.firebaseio.com",
  projectId: "ecommerce-upayuwin",
  storageBucket: "ecommerce-upayuwin.appspot.com",
  messagingSenderId: "179852905701"
};

//Send Chat onKey Enter
var send = document.getElementById('chat-input');
            var date = new Date().toLocaleString();
            send.addEventListener("keyup",function(event){
                event.preventDefault();
                if (event.keyCode == 13) {
                // console.log(date)
                alert(this.value)
                this.value = "";
                }
            })
            
var db = firebase.initializeApp(config).database();
var chatRef = db.ref('livechat/users/');
var users = "";
chatRef.on('child_added', function showData(items)
{
    
     users +=       "<div class='chat_list' onclick='clickme(this)'><div class='chat_people'><div class='chat_img'><img src='https://ptetutorials.com/images/user-profile.png' alt='sunil'></div><div class='chat_ib'><h5>"+items.key+"</h5><h4><span class='chat_date'>Dec 25</span></h4><p>Test, which is a new approach to have all solutions astrology under one roof.</p></div></div></div>";
     $('#myDIV').html(users);
     
})

var Title = '';
function clickme(elem) {
  var Title = $('h5', elem).text();
  alert(Title)
  // get all 'a' elements
  var a = document.getElementsByClassName("chat_list");
  // loop through all 'a' elements
  for (i = 0; i < a.length; i++) {
      // Remove the class 'active' if it exists
      a[i].classList.remove('active_chat')
  }
  // add 'active' classs to the element that was clicked
  elem.classList.add('active_chat');
}
