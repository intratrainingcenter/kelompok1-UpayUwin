$(document).on('ready',function(){
    //alert('Ready')
    fetch_data();
});

function fetch_data()
        {
            var msg ='';
            $.ajax({
                url: '/frontend/showfeed',
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
                if ($('h5', elem).text() == 'Upay-Uwin') {
                    $('#chat-input').prop("disabled", true);
                    fetch_voucher()
                } else {
                    $('#chat-input').prop("disabled", false);
                    fetch_data()
                }
            }
            // add 'active' classs to the element that was clicked
            elem.classList.add('active_chat');          
}



//Send Chat onKey Enter
var send = document.getElementById('chat-input');
var date = new Date().toLocaleString();
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
send.addEventListener("keyup",function(event){
    event.preventDefault();
    if (event.keyCode == 13) {
    var messages = this.value;
    $.ajax({
        /* the route pointing to the post function */
        url: '/frontend/feedback/',
        type: 'POST',
        /* send the csrf-token and the input to the controller */
        data: {_token: CSRF_TOKEN, messages:messages},
        dataType: 'JSON',
        /* remind that 'data' is the response of the AjaxController */
        success: function (data) { 
            fetch_data();
        }
    }); 
    this.value = "";
    }
})