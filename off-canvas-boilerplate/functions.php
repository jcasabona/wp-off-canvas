<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images");

if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
}



/*****Sidebars!******/

register_sidebar( array (
	'name' => __( 'Sidebar', 'main-sidebar' ),
	'id' => 'primary-widget-area',
	'description' => __( 'The primary widget area', 'wpbp' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => "</div>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

register_sidebar( array (
	'name' => __( 'Sidebar2', 'secondary-sidebar' ),
	'id' => 'secondary-widget-area',
	'description' => __( 'The secondary widget area', 'wpbp' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => "</div>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );




function woc_scripts(){
	global $wp_styles;

	wp_register_script('modernizr', TEMPPATH. '/js/modernizr.js');
  	wp_enqueue_script('modernizr');
  	wp_register_script('woc-main', TEMPPATH . '/js/main.js', array('modernizr'), '', true);
  	wp_enqueue_script('woc-main');

  	wp_enqueue_style( 'woc-ie-css', TEMPPATH . '/css/ie.css'); 
  	$wp_styles->add_data( 'woc-ie-css', 'conditional', 'lt IE 9 & (!IE Mobile)' );

}

add_action( 'wp_enqueue_scripts', 'woc_scripts' );

function woc_print_post_nav(){
?>
		<div class="navigation group">
			<div class="alignleft"><?php next_posts_link('&laquo; Next') ?></div>
			<div class="alignright"><?php previous_posts_link('Previous &raquo;') ?></div>
		</div>
<?php

}

function woc_print_not_found(){
?>
		<h3 class="center">No posts found. Try a different search?</h3>
		<?php get_search_form(); ?>
<?php
}




?>