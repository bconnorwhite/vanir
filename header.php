<!DOCTYPE html>
<html id="html">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php if(is_front_page()){ ?>
        	<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
        <?php } else { ?>
        	<title><?php wp_title(); ?> | <?php bloginfo('name'); ?></title>
        <?php } ?>
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" />
    		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    		<link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css">
    		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,700|Merriweather:300,400,700' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="Revisit-After" content="7 Days">
        <meta name="robots" content="index,follow">
        <?php wp_head(); ?>
    </head>
    <body>
      <header id="header" <?php if(!is_front_page()){?>class="barMenu"<?php } ?>>
        <div class="wrap">
          <a id="top-bar-name" href="/#top"><h1>Connor <strong>White</strong></h1></a>
          <?php wp_nav_menu(array('theme_location' => 'top-nav')); ?>
          <svg id="hamburger"><use xlink:href="<?php bloginfo('template_url'); ?>/img/hamburger.svg#hb" /></svg>
        </div>
      </header>
