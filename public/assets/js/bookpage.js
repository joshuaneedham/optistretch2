(function(){
	console.log('bookpage');
	var bookpagetop = $('.book-page');
	var window_top = $('window').scrollTop();
	var nav_head_height = $('nav.navbar-fixed-top').height();
	var div_top = $('.book-page').offset().top;
	console.log('nav_head_height: ' + nav_head_height);
	console.log('window_top: ' + window_top);
	console.log('div_top: ' + div_top);
	function header_sticker() {
		var window_top = $(window).scrollTop();
		var div_top = $('.book-page').offset().top;
		if (window_top + nav_head_height > div_top) {
			$('#bookpage-header').addClass('sticky').css('top', (window_top - nav_head_height)  - 179);
			console.log('adding sticky');
		} else {
			$('#bookpage-header').removeClass('sticky').css('top', 0);
		}
		console.log('div_top: ' + div_top);
		console.log('window_top: ' + window_top);
		$('.in-page-link').css('padding-top', $('#bookpage-header').height() + nav_head_height + 5);
	}
	$(document).ready(function(){
		header_sticker();
	});
	$(window).resize(function(){
		header_sticker();
	})
	$(window).scroll(function(){
		header_sticker();
	});
	var playerWidth = $('.section-break').width();
	console.log(playerWidth);
	var playerHeight = Math.round((playerWidth/16)*9);
	$('video').mediaelementplayer({
		videoWidth: playerWidth,
		videoHeight: playerHeight,
		features: ['playpause','progress','current','duration','tracks','volume','fullscreen'],
		alwaysShowControls: true,
		pauseOtherPlayer: true
	});
})(jQuery);