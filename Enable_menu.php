// Show menus in backend


//Functions.php
function lapizzeria_menus()
{
  register_nav_menus(array(
    'header-menu' => __('Header Menu', 'lapizzeria'),
    'social-menu' => __('social Menu', 'lapizzeria')
  ));
}

add_action('init', 'lapizzeria_menus');


// Header.php
    <div class="navigation container">
    <!-- Show Nav -->
      <?php
        $args = array(
          'theme_location' => 'header-menu',
          'container' => 'nav',
          'container_class' => 'site-nav'
        );
        wp_nav_menu($args);
      ?>
    </div>


<!-- Bootstrap -->
<!-- functions.php -->
  // Enable Menu
  register_nav_menus(array(
    'main_menu' => __('Main Menu', 'thetravelblog')
  ));

<!-- header.php -->
    <div class="navbar-right">
      <!-- Enable Menu -->
      <?php wp_nav_menu(array(
        // 'main_menu' dapet dari register_nav_menus di functions.php
        'theme-location' => 'main_menu',
        'container_id' => 'navbar',
        'container_class' => 'collapse navbar-collapse',
        'menu_class' => 'nav navbar-nav navbar-right'
      )); ?>
    </div>