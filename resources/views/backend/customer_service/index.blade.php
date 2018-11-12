@extends('../index_backend')
@extends('backend.dashboard.additional')

@section('content')
<!-- Firebase App is always required and must be first -->
<script src="https://www.gstatic.com/firebasejs/5.5.2/firebase-app.js"></script>

<!-- Add additional services that you want to use -->
<script src="https://www.gstatic.com/firebasejs/5.5.2/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.2/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.2/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.2/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.2/firebase-functions.js"></script>

<link rel="stylesheet" href="{{asset('backend/livechat')}}/css/style.css">
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet"
<div class="container">
<h3 class=" text-center">Customer Service</h3>
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                
                </span> </div>
            </div>
          </div>
          <div class="inbox_chat" id="myDIV">
            <!-- myDIVchat -->
            
          </div>
        </div>
        <div class="mesgs">
          <div class="msg_history" id="chatroom">
          </div>
          <div class="type_msg">
            <div class="input_msg_write">
              <input disabled="disabled" type="text" class="write_msg" placeholder="Write a Reply..." id="chat-input" autocomplete="off" />
              <input type="hidden" id="sendreplyurl" value="">
              <button class="msg_send_btn" type="button" id="sendreply"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
              </div>
          </div>
        </div>
      </div>
      <p class="text-center top_spac"> Design by <a target="_blank" href="#">Sunil Rajput</a></p>
    </div>
</div>
<script  src="{{asset('backend/livechat')}}/js/livechat.js"></script>    
@endsection