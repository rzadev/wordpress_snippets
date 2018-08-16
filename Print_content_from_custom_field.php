 <div class="col-md-8 text-center">
 <h2>Testimonial</h2>

    <?php $args = array(
      'post_type' => 'testimonial',
      'posts_per_page' => 3,
      'orderby' => 'date',
      'order' => 'ASC',
    ); ?>
  <ul "testimonial__list">
    <?php $testimonial = new WP_Query($args); while($testimonial->have_posts()): $testimonial->the_post(); ?>      
    <li>
      <div class="testimonial__box">
        <h3><?php the_title(); ?></h3> 
        <p class="testimonial__text"><?php the_content(); ?></p>
        <!-- 'person_name' dapet dari Field Name di Custom Field -->
        <p class="testimonial__name"><?php the_field('person_name'); ?></p>
      </div>
    </li>
    <?php endwhile; wp_reset_postdata(); ?>
  </ul>
</div>