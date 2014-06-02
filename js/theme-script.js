// Javascript

var $j = jQuery;

$j(document).ready(function() {
	var length = $('#content').height() - $('#sidebar').height() + $('#content').offset().top;

	$(window).scroll(function () {

		var scroll = $(this).scrollTop();
		var height = $('#sidebar').height() + 'px';

		if (scroll < $('#content').offset().top) {

			$('#content').css({
					'position': 'absolute',
					'top': '0'
			});

		// } else if (scroll > length) {

		// 	$('#content').css({
		// 			'position': 'absolute',
		// 			'bottom': '0',
		// 			'top': 'auto'
		// 	});

		} else {

			$('#content').css({
					'position': 'fixed',
					'top': '0',
					'height': height
			});
		}
});

});
