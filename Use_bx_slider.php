<!-- Menampilkan bxslider di front-page -->

<!-- Header.php -->
<?php elseif (is_front_page()) :  ?>
	<section class="slider">
		<?php do_action('slider_index'); ?>
	</section>
<?php  else : ?>


<!-- Functions.php -->
function slider() {
    $args = array(
        // ''slider ambil dari slug di Custom Post Type
        'post_type' => 'slider',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 4
    );

    $slider = new WP_Query($args);
    echo "<ul class='slider'>";
    while($slider->have_posts()): $slider->the_post();
        echo "<li>";
        // 'link' di dapat dari slug di Custom fields
        $link = get_field('link');
        echo "<a href='$link'>";
            the_post_thumbnail('slider');
        echo "</a>";
        echo "</li>";
    endwhile; wp_reset_postdata();
    echo "</ul>";
}
add_action('slider_index', 'slider');


<!-- Script.js -->
(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		jQuery('ul.slider').bxSlider({
			auto: true,
			pager: false
		});
		
	});
	
})(jQuery, this);