<?php
/**
 * Create function my_responsive_thumbnail() to output responsive featured image
 * Function can be called from within the loop of any template file using
 * my_responsive_thumbnail(get_the_ID()); -> copy ini ke front-page.php
       <li class="grid1-3">
        <div class="image">
          <a href="">
            <img class="more" src="<?php echo get_stylesheet_directory_uri(); ?>/img/moreinfo.png">
          </a>
          <?php my_responsive_thumbnail(get_the_ID()); ?>
        </div>
       </li>
 */

// Copy ke functions.php
 function my_responsive_thumbnail($post_id){
 // Get the featured image ID
 $attachment_id = get_post_thumbnail_id($post_id);

 // Get the info for each image size including the original (full)
 $thumb_large    = wp_get_attachment_image_src($attachment_id, 'tourFront');
 $thumb_medium   = wp_get_attachment_image_src($attachment_id, 'featuredTour');

 // Create array containing each image size + the alt tag
 $thumb_data = array(
     'thumb_large'    => $thumb_large[0],
     'thumb_medium'   => $thumb_medium[0],
 );

 // Echo out <picture> element based on code from above
 echo '<picture>';
 echo '<!--[if IE 9]><video style="display: none;"><![endif]-->'; // Fallback for IE9
 echo '<source srcset="' . $thumb_data['thumb_large'] . ', ' . $thumb_data['thumb_large'] . ' " media="(min-width: 800px)">';
 echo '<source srcset="' . $thumb_data['thumb_medium'] . ', ' . $thumb_data['thumb_medium'] . ' ">';
 echo '<!--[if IE 9]></video><![endif]-->'; // Fallback for IE9
 echo '<img srcset="' . $thumb_data['thumb_large'] . ', ' . $thumb_data['thumb_large'] .' " >';
 echo '</picture>';
 }

 function html5blank_header_scripts()
 {
 	wp_register_script('picturefill', get_template_directory_uri() . '/js/picturefill.js', array(), '4.1.2'); // picturefill
 	wp_enqueue_script('picturefill'); // Enqueue it!
 }
 


                echo '<picture>';
                echo '<source srcset="' . $thumb_data['thumb_large'] . ', ' . $thumb_data['thumb_large'] . ' " media="(min-width: 768px)">';
                echo '<source srcset="' . $thumb_data['thumb_small'] . ', ' . $thumb_data['thumb_small'] . ' ">';
                echo '<img srcset="' . $thumb_data['thumb_large'] . ', ' . $thumb_data['thumb_large'] .' " >';
                echo '</picture>';   
?>