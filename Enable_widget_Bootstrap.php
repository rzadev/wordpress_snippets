<?php
  // Enable widget
  function ttb_widgets() {
    // Widget buat footer
    register_sidebar(array(
      'name' => __('Footer Widget'),
      'id' => 'footer_widget',
      'description' => 'Widgets for the footer',
      // Wrap widget in a div
      'before_widget' => '<div id="%1$s" class="widget col-sm-6 %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    ));

    // Widget buat sidebar
    register_sidebar(array(
      'name' => __('Sidebar Widget'),
      'id' => 'sidebar_widget',
      'description' => 'Widgets for the sidebar',
      // Wrap widget in a div
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>'
    ));
  }
  add_action('widgets_init', 'ttb_widgets');

// Register di page.php atau footer.php
<!-- 'footer_widget' dapet dari id di enable widget functions.php -->
  <?php dynamic_sidebar('footer_widget'); ?>
?>


<!-- Register sidebar di sidebar.php -->
<aside class="sidebar-widget">
  <?php dynamic_sidebar('sidebar_widget'); ?>
</aside>