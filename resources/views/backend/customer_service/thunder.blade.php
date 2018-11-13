<head>
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('wip')}}/css/style.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,700" rel="stylesheet">
	<!-- Firebase App is always required and must be first -->
	<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>

	<!-- Add additional services that you want to use -->
	<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-messaging.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-functions.js"></script>
</head>

	<div class="container">
		<div class="chat-window-mask">
			<div class="chat-window-box">
				<section class="chat-list">
					<header class="chat-list-header">
						<span class="chat-list-icon">
							<svg viewBox="0 0 24 22">
								<path d="M20,9.4C20,4.5,15.2,1,10,1C4.7,1,0,4.5,0,9.4c0,1.7,0.6,3.4,1.7,4.7c0,1.5-0.9,3.7-1.7,5.3c2.2-0.4,5.3-1.3,6.6-2.1C14.4,19.1,20,14.4,20,9.4z M5.5,10.7c-0.7,0-1.3-0.6-1.3-1.3s0.6-1.3,1.3-1.3s1.3,0.6,1.3,1.3S6.2,10.7,5.5,10.7z M10,10.7c-0.7,0-1.3-0.6-1.3-1.3S9.3,8.2,10,8.2s1.3,0.6,1.3,1.3S10.7,10.7,10,10.7z M14.5,10.7c-0.7,0-1.3-0.6-1.3-1.3s0.6-1.3,1.3-1.3s1.3,0.6,1.3,1.3S15.2,10.7,14.5,10.7z M22.9,19.5c0,1,0.6,2.4,1.1,3.5c-1.4-0.3-3.4-0.8-4.4-1.4c-3.4,0.8-6.1-0.3-7.6-2.1c4.6-0.7,8.2-3.6,9.5-7.3c1.5,1,2.5,2.5,2.5,4.3C24,17.6,23.6,18.7,22.9,19.5z"/>
							</svg>
						</span>
						<span class="chat-list-title">Conversations</span>
					</header>
					<section class="chat-list-body">
						<ul class="chat-list-list" id="chatList">

						</ul>
					</section>
				</section>
				<section class="chat-conversation" >
					<header class="chat-conversation-header">
						<button class="chat-back-arrow" title="Go to chat list">
							<svg viewBox="0 0 24 24">
								<path d="M0,12l11,8v-6h13v-4H11V4L0,12z"/>
							</svg>
						</button>
						<section class="chat-conversation-user-info">
							<span class="user-name" id="test2"></span>
						</section>
						<div class="chat-conversation-end">

						</div>
					</header>
					<section class="chat-conversation-body" id="your_div">
						
					</section>
					<footer class="chat-conversation-action">
						<input id="chat-input" type="text" value="" name="writeMessage" autofocus="autofocus" placeholder="Write A Reply" class="chat-conversation-write">
					</footer>
				</section>
			</div>
		</div>
	</div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script  src="{{asset('wip')}}/js/index.js"></script>
  <script  src="{{asset('wip')}}/js/livechat.js"></script>
