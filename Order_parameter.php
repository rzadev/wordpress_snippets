<?php
Order & Orderby Parameters
Sort retrieved posts.

order (string | array) - Designates the ascending or descending order of the 'orderby' parameter. Defaults to 'DESC'. An array can be used for multiple order/orderby sets.
'ASC' - ascending order from lowest to highest values (1, 2, 3; a, b, c).
'DESC' - descending order from highest to lowest values (3, 2, 1; c, b, a).
orderby (string | array) - Sort retrieved posts by parameter. Defaults to 'date (post_date)'. One or more options can be passed.
'none' - No order (available since Version 2.8).
'ID' - Order by post id. Note the capitalization.
'author' - Order by author. ('post_author' is also accepted.)
'title' - Order by title. ('post_title' is also accepted.)
'name' - Order by post name (post slug). ('post_name' is also accepted.)
'type' - Order by post type (available since Version 4.0). ('post_type' is also accepted.)
'date' - Order by date. ('post_date' is also accepted.)
'modified' - Order by last modified date. ('post_modified' is also accepted.)
'parent' - Order by post/page parent id. ('post_parent' is also accepted.)
'rand' - Random order. You can also use 'RAND(x)' where 'x' is an integer seed value.
'comment_count' - Order by number of comments (available since Version 2.9).
'relevance' - Order by search terms in the following order: First, whether the entire sentence is matched. Second, if all the search terms are within the titles. Third, if any of the search terms appear in the titles. And, fourth, if the full sentence appears in the contents.
'menu_order' - Order by Page Order. Used most often for Pages (Order field in the Edit Page Attributes box) and for Attachments (the integer fields in the Insert / Upload Media Gallery dialog), but could be used for any post type with distinct 'menu_order' values (they all default to 0).
'meta_value' - Note that a 'meta_key=keyname' must also be present in the query. Note also that the sorting will be alphabetical which is fine for strings (i.e. words), but can be unexpected for numbers (e.g. 1, 3, 34, 4, 56, 6, etc, rather than 1, 3, 4, 6, 34, 56 as you might naturally expect). Use 'meta_value_num' instead for numeric values. You may also specify 'meta_type' if you want to cast the meta value as a specific type. Possible values are 'NUMERIC', 'BINARY', 'CHAR', 'DATE', 'DATETIME', 'DECIMAL', 'SIGNED', 'TIME', 'UNSIGNED', same as in '$meta_query'. When using 'meta_type' you can also use 'meta_value_*' accordingly. For example, when using DATETIME as 'meta_type' you can use 'meta_value_datetime' to define order structure.
'meta_value_num' - Order by numeric meta value (available since Version 2.8). Also note that a 'meta_key=keyname' must also be present in the query. This value allows for numerical sorting as noted above in 'meta_value'.
'post__in' - Preserve post ID order given in the 'post__in' array (available since Version 3.5). Note - the value of the order parameter does not change the resulting sort order.
'post_name__in' - Preserve post slug order given in the 'post_name__in' array (available since Version 4.6). Note - the value of the order parameter does not change the resulting sort order.
'post_parent__in' - Preserve post parent order given in the 'post_parent__in' array (available since Version 4.6). Note - the value of the order parameter does not change the resulting sort order.
Show Posts sorted by Title, Descending order

Display posts sorted by post 'title' in a descending order:

$args = array(
	'orderby' => 'title',
	'order'   => 'DESC',
);
$query = new WP_Query( $args );
Display posts sorted by 'menu_order' with a fallback to post 'title', in a descending order:

$args = array(
	'orderby' => 'menu_order title',
	'order'   => 'DESC',
);
$query = new WP_Query( $args );
Show Random Post

Display one random post:

$args = array(
	'orderby'        => 'rand',
	'posts_per_page' => 1,

);
$query = new WP_Query( $args );
Show Popular Posts

Display posts ordered by comment count:

$args = array(
	'orderby' => 'comment_count'
);
$query = new WP_Query( $args );
Show Products sorted by Price

Display posts with 'Product' type ordered by 'Price' custom field:

$args = array(
	'post_type' => 'product',
	'orderby'   => 'meta_value_num',
	'meta_key'  => 'price',
);
$query = new WP_Query( $args );
Multiple 'orderby' values

Display pages ordered by 'title' and 'menu_order'. (title is dominant):

$args = array(
	'post_type' => 'page',
	'orderby'   => 'title menu_order',
	'order'     => 'ASC',
);
$query = new WP_Query( $args );
Multiple 'orderby' values using an array

Display pages ordered by 'title' and 'menu_order' with different sort orders (ASC/DESC) (available since Version 4.0):

$args = array(
	'orderby' => array( 'title' => 'DESC', 'menu_order' => 'ASC' )
);
$query = new WP_Query( $args );
A more powerful ORDER BY in WordPress 4.0
Mulitiple orderby/order pairs

$args = array(
	'orderby'  => array( 'meta_value_num' => 'DESC', 'title' => 'ASC' ),
	'meta_key' => 'age'
);
$query = new WP_Query( $args );
'orderby' with 'meta_value' and custom post type

Display posts of type 'my_custom_post_type', ordered by 'age', and filtered to show only ages 3 and 4 (using meta_query).

$args = array(
	'post_type'  => 'my_custom_post_type',
	'meta_key'   => 'age',
	'orderby'    => 'meta_value_num',
	'order'      => 'ASC',
	'meta_query' => array(
		array(
			'key'     => 'age',
			'value'   => array( 3, 4 ),
			'compare' => 'IN',
		),
	),
);
$query = new WP_Query( $args );

'orderby' with multiple 'meta_key's

If you wish to order by two different pieces of postmeta (for example, City first and State second), you need to combine and link your meta query to your orderby array using 'named meta queries'. See the example below:

$q = new WP_Query( array(
    'meta_query' => array(
        'relation' => 'AND',
        'state_clause' => array(
            'key' => 'state',
            'value' => 'Wisconsin',
        ),
        'city_clause' => array(
            'key' => 'city',
            'compare' => 'EXISTS',
        ), 
    ),
    'orderby' => array( 
        'city_clause' => 'ASC',
        'state_clause' => 'DESC',
    ),
) );

?>