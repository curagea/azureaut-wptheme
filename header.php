<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<script type="text/javascript">
		WebFontConfig = {
			google: { families: [ 'Ek+Mukta:700:latin', 'Cardo::latin' ] }
		};
		(function() {
			var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
				'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		})();
	</script>

	<meta charset="<?php bloginfo('charset'); ?>" />
	<link rel="icon" href="/favicon.gif" type="image/x-icon" />
	<link rel="shortcut icon" href="/favicon.gif" type="image/x-icon" />
	<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

	<?php if (is_mobile()): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/mobile.css">
	<?php endif; ?>

	<?php if (is_front_page()): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/frontpage.css">
	<?php elseif (!is_mobile()): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/desktop-tablet.css">
	<?php endif; ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

<div class="wrapper">
	<?php
		if (is_mobile() and !is_front_page()) {
			get_template_part('mobile-header');
		}
	?>
	<div class="main-content">
