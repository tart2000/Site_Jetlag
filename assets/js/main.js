$(document).ready(function(){
	var location = window.location.pathname; //get Current link
	// var $currentNumber = $('.number.active');
	$('.number').hover(function(){
		// console.log('a');
		$('.number').removeClass('active');
	});

	$('.number').mouseleave(function(){
		// console.log('a');
		console.log('[data-link="'+location+'"]');
		$('[data-link="'+location+'"]').addClass('active');
	});


});