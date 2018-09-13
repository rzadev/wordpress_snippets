<?php
// Namespacing functions
if(!function_exists('custom_shortcode')):
	// Enable short code
	function custom_shortcode($atts, $content = null) {
 	 return '<div class="col-sm-4">' .$content . '</div>';
}
endif;
add_shortcode('one_third', 'custom_shortcode');

?>