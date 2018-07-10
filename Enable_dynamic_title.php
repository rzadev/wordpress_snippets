<?php
// Cara baru
//  <title></title> -> delete
function function_name() {
	add_theme_support('title-tag'); 
}


// Cara lama
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) {echo ' : ';} ?><?php bloginfo('name'); ?>   </title>
