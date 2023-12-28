<?php
// Comment Form
function oredoo_comment_textarea_placeholder( $args ) {
	$args['comment_field']   = str_replace( 'textarea', 'textarea placeholder="Your comment here..."', $args['comment_field'] );
	return $args;
}
add_filter( 'comment_form_defaults', 'oredoo_comment_textarea_placeholder' );

function oredoo_comment_form_fields( $fields ) {
	foreach( $fields as &$field ) {
		$field = str_replace( 'id="author"', 'id="author" placeholder="Name"', $field );
		$field = str_replace( 'id="email"', 'id="email" placeholder="Email Address"', $field );
		$field = str_replace( 'id="url"', 'id="url" placeholder="Website"', $field );
	}
	return $fields;
}
add_filter( 'comment_form_default_fields', 'oredoo_comment_form_fields' );