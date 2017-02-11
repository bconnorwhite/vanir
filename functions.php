<?php
/* Add Menus-------- */
function register_menus(){
	register_nav_menus(array('top-nav' => __('Top Nav'),));
}
add_action('init', 'register_menus');

/* Add Theme Support-------- */
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails', array('post'));
	//set_post_thumbnail_size(460, 460, true);
}

/* List Tags------------*/
function add_post_tags($posttags){
	if ($posttags) {
		for($p=0; $p<count($posttags); $p++) {
			echo $posttags[$p]->name;
			if($p!=(count($posttags)-1))
				echo ', ';
		}
	}
}
