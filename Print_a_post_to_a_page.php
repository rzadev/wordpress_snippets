<div class="operations">
  <!-- 67 = id post -->
  <?php $operationsArea = new WP_Query(array('p' => 67)); ?>
  <?php while($operationsArea->have_posts()): $operationsArea->the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; wp_reset_postdata(); ?>
</div>