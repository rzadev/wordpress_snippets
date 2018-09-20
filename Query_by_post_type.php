<?php
$args = array( 'post_type' => 'product', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
  the_title();
  echo '<div class="entry-content">';
  the_content();
  echo '</div>';
endwhile;

?>

<div class="col-lg-8 text-center">
  <h2>Testimonial</h2>
    <div id="slider" class="slider">
      <ul class="slider testimonial__list">
          <?php $args = array(
              // Ambil dari Custom Post Type
              'post_type' => 'testimonial',
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order' => 'ASC',
            ); ?>
            <?php $testimonial = new WP_Query($args); while($testimonial->have_posts()): $testimonial->the_post(); ?>      
            <li>
                <h3><?php the_title(); ?></h3> 
                <?php the_content(); ?>
                <!-- 'person_name' dapet dari Field Name di Custom Field -->
                <p class="text-muted"><span> <?php the_field('person_name'); ?> - </span> <?php the_field('from'); ?></p>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>        
    </div>
</div>
<!-- col-md-8 -->