<?php

// custom excerpt length
function themify_custom_excerpt_length( $length ) {
return 75;
}
add_filter( 'excerpt_length', 'themify_custom_excerpt_length', 999 );


// Call actions and filters in after_setup_theme hook
add_action( 'after_setup_theme', 'custom_themify_parent_theme_setup' );
function custom_themify_parent_theme_setup() {

// add more link to excerpt
function themify_custom_excerpt_more($more) {
global $post;
return ' <a href="'. get_permalink($post->ID) . '" class="more-link">Continue Reading</a>';
}
add_filter('excerpt_more', 'themify_custom_excerpt_more');
}

// add the jetpack subscribe box to the end of each post

function airskull_subscribe($content) {
	if ( is_single() ) {  
      	return $content."<div>[jetpack_subscription_form]</div>";
	} else {
	return $content;
	}
}
add_filter( 'the_content', 'airskull_subscribe' );

?>
