<?php

// Functions.php
// Use Javascript in backend
function lapizzeria_admin_scripts() {
  wp_enqueue_script('adminjs', get_template_directory_uri() . '/js/admin_ajax.js', array('jquery'), 1.0, true);

  // Use admin_ajax.php in wordpress, contain methods to execute ajax request
  wp_localize_script(
    'adminjs',
    'admin_ajax',
    array('ajaxurl' => admin_url('admin-ajax.php'))
  );
}
add_action('admin_enqueue_scripts', 'lapizzeria_admin_scripts');


// Reservations.php
function lapizzeria_delete_reservation() {
  // echo('it works');
  if($_POST['type'] == 'delete'):
    // Access all methods from $wpdb
    global $wpdb;
    $table = $wpdb->prefix . 'reservations';
    $id_reservation = $_POST['id'];

    // Delete database
    $result = $wpdb->delete($table, array('id' => $id_reservation), array('%d')); // d = integer
  endif;

  die(json_encode($result));
}
add_action('wp_ajax_lapizzeria_delete_reservation', 'lapizzeria_delete_reservation');


// Admin_ajax.js
$ = jQuery.noConflict();

$(document).ready(function() {
    // console.log(admin_ajax.ajaxurl);
    $('.remove-reservation').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('data-reservation');
        // console.log(id);

        $.ajax({
            type:'post',
            data: {
                'action': 'lapizzeria_delete_reservation',
                'id': id,
                'type': 'delete'
            },
            url: admin_ajax.ajaxurl,
            success: function(data) {
                // console.log(data);
                // JSON.parse convert string to javascript object
                var result = JSON.parse(data);
                // console.log(result);

                // Remove and reload the page
                if(result.response == 'success') {
                    jQuery("[data-reservation='"+ result.id +"']").parent().parent().remove();
                    alert('Reservation Removed');
                }
            }
        });
    });
});


