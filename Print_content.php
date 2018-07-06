<?php
<?php get_header(); ?>

<div class="bottom-front-page">
  <div class="about-us">
    <?php $aboutUs = new WP_Query('page_id=9'); ?>
    <?php while($aboutUs->have_posts() ): $aboutUs->the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>

    <?php endwhile; wp_reset_postdata();  ?>
  </div>


  <div class="blog-tips">
    <h2>Tips to travel to Toronto</h2>
    <?php
      $args = array(
        // cat ambil dari category id
        'cat' => 4,
        'post_per_page' => 2,
        'order' => 'DESC',
        'orderby' => 'date'  
      ); ?>

    <?php $travelTips = new WP_Query($args); ?>
    <ul>
      <?php while($travelTips->have_posts()): $travelTips->the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('medium-blog'); ?>
        </a>

        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class='read-more'>Continue reading...</a>
      </li>
      <?php endwhile; wp_reset_postdata();  ?>
    </ul>
  </div>
</div>


<?php get_footer(); ?>

?>


<!-- CSS -->
/* Front Page */
.bottom-front-page .about-us {
  float: left;
  width: 30%;
}
 
/* Latest 2 Entries */
.bottom-front-page {
  clear: both;
}

.bottom-front-page h2 {
  text-align: left;
}

.bottom-front-page li {
  width: 100%;
  margin-bottom: 20px;
}

.bottom-front-page li h3 {
  margin: 10px 0;
}

.bottom-front-page li a.read-more,
a.more-link {
  display: block;
  text-align: right;
  font-size: 14px;
  font-weight: bold;
}