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
        var user = "";
        chatRef.on('child_added', function showData(items)
        {
            console.log(items.key)
            $('#chatList').append("<li id='chatView' class='chat-item'><div class='chat-item-text-container'><span class='chat-item-user'>"+ items.key +"</div></li>")
        })
  
	// Click chat to go to its conversation view.
	var t = '';
	$('#chatList').on('click','.chat-item', function() {
		t = $(this).text();
		$('.chat-window-box').removeClass('chat-list-toggle');
		document.getElementById("test2").innerHTML = t;
		var chat = ""
		var chatRef2 = db.ref('livechat/users/'+t);
        var objDiv = document.getElementById("your_div");
        objDiv.scrollTop = objDiv.scrollHeight;
		chatRef2.on('child_added',function showData(items)
			{
                if (items.val().pembalas == 'admin') {
                    chat += "<div class='chat-bubble-containter'><p class='chat-bubble-left'>"+ items.val().message +"</p></div>";
                } 
                   else {
                    chat += "<div class='chat-bubble-containter'><p class='chat-bubble-right'>"+ items.val().message +"</p></div>";
                }
                $('.chat-conversation-body').html(chat);	
			});
            //Send Chat onKey Enter
            var send = document.getElementById('chat-input');
            var sendtext = document.getElementById('chat-input').value;
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