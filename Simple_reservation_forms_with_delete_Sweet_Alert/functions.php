<?php
// Include the database.php file (Create table)
require get_template_directory() . '/inc/database.php';

// Include the reservations.php file (Insert form data to table)
require get_template_directory() . '/inc/reservations.php';

// Ceate Options page for the theme
require get_template_directory() . '/inc/options.php';


function restaurant2_setup()
{
  // Enable dynamic title
  add_theme_support('title-tag'); 

  // Displayed feature image on the backend edit page
  add_theme_support('post-thumbnails');

  // Display dynamic title from backend
  add_theme_support('title-tag');

  // Register menus
  register_nav_menus(array(
    'primary' => esc_html__('Header Menu', 'restaurant2')
  ));
}
// Enable function after the theme setup
add_action('after_setup_theme', 'restaurant2_setup');

// Enable custom logo
function restaurant2_custom_logo() {
  $logo = array(
    'width' => 175,
    'height' => 70
  );
   add_theme_support('custom-logo', $logo);
}
add_action('after_setup_theme', 'restaurant2_custom_logo');


function restaurant2_styles() {
// Add stylesheet
wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0');
wp_enqueue_style('normalize');

wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.1');
wp_enqueue_style('bootstrap');

wp_register_style('datetime-local', get_template_directory_uri() . '/css/datetime-local-polyfill.css', array(), '1.0.0' );
wp_enqueue_style('datetime-local');

wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');
wp_enqueue_style('style');


// Add Javascript & jQuery
wp_enqueue_script('jquery');
wp_enqueue_script('jquery-ui-core');
wp_enqueue_script('jquery-ui-datepicker');

wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '4.1.1', true);
wp_enqueue_script('bootstrapjs');

wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array('jquery'), '2.8.3', true);
wp_enqueue_script('modernizr');

wp_register_script('datetime-local-polyfill', get_template_directory_uri() . '/js/datetime-local-polyfill.min.js', array('jquery', 'jquery-ui-core', 'jquery-ui-datepicker', 'modernizr' ), '1.0.0', true);
wp_enqueue_script('datetime-local-polyfill');

wp_register_script('mainjs', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('mainjs');

}
// 'wp_enqueue_scripts' -> Render CSS and JS di Front End
add_action('wp_enqueue_scripts', 'restaurant2_styles');


// Enable Javascript in admin panel
function restaurant2_admin_scripts() {
  // Sweet alert 2
  wp_enqueue_style('sweetalert', get_template_directory_uri() . '/css/sweetalert2.min.css');
  wp_enqueue_script('sweetalertjs', get_template_directory_uri() . '/js/sweetalert2.min.js', array('jquery'), 1.0, true);
  wp_enqueue_script('adminjs', get_template_directory_uri() . '/js/admin_ajax.js', array('jquery'), '1.0', true);

  // Tell wordpress we want to use admin-ajax.php
  wp_localize_script(
    'adminjs',
    'admin_ajax',
    array('ajaxurl' => admin_url('admin-ajax.php') )
  );

}
add_action('admin_enqueue_scripts', 'restaurant2_admin_scripts');




// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


?>