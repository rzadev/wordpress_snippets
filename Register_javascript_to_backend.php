<?php

// Functions.php

function lapizzeria_admin_scripts() {
  wp_enqueue_script('adminjs', get_template_directory_uri() . '/js/admin_ajax.js', array('jquery'), 1.0, true);
}
add_action('admin_enqueue_scripts', 'lapizzeria_admin_scripts');


// Load script.js and jQuery
function function_name() {
 wp_enqueue_script('jquery'); 
 wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array(jquery), '1.0', true); // true taro file js di bagian bawah
}
  // Hook the function
  add_action('wp_enqueue_scripts', 'function_name');

  // Footer.php
</footer>
  <?php wp_footer(); ?>  
</body>


