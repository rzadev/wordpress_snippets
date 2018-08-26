<?php

function hall_setup()
{
  // Displayed feature image on the backend edit page
  add_theme_support('post-thumbnails');

  // Display dynamic title from backend
  add_theme_support('title-tag');

  // Hide admin bar
  add_filter('show_admin_bar', '__return_false');

  // Register menus
  register_nav_menus(array(
    'primary' => esc_html__('Header Menu', 'hall')
  ));

  add_image_size('uavphoto', 1400, 1000, true);


  // Set ukuran Width dan Height thumbnail di Dashboard
  update_option('thumbnail_size_w', 255);
  update_option('thumbnail_size_h', 160);
  
  // Enable dynamic title
  add_theme_support('title-tag'); 
}
// Enable function after the theme setup
add_action('after_setup_theme', 'hall_setup');

// Enable custom logo
function custom_logo() {
  $logo = array(
    'height' => 70,
    'width' => 175
  );
   add_theme_support('custom-logo', $logo);
}
add_action('after_setup_theme', 'custom_logo');


function hall_styles() {
// Add stylesheet
 wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0');
wp_enqueue_style('normalize');

wp_register_style('fontawesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
wp_enqueue_style('fontawesome');

wp_register_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
wp_enqueue_style('bootstrap');

wp_register_style('slick', get_stylesheet_directory_uri() . '/css/slick.css');
wp_enqueue_style('slick');

wp_register_style('bxslider', get_stylesheet_directory_uri() . '/css/jquery.bxslider.min.css');
wp_enqueue_style('bxslider');

wp_register_style('fluidbox', get_stylesheet_directory_uri() . '/css/fluidbox.min.css');
wp_enqueue_style('fluidbox');

wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0');
wp_enqueue_style('style');

// Add Javascript & jQuery
wp_enqueue_script('jquery');

wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '4.1.1', true);
wp_enqueue_script('bootstrapjs');

wp_register_script('slickjs', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.8.0', true);
wp_enqueue_script('slickjs'); 

wp_register_script('bxsliderjs', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '4.4.2', true);
wp_enqueue_script('bxsliderjs');

wp_register_script('debounce', get_template_directory_uri() . '/js/jquery.ba-throttle-debounce.min.js', array('jquery'), '1.0.1', true);
wp_enqueue_script('debounce');

wp_register_script('fluidboxjs', get_template_directory_uri() . '/js/jquery.fluidbox.min.js', array('jquery'), '2.0.5', true);
wp_enqueue_script('fluidboxjs');

wp_register_script('mainjs', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('mainjs');

}
add_action('wp_enqueue_scripts', 'hall_styles');

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Enable Widget
function theme_widgets() {
// Menampilkan icon industries
register_sidebar( array(
  'name'                  => __('Icon for the Front Page'),
  'id'                    => 'front-page',
  'description'           => 'Icon widget for the front-page',
  // Wrap widget in a div
  'before_widget'         => '<div id="%1$s" class="widget %2$s col-md-4">',
  'after_widget'          => '</div></div>',
  'before_title'          => '<h3 class="widget-title">',
  'after_title'           => '</h3><div class="industries__box"> ',
) );

// Menampilkan logo client
register_sidebar( array(
  'name'                  => __('Client logo'),
  'id'                    => 'client-logo',
  'description'           => 'Logo for the client',
  // Wrap widget in a div
  'before_widget'         => '<div id="%1$s" class="widget %2$s col-4 col-md-2">',
  'after_widget'          => '</div></div>',
  'before_title'          => '<h3 class="widget-title">',
  'after_title'           => '</h3><div class="client__box"> ',
) );


// Menampilkan social media icon di footer
register_sidebar( array(
  'name'                  => __('Social Media Icon'),
  'id'                    => 'socmed-icon',
  'description'           => 'Social Media Icon',
  // Wrap widget in a div
  'before_widget'         => '<div id="%1$s" class="widget %2$s">',
  'after_widget'          => '</div>',
  'before_title'          => '<h3 class="widget-title">',
  'after_title'           => '</h3>',
) );

}
add_action('widgets_init', 'theme_widgets');


// Custom excerpt
function html5wp_index($length) // Create 70 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 70;
}

//Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post'); 

function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
// Read more bisa di rubah kalimatnya
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('Read more', 'html5blank') . '</a>';
}

// add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
// add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
?>