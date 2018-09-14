<?php
// <!-- functions.php -->


// Enable custom logo
function name_custom_logo() {
  $logo = array(
    'width' => 250,
    'height' => 200
  );
   add_theme_support('custom-logo', $logo);
}
add_action('after_setup_theme', 'name_custom_logo');



// <!-- header.php -->
<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
  // Print Logo 
	if(function_exists('the_custom_logo')) {
	  the_custom_logo();
	}
  // Hard code logo
	// <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="Logo" class="logo"> -> delete hard 
</a>


<!-- Edit the css  -->