@extends('interface_frontend.index_user')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('backend/livechat')}}/css/style.css">
				<div class="col-md-9">
					<!-- Firebase App is always required and must be first -->
                    <h3 class=" text-center">Inbox</h3>
                    <div class="messaging">
                        <div class="inbox_msg">
                            <div class="inbox_people">
                                <div class="headind_srch">
                                    <div class="recent_heading">
                                        <h4>Recent</h4>
                                    </div>
                                </div>
                                <div class="inbox_chat" id="myDIV">
                                    
                                    <div class="chat_list active_chat" onclick="clickme(this)">
                                        <div class="chat_people" >
                                            <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                            <div class="chat_ib">
                                            <h5>Customer Service</h5><h4><span class="chat_date"></span></h4>
                                            <p></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat_list" onclick="clickme(this)">
                                        <div class="chat_people" >
                                            <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                            <div class="chat_ib">
                                            <h5>Upay-Uwin</h5><h4><span class="chat_date"></span></h4>
                                            <p></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="mesgs">
                                <div class="msg_history" id="chatroom">
                                    
                                </div>
                                    <div class="type_msg">
                                        <div class="input_msg_write">
                                            <input type="text" class="write_msg" placeholder="Write a Suggestion..." id="chat-input" autocomplete="off" />
                                        </div>
                                    </div>
                            </div>
                        </div>    
                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
                    <script  src="{{asset('FrontEnd/livechat')}}/js/livechat.js"></script>
                    <script> var auth_id = '{{ Auth::user()->id }}'</script>
				</div>
@endsection