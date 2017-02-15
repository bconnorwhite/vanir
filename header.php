<!DOCTYPE html>
<html id="html">
    <head>
        <?php if(is_front_page()){ ?>
        	<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
        <?php } else { ?>
        	<title><?php wp_title(); ?> | <?php bloginfo('name'); ?></title>
        <?php } ?>
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" />
        <meta description="A showcase of the work of Connor White, a web developer specializing in Wordpress." />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="robots" content="index,follow">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0">
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
