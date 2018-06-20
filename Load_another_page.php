  <?php
    // Load another page to current page
    $url = get_page_by_title('title');
    echo get_post_gallery($url->ID);
  ?>