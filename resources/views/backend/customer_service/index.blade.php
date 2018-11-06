@extends('../index_backend')
@extends('backend.dashboard.additional')

@section('content')
<!-- Firebase App is always required and must be first -->
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<!-- Add additional services that you want to use -->
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-messaging.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-functions.js"></script>
<link rel="stylesheet" href="{{asset('backend/livechat')}}/css/style.css">
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
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
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
          </div>
          <div class="inbox_chat" id="myDIV">
<!--                   
            <div class="chat_list active_chat">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5 class="username">Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div> -->
            
          </div>
        </div>
        <div class="mesgs">
          <div class="msg_history" id="chatroom">
          </div>
          <div class="type_msg">
            <div class="input_msg_write">
              <input disabled="disabled" type="text" class="write_msg" placeholder="Write a Reply..." id="chat-input" autocomplete="off" />
              </div>
          </div>
        </div>
      </div>
      <p class="text-center top_spac"> Design by <a target="_blank" href="#">Sunil Rajput</a></p>
    </div>
</div>
<script  src="{{asset('backend/livechat')}}/js/livechat.js"></script>
    
@endsection