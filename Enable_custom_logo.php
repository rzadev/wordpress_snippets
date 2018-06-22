<?php
// <!-- functions.php -->

function name_custom_logo() {
  $logo = array(
    'height' => 200,
    'width' => 250
  );

   // Enable custom logo
   add_theme_support('custom-logo', $logo);
}
add_action('after_setup_theme', 'name_custom_logo');



// <!-- header.php -->
if(function_exists('the_custom_logo')) {
  the_custom_logo();
}
