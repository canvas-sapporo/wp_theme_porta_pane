<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">

  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">

  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="512x512" href="<?php echo get_template_directory_uri(); ?>/android-chrome-512x512.png">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
