@extends('interface_frontend.index_user')
@section('content')

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
                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
                    <script  src="{{asset('FrontEnd/livechat')}}/js/livechat.js"></script>
				</div>
@endsection