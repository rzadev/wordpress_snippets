<?php
function university_files()
{
	// Membuat alamat server dynamic, pass value to Javascript
	// wp_localize_script(nama file javascript, nama variable, array data yg available utk Javascript)
	wp_localize_script('main-university-js', 'universityData', array(
		'root_url' => get_site_url()
	));
}
add_action('wp_enqueue_scripts', 'university_files');