// Mobile JS

var $j = jQuery;

function hookToggleHeaderMenu() {
	$('.mobile-header .toggle').click(function(e){
		var menu = $('.mobile-header .content .surprise-menu');
		if (menu.is(':hidden')) {
			menu.slideDown();
		} else {
			menu.slideUp();
		}
	});
}

$j(document).ready(function() {
	//hookToggleHeaderMenu();
});