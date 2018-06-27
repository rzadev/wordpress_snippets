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