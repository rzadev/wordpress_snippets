<?php
Display posts that have these categories, using category id:

$query = new WP_Query( array( 'cat' => '2,6,17,38' ) );
Display posts that have these categories, using category slug:

$query = new WP_Query( array( 'category_name' => 'staff,news' ) );
Display posts that have "all" of these categories:

$query = new WP_Query( array( 'category_name' => 'staff+news' ) );
Exclude Posts Belonging to Category

Display all posts except those from a category by prefixing its id with a '-' (minus) sign.

$query = new WP_Query( array( 'cat' => '-12,-34,-56' ) );


Multiple Category Handling

Display posts that are in multiple categories. This shows posts that are in both categories 2 and 6:

$query = new WP_Query( array( 'category__and' => array( 2, 6 ) ) );


To display posts from either category 2 OR 6, you could use cat as mentioned above, or by using category__in 
(note this does not show posts from any children of these categories):

$query = new WP_Query( array( 'category__in' => array( 2, 6 ) ) );


You can also exclude multiple categories this way:

$query = new WP_Query( array( 'category__not_in' => array( 2, 6 ) ) );

?>