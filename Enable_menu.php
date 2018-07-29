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
    'main_menu' => __('Main Menu', 'thetravelblog'),
    <!-- Social icon menu -->
    'social_menu' => __('Social Menu', 'thetravelblog')
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

    <!-- Footer.php -->
    <div class="col-sm-4">
      <!-- Enable menu social icon-->
      <?php
         wp_nav_menu(array(
                'theme_location' => 'social_menu',
                'container' => 'div',
                // Menambah ID untuk Div
                'container_id' => 'menu-social',
                // Menambah class untuk Div
                'container_class' => 'menu',
                 // Menambah ID untuk ul
                'menu_id' => 'social',
                // Menambah class untuk ul
                'menu_class' => 'menu-items',
                'depth' => 1,
                'link_before' => '<span class="sr-only">',
                'link_after' => '</span>',
                'fallback_cb' => '',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
              ));
      ?>
    </div>


    <!-- style.css -->
    /* Style social icon */
#social {
  list-style: none;
}

#social li {
  position: relative;
  display: inline-block;
}

#social li a:before {
  display: inline-block;
  vertical-align: top;
  padding: 0 5px;
  font-family: 'fontAwesome';
  font-size: 40px;
  color: #fff;
  content: '\f08e';
  -webkit-font-smoothing: antialiased;
}

#social li a[href*="facebook.com"]::before{content:'\f082';}
#social li a[href*="plus.google.com"]::before{content:'\f0d4';}
#social li a[href*="twitter.com"]::before{content:'\f081';}
#social li a[href*="youtube.com"]::before{content:'\f16a';}