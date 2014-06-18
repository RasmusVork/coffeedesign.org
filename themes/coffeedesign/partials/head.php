<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php echo get_bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="Coffee &amp; Design is a free, monthly event to connect design professionals in Kansas City.">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:700|Merriweather:300italic|Lato" />
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="initial-scale = 1.0, user-scalable = no, width = device-width, height = device-height" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class($class); ?>>