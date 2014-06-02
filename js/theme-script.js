// Javascript

var $j = jQuery;

function stickySidebar() {
	var length = $('#content').height() - $('#sidebar').height() + $('#content').offset().top;

	$(window).scroll(function () {

		var scroll = $(this).scrollTop();
		var height = $('#sidebar').height() + 'px';

		if (scroll < $('#content').offset().top) {
			$('#content').css({
					'position': 'absolute',
					'top': '0'
			});

		} else {
			$('#content').css({
					'position': 'fixed',
					'top': '0',
					'height': height
			});
		}
	});
};

$j(document).ready(function() {
	// stickySidebar();
});
