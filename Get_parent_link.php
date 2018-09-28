 $theParent = wp_get_post_parent_id(get_the_ID());

 <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>">

 <?php echo get_the_title($theParent)?> </a>