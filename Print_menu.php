<?php

// Functions.php
  // Register menus
  register_nav_menus(array(
    'primary' => esc_html__('Header Menu', 'hall')
  ));

// page.php
	<?php wp_nav_menu(array(
	  'theme-location' => 'primary'  
	)); ?>



?>