
Display post by ID:
  <?php $query = new WP_Query( array( 'p' => 7 )); ?>

Display page by ID:
  <?php $query = new WP_Query( array( 'page_id' => 7 )); ?>
          

<?php
Show Post/Page by Slug

Display post by slug:

$query = new WP_Query( array( 'name' => 'about-my-life' ) );
//for page, use:              'pagename'=>'about-my-life'


Show Child Posts/Pages

Display child page using the slug of the parent and the child page, separated by a slash (e.g. 'parent_slug/child_slug'):
$query = new WP_Query( array( 'pagename' => 'contact_us/canada' ) );


Display child pages using parent page ID:
$query = new WP_Query( array( 'post_parent' => 93 ) );


Display only top-level pages, exclude all child pages:
$query = new WP_Query( array( 'post_parent' => 0 ) );


Display posts whose parent is in an array:
$query = new WP_Query( array( 'post_parent__in' => array( 2, 5, 12, 14, 20 ) ) );


Multiple Posts/Pages Handling

Display only the specific posts:

$query = new WP_Query( array( 'post_type' => 'page', 'post__in' => array( 2, 5, 12, 14, 20 ) ) );
Display all posts but NOT the specified ones:

$query = new WP_Query( array( 'post_type' => 'post', 'post__not_in' => array( 2, 5, 12, 14, 20 ) ) );
Note: you cannot combine post__in and post__not_in in the same query.

Also note, not to pass comma separated string

'post__not_in' => array( '1,2,3' )  // <--- this wont work

?>