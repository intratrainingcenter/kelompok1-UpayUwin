
var config = {
  apiKey: "AIzaSyD8-rrhG5b2DtN58gXLNvCD4ZRiKAvslOs",
  authDomain: "ecommerce-upayuwin.firebaseapp.com",
  databaseURL: "https://ecommerce-upayuwin.firebaseio.com",
  projectId: "ecommerce-upayuwin",
  storageBucket: "ecommerce-upayuwin.appspot.com",
  messagingSenderId: "179852905701"
};
var db = firebase.initializeApp(config).database();
var t = '';
$('#chatclick').on('click', '.chat__human', function() {
  $('.conversation').slideToggle(300);
   t = $(this).text();
  document.getElementById("test2").innerHTML = t;
  var chat = ""
  var chatRef2 = db.ref('livechat/users/'+t);
  chatRef2.on('child_added',function showData(items)
      {
                  if (items.val().pembalas == 'admin') {
                    chat += "<li class='conversation__msg cf'><span>"+ items.val().message +"</span></li>";
                  } 
                   else {
                    chat += "<li class='conversation__msg cf'><span class='right'>"+ items.val().message +"</span></li>";
                  }
          $('.conversation__wrap').html(chat);
      });
      
      var send = document.getElementById('myInput');
      var sendtext = document.getElementById('myInput').value;
      var date = new Date().toLocaleString();
      send.addEventListener("keyup",function(event){
        event.preventDefault();
        if (event.keyCode == 13) {
          // console.log(date)
          chatRef2.push({
            message : this.value,
            pembalas : "admin",
            status : "unread",
            waktu : date
          })
          this.value = "";
        }
      })
});

      var chatRef = db.ref('livechat/users/');
      var chatRef3 = db.ref('livechat/users');
      var user = ""
      chatRef.on('child_added', function showData(items)
      {
        user +="<li class='chat__human'><img class='chat__avatar' src='' alt='' /><span class='chat__name' >"+items.val().username+"</span></li>";
          // console.log(items.val().username)
          $('#chatclick').append("<li class='chat__human'><img class='chat__avatar' src='' alt='' /><span class='chat__name' >"+items.key+"</span></li>");
      })

      // var send = document.getElementById('myInput');
      // var sendtext = document.getElementById('myInput').value;
      // send.addEventListener("keyup",function(event){
      //   event.preventDefault();
      //   if (event.keyCode == 13) {
      //     console.log(this.value)
         
      //     this.value = "";
      //   }
      // })
      