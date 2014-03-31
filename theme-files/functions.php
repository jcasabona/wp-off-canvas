<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));

function woc_scripts(){
	wp_register_script('modernizr', TEMPPATH. '/js/modernizr.js');
  	wp_enqueue_script('modernizr');
  	wp_register_script('woc-main', TEMPPATH . '/js/main.js', array('modernizr'), '', true);
  	wp_enqueue_script('woc-main');

  	wp_enqueue_style( 'woc-css', TEMPPATH . '/css/off-canvas.css'); 

}

add_action( 'wp_enqueue_scripts', 'woc_scripts' );

?>