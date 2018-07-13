<?php
  <div class="about-us-images">
    <img src="<?php the_field('image_1'); ?>">
    <img src="<?php the_field('image_2'); ?>">
  </div>

?>

 <!-- Check if field has img before print to html -->
        <?php if(get_field('image_1')) { ?>
          <div class="photo">
           <img src="<?php the_field('image_1'); ?>">
          </div>  
        <?php } ?>

        <?php if(get_field('image_2')) { ?>
          <div class="photo">
           <img src="<?php the_field('image_2'); ?>">
          </div>  
        <?php } ?>

<!-- Print custom img size using img ID from Custom field-->
	<?php if(get_field('image_1')) { ?>
	  <div class="photo">
	    <?php $image_id = get_field('image_1'); ?>
	    <?php echo wp_get_attachment_image($image_id, 'medium', false, array('class' => 'polaroid')); ?>
	  </div>  
	<?php } ?>

	<?php if(get_field('image_2')) { ?>
	  <div class="photo">
	    <?php $image_id = get_field('image_2'); ?>
	    <?php echo wp_get_attachment_image($image_id, 'medium', false, array('class' => 'polaroid')); ?>
	  </div>  
	<?php } ?>