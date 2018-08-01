<div class="page-title">
  <!-- Print the page title -->
  <?php
    $blog_page = get_option('page_for_posts');
    $title = get_the_title($blog_page);
  ?>
  <h1 class="title"><span><?php echo $title; ?></span></h1>
</div>