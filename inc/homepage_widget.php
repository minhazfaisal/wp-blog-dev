<?php
/*
category siedebar widget
*/
function home_widgets() {
  
  // blog posts
	register_sidebar( array(
		'name'          => __( 'Section 1', 'wpt1' ),
		'id'            => 's1_posts',
		'description'   => __( 'Will show posts.', 'wpt1' ),
		'before_widget' => '<div class="single-product">',
		'after_widget'  => '</div>',
		
	) );
  

}
add_action( 'widgets_init', 'home_widgets' );

?>