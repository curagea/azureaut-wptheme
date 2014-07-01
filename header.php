<!DOCTYPE html>
<!--[if IE 8]>    <html class="lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<script src="//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Merriweather+Sans:700:latin', 'Merriweather::latin']
			}
		});
	</script>

	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" />	<title>
		<?php
			if (is_404()){
				echo 'Can\'t find it! | ';
			} else {
				wp_title( '|', true, 'right' );
			}
			bloginfo( 'name' );
		?>
	</title>

	<?php if (is_front_page()): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/frontpage.css">
	<?php elseif (is_mobile()): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/mobile.css">
	<?php else: ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/desktop-tablet.css">
	<?php endif; ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!-- Pulled from http://code.google.com/p/html5shiv/ -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

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
