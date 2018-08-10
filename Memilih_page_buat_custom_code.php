<section class="container content">
  <div class="row">

  <!-- Memilih page contact (slug page) dan buat custom setting -->
  <?php if(is_page('contact')): ?>
    <div class="col-sm-8 col-sm-offset-2 contact-page">
    <?php
    // Print the content
      while(have_posts()): the_post();
        the_content();
      endwhile;
    ?>     
    </div>
    <?php else: ?>
    <?php
    // Print the content
      while(have_posts()): the_post();
        the_content();
      endwhile;
    ?>
    <?php endif; ?>
  </div>
</section>
