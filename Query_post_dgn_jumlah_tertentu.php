   <?php $args = array(
    // Jumlah post yg ingin ditampilkan
    'posts_per_page' => 3,
    // ID categories
    'cat' => 3,
    'order' => 'DESC',
    'orderby' => 'date'
  ); ?>
  <?php $slider = new WP_Query($args); ?>
  <?php while ($slider->have_posts()) : $slider->the_post(); ?>