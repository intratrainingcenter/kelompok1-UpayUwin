$(document).ready(function() {
	$('.chat-window-mask').toggleClass('minimize-chat');
	$('.chat-window-box').addClass('chat-list-toggle');
	// Event that triggers the minimization of the chat window.
	$('.chat-conversation-user-info, .chat-list-header').on('click', function(){
		$('.chat-window-mask').toggleClass('minimize-chat');
	});

	// Show new message notification after x seconds.
	function newMessage() {
		$('.chat-back-arrow').addClass('chat-conversation-new-message');
		$('#chatID-2 .chat-item-user').addClass('chat-item-new-message');
	}
	setTimeout(newMessage, 4000);

	// Go to chat list view.
	$('.chat-back-arrow').on('click', function() {
		$('.chat-window-box').addClass('chat-list-toggle');
	});

	// Remove notification classes.
	$('#chatID-2').on('click', function() {
		$('.chat-back-arrow').removeClass('chat-conversation-new-message');
		$('#chatID-2 .chat-item-user').removeClass('chat-item-new-message');
	});

	// Click to close chat conversation from the list.
	$('.chat-item-close').on('click', function() {
		$('.chat-item').addClass('close-chat');
	});

	// Click to close chat window altogether.
	$('.chat-close-window').on('click', function() {
		$('.chat-window-mask').addClass('close-chat');
	});

});