$(document).on('ready',function(){
    //alert('Ready')
    feedsuser();
});
function feedsuser()
{
            var users ='';
            $.ajax({
                url: '/frontend/feedsuser',
                type : 'GET',
                dataType : 'json',
                success: function(data){
                    console.log(data);
                    $.each(data['user'], function(key,items){
                        console.log(items.id)
                        users +=       "<div class='chat_list' onclick='clickme(this,"+items.id+")'><div class='chat_people'><div class='chat_img'><img src='https://ptetutorials.com/images/user-profile.png' alt='sunil'></div><div class='chat_ib'><h5>"+items.name+"</h5><h4><span class='chat_date'>Dec 25</span></h4><p id='lastmsg"+items.id+"'></p></div></div></div>";
                       
                    })
                    $('#myDIV').html(users);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    // $('#content').html(errorMsg);
                  }
            });
}
function clickme(elem,id) 
{
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
    var users = $('h5', elem).text();
    //alert(users);
    var msg ='';
            $.ajax({
                url: '/frontend/servicefeed/'+id,
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
                    var replyurl = users;
                    alert(replyurl)
                    $('#sendreplyurl').val(replyurl)
                    $('#chatroom').html(msg);
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    // $('#content').html(errorMsg);
                  }
            });

            
}

$('#sendreply').on('click',function(){
    alert($('#sendreplyurl').val())
    $('#chat-input').val("")
})

//Send Chat onKey Enter
var send = document.getElementById('chat-input');
var date = new Date().toLocaleString();
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
send.addEventListener("keyup",function(event){
    event.preventDefault();
    if (event.keyCode == 13) {
        $('#sendreply').click()
    }
})


