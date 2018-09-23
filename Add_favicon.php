<?php // Opening PHP tag - nothing should be before this, not even whitespace

// Custom Function to Include
function my_favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'my_favicon_link' );




<div class="deployment clearfix">
  <div class="container">
    <div class="row">
      <?php $deploymentTitle = new WP_Query(array('page_id' => 74)); ?>
      <?php while ($deploymentTitle->have_posts()) : $deploymentTitle->the_post(); ?>
        <div class="col-12"><h2><?php the_title(); ?></h2></div>
      <?php endwhile; wp_reset_postdata(); ?>  
        <?php $args1 = array(
          // Ambil dari Custom Post Type
          // 'development' ambil dari slug post type
          'post_type' => 'deployment',
          'posts_per_page' => 4,
          'orderby' => 'id',
          'order' => 'ASC',
        ); ?>
        <?php $deployment = new WP_Query($args1);
        while ($deployment->have_posts()) : $deployment->the_post(); ?>    
          <div class="col-12 col-md-6 col-lg-3">
            <div class="deployment__box">
                <?php the_content(); ?>
            </div>
          </div>
        <?php endwhile; wp_reset_postdata(); ?>  
    </div>
  </div>
</div>