<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <link rel="icon" href="/favicon.gif" type="image/x-icon" />
  <link rel="shortcut icon" href="/favicon.gif" type="image/x-icon" />
  <title><?php wp_title(); ?></title>

  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  <? if (is_front_page()): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/frontpage.css">
  <? endif; ?>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>