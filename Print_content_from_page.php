<section class="container content">
  <div class="row">
    <?php
      while(have_posts()): the_post();
        the_content();
      endwhile;
    ?>
  </div>
</section>