<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <!--
    	Copyright (c) David Bushell | http://dbushell.com/ (original HTML, CSS)

    -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php bloginfo('name'); ?> | <?php wp_title(); ?> </title>

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
		<?php wp_head(); ?>
	
	</head>
	
	<body>

		<div id="outer-wrap">
		<div id="inner-wrap">

		    <header id="top" role="banner">
		        <div class="block">
		            <h1 class="block-title"><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></h1>
		            <a class="nav-btn" id="nav-open-btn" href="#nav">Book Navigation</a>
		        </div>
		    </header>

		    <nav id="nav" role="navigation">
		        <div class="block">
		            <?php wp_nav_menu( array('menu' => 'Main' )); ?>
		            <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
		        </div>
		    </nav>

		    <div id="main" role="main">

		    	<article class="block prose">