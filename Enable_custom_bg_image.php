<?php
	// <!-- Custom featured image (background image) -->
	<?php $featured = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');  ?>	
	<?php $featured = $featured[0]; ?>

	<div class="featuredImage" style="background-image:url(<?php echo $featured ?>);"></div>

?>