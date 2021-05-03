function Ytplayer() {

}
Ytplayer.prototype.play = function () {


	var block = $('<div />', {
		class: 'mbYTP_wrapper',
		id: 'wrapper_mobileapp-video-bg',
		css: {
			'position': 'absolute',
			'z-index': '0',
			'min-width': '100%',
			'min-height': '100%',
			'left': '0',
			'top': '0',
			'overflow': 'hidden',
			'opacity': '1',
			'transition-property': 'opacity',
			'transition-duration': '500ms'
		}

	});
	var frame = $('<iframe />', {
		src:'https://www.youtube.com/embed/m5_AKjDdqaU?modestbranding=1&autoplay=1&mute=1&controls=0&showinfo=0&rel=0&enablejsapi=1&version=3&playerapiid=iframe_mobileapp-video-bg&origin=*&allowfullscreen=true&wmode=transparent&iv_load_policy=3&playsinline=0&html5=1&widgetid=1',
		frameborder: '0',
		allow: 'accelerometer;autoplay;clipboard-write;encrypted-media;gyroscope;picture-in-picture',
		id: 'iframe_mobileapp-video-bg',
		class: 'playerBox',
		css: {
			'position': 'absolute',
			'z-index': '0',
			'width': '1333px',
			'height': '750px',
			'top': '0px',
			'left': '0px',
			'overflow': 'hidden',
			'opacity': '1',
			'user-select': 'none',
			'margin-top': '-31px',
			'margin-left': '0px',
			'max-width': 'initial'
		},
		allowFullscreen: '1',
		title: 'YouTube video player',
		unselectable: 'on'
	});

	var block2 = $('<div />',{
		class:'YTPOverlay',
		css:{
			'position': 'absolute',
			'top': '0px',
			'left': '0px',
			'width': '100%',
			'height': '100%',

		}

	});
	frame.appendTo(block);
	block2.appendTo(block);
	$('#mobile-app-area').prepend(block);
};