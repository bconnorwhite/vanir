<?php get_header(); ?>
<div id="main" class="page">
	<ul>
		<?php
	    $args = array( 'post_type' => 'post' );
	    $post_query = new WP_Query($args);
			if($post_query->have_posts() ) {
  			while($post_query->have_posts() ) {
    			$post_query->the_post();
					include 'case-study.php';
			  }
			}
		?>
	</ul>
</div>
<?php get_footer(); ?>
