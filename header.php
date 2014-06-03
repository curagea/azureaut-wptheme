<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<link rel="icon" href="/favicon.gif" type="image/x-icon" />
	<link rel="shortcut icon" href="/favicon.gif" type="image/x-icon" />
	<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

	<?php if (is_front_page()): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/frontpage.css">
	<?php else: ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/main.css">
	<?php endif; ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
	<?php if (is_mobile()): ?>
		<div class="mobile-header">
			<div class="content sticky">
				<h2 class="grid-100"><a href="#" class="toggle">Click!</a> Azure Autonomie</h2>
				<ul class="surprise-menu grid-100">
					<li><a href="/journal">Journal</a></li>
					<li><a href="/pastime">Pastime</a></li>
					<li><a href="/portfolio">Portfolio</a></li>
					<li><a href="/about">About</a></li>
				</ul>
			</div> <!-- end .sticky -->
		</div>
	<?php endif; ?>