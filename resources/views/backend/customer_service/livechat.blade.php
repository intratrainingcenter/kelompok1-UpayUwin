
<head>

  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="{{asset('backend/livechat')}}/css/style.css">

  
</head>


  <button type="button" class="button js-trigger">Chat (45)</button>

<nav class="chat">
    <h2 class="chat__users">Users Online: 45</h2>
    <ul class="chat__wrapper">
        <li class="chat__human">
            <img class="chat__avatar" src="https://robohash.org/bruh" alt="" />
            <span class="chat__name" id="sl">User</span>
        </li>
    </ul>
</nav>

<div class="conversation">
    <div class="conversation__header" id="test2">
        
        <span class="close-msg">&times;</span>
    </div>
    <ul class="conversation__wrap">
        <li class="conversation__msg cf">
            <span>Hey!</span>
        </li>
        
        <li class="conversation__msg cf">
            <span class="right">Yo!</span>
        </li>
    </ul>
    
    <input class="input" type="text" placeholder="Enter Message" />
</div>
    <script src="https://www.gstatic.com/firebasejs/live/3.1/firebase.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="{{asset('backend/livechat')}}/js/index.js"></script>
    <script  src="{{asset('js')}}/livechat.js"></script>
