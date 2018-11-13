$(document).on('ready',function(){
		$('.chat').slideToggle(300, 'swing');
		$('.chat-message-counter').fadeToggle(300, 'swing');
		var objDiv = document.getElementById("scrolldiv");
  		objDiv.scrollTop = objDiv.scrollHeight;
		(function() {
	
			$('#live-chat header').on('click', function() {
				var objDiv = document.getElementById("scrolldiv");
  				objDiv.scrollTop = objDiv.scrollHeight;
				$('.chat').slideToggle(300, 'swing');
				$('.chat-message-counter').fadeToggle(300, 'swing');
		
			});
		
			$('.chat-close').on('click', function(e) {
		
				e.preventDefault();
				$('#live-chat').fadeOut(300);
		
			});
		
		}) ();
});
