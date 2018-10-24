// Query custom date
<?php
	// Query ACF dan display custom date di sort berdasarkan tanggal
	$today = date('Ymd');
	$homepageEvents = new WP_Query(array(
	'posts_per_page' => 2, // -1 untuk menampilkan semua
	'post_type' => 'event',  // Nama custom post type  
	// Mengurutkan berdasarkan tanggal  
	'meta_key' => 'event_date',
	'orderby' => 'meta_value_num',
	'order' => 'ASC',
	// Query utk mengurutkan tgl yg akan datang dan hide tgl yg sudah lewat
	'meta_query' => array(
	  array(
	    'key' => 'event_date',
	    'compare' => '>=',
	    'value' => $today,
	    'type' => 'numeric'
	  )
	)
	));
?>

// Query menampilkan pagination
<?php
    $today = date('Ymd');
    $pastEvents = new WP_Query(array(
      'paged' => get_query_var('paged', 1), // Menampilkan paging utk custom kueri
      //'posts_per_page' => 1,  // Jumlah kuery tg tampil
      'post_type' => 'event',  // Nama custom post type  
      // Mengurutkan berdasarkan tanggal  
      'meta_key' => 'event_date',
      'orderby' => 'meta_value_num',
      'order' => 'ASC',
      // Query utk mengurutkan tgl yg sudah lewat
      'meta_query' => array(
        array(
          'key' => 'event_date',
          'compare' => '<',
          'value' => $today,
          'type' => 'numeric'
        )
      )
    ));

    echo paginate_links(array(
      // Menampilkan paging di custom query
      'total'=> $pastEvents->max_num_pages
    ));
?>


<?php
// Custom query ke post type event, menampilkan event yg terdekat, hide event yg sudah lewat dan menampilkan paging
function university_adjust_queries($query) {
	if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
		$today = date('Ymd');
		$query->set('meta_key', 'event_date');
		$query->set('orderby', 'meta_value_num');
		$query->set('order', 'ASC');
		$query->set('meta_query', array(
				array(
				'key' => 'event_date',
				'compare' => '>=',
				'value' => $today,
				'type' => 'numeric'
				)
			));
	}
}
add_action('pre_get_posts', 'university_adjust_queries');
?>



// Print custom month
<?php 
	$eventDate = new DateTime(get_field('event_date'));
	echo $eventDate->format('M');
?>

// Print custom Day
<?php echo $eventDate->format('d'); ?>