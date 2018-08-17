<?php
// Display posts that have this category (and any children of that category), using category id:

$query = new WP_Query( array( 'cat' => 4 ) );


// Display posts that have this category (and any children of that category), using category slug:

$query = new WP_Query( array( 'category_name' => 'staff' ) );


// Display posts that have this category (not children of that category), using category id:

$query = new WP_Query( array( 'category__in' => 4 ) );

?>