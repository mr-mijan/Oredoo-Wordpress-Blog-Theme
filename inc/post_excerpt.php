<?php
// Post Excerpt
function heer_custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'heer_custom_excerpt_length', 999 );

function herr_excerpt_more( $more ) {
	return ' ...';
}
add_filter( 'excerpt_more', 'herr_excerpt_more' );