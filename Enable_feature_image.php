<?php

// Functions.php
add_theme_support( 'post-thumbnails'); 

// Resize featured image
add_image_size( 'featured', 1100, 418, true);
 

// Page.php
// <!-- Enable thumnbail image  -->
// Standard
<?php the_post_thumbnail(featured);  ?>

// Advanced
// <!-- Enable thumnbail image  -->
// <!-- Check if the post has thumnbail image -->
<?php if (has_post_thumbnail() ) { ?>
  <div class="featured">
    <?php the_post_thumbnail(featured);  ?>
    <h2><?php the_title(); ?></h2> 
  </div>  

<?php } else { ?>
  <h2 class="noimage"><?php the_title(); ?></h2>
<?php } ?>


// Bootstrap
<!-- functions.php -->
// Enable Featured image
 add_theme_support('post-thumbnails');

<!-- header.php -->
<!-- Generate CSS Class -->
<body <?php body_class(); ?>>
<!-- Show the featured image / hero image -->
<?php $featured = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
<?php $featured = $featured[0]; ?>

<header class="site-header" style="background-image:url(<?php echo $featured ?>);">


<!-- style.css -->
/* Hero Area */
.site-header {
	/* Tinggi hero area */
	height: 600px;
	background-repeat: no-repeat;
	background-position: center center;
	padding-top: 20px;
}

@media (min-width: 768px) {
	.site-header {
		background-size: cover;
		background-attachment: fixed;
	}

	/* Tinggi hero area */
	.home .site-header {
		height: 800px;
	}
}