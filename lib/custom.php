<?php
/**
 * Custom functions
 */

// Add .img-embed class to images
function my_image_class_filter( $classes )
{
	return $classes . ' img-embed';
}
add_filter( 'get_image_tag_class', 'my_image_class_filter' );

// Turn of auto linking of images
update_option( 'image_default_link_type' , 'none' );