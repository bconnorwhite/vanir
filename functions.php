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

/* List Categories------------*/
function add_post_cats($postcats){
	if ($postcats) {
		for($c=0; $c<count($postcats); $c++) {
			echo $postcats[$c]->name;
			if($c!=(count($postcats)-1))
				echo ', ';
		}
	}
}

/* List Tags------------*/
function add_post_tags($posttags){
	if ($posttags) {
		for($t=0; $t<count($posttags); $t++) {
			echo $posttags[$t]->name;
			if($t!=(count($posttags)-1))
				echo ', ';
		}
	}
}
