<?php
// tulis di functions.php
// Enable short code
function custom_shortcode($atts, $content = null) {
  return '<div class="col-sm-4">' .$content . '</div>';
}
add_shortcode('one_third', 'custom_shortcode');

// Tulis di Dashboard - Edit Page
[one_third]Paragraph 1[/one_third][one_third]Paragraph 2[/one_third][one_third]Paragraph 3[/one_third]

?>