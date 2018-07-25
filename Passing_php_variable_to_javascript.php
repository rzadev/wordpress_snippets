<?php
// Struktur file: C:\wamp64\www\atw\wp-content\themes\atw\login
// Functions.php
function function_name() {
    wp_enqueue_style( 'vegasCSS', get_template_directory_uri() . '/login/css/vegas.min.css', false);
    wp_enqueue_style( 'loginCSS', get_template_directory_uri() . '/login/css/loginStyle.css', false);

    wp_enqueue_script('jquery');
    wp_enqueue_script( 'vegasJS', get_template_directory_uri() . '/login/js/vegas.min.js', array('jquery'), '2.4.0', true ); // true = append in the footer
    wp_enqueue_script( 'loginjs', get_template_directory_uri() . '/login/js/login.js', array('jquery'), '1.0.0', true ); 

    // Passing php_variable_to_javascript
    wp_localize_script( 
        // Pass the name of the file to pass the variable  
         'loginjs',
         // Name of the container of the information that you want to add
         'login_images',
         // Pass the information
         array(
             "theme_path" => get_template_directory_uri() . '/login/img'
         )
     );
}
 add_action( 'login_enqueue_scripts', 'function_name', 10 );
?>

<script>
// Pakai plugin jQuery Vegas
jQuery(function($) {
  // Use vegas
  $('body').vegas({
    slides: [
      // Ambil path dari function.php,  wp_localize_script
      { src: login_images.theme_path + "1.jpg"},
      { src: login_images.theme_path + "2.jpg"},
      { src: login_images.theme_path + "3.jpg"}
    ],
    overlay: login_images.theme_path + 'overlays/05.png',
    transition: ['fade', 'zoomOut', 'swirlLeft']    
  })
});
</script>