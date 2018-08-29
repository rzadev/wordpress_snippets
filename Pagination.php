<!-- Di edit post, tambahkan:
<!--nextpage-->
<!-- Di akhir paragraph, text mode -->

<!-- Di single.php: -->
<h1><?php the_title(); ?></h1>
      <?php the_content(); ?>

      <!-- Print Pagination -->
      <?php
        wp_link_pages(array(
          'before'  => '<div class="page-links"><span class="page-links-title">' .__('Pages ', 'restaurant1') . '</span>',
          'after' => '</div>',
          'link_before' => '<span>',
          'link_after' => '</span>',
          'pagelink' => '<span class="screen-reader-text">' . __('Page ', 'restaurant1') . '</span>%',
          'separator' => '<span class="screen-reder-text">, </span>'

        ));
      ?>
      <?php endwhile; ?>
    <?php endif; ?>