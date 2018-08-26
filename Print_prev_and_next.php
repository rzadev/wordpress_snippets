<!-- Print Pagination -->
<?php
  if(is_singular('post')) {
    the_post_navigation(array(
      'next_text' => 'Next',
      'prev_text' => 'Prev'
    ));
  }
?>