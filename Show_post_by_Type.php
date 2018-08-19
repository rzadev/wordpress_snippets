<?php
Display only pages:

$query = new WP_Query( array( 'post_type' => 'page' ) );


Display 'any' post type (retrieves any type except revisions and types with 'exclude_from_search' set to TRUE):

$query = new WP_Query( array( 'post_type' => 'any' ) );


Display multiple post types, including custom post types:

$args = array(
	'post_type' => array( 'post', 'page', 'movie', 'book' )
);
$query = new WP_Query( $args );

?>