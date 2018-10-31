<?php
// Delete reservation row
function restaurant2_delete_reservation() {
  // 'delete' dapat dari data: 'type' di admin_ajax.js
  if($_POST['type'] == 'delete'):
    // Acccess the database function
    global $wpdb;

    //Access the wp_reservations table
    $table = $wpdb->prefix . 'reservations';

    // 'id' dapat dari data: 'id' di admin_ajax.js
    $id_reservation = $_POST['id'];

    // Remove reservation row
    // %d = integer
    $result = $wpdb->delete($table, array('id' => $id_reservation), array('%d') );

    // Integrate ajax
      if($result == 1) {
        $response = array(
            'response' => 'success',
            'id' => $id_reservation
        );
      } else {
          $response = array(
              'response' => 'error'
          );
      }

  endif;
  // Work with ajax, harus selalu tulis die() di akhir
  die(json_encode($response));
}
// Working with ajax, the hook is:
add_action('wp_ajax_restaurant2_delete_reservation', 'restaurant2_delete_reservation');


// Insert data from reservation form to database
function restaurant2_save_reservation() {
    global $wpdb;
    // 'reservation' ambil dari name di submit button
    // 'hidden' ambil dari name di input type="hidden"
    // if(isset($_POST['reservation']) && $_POST['hidden'] == "1") {
    if(isset($_POST['reservation'])) {
      // nama ambil dari name di form
      $name = sanitize_text_field($_POST['name']);
      $date = sanitize_text_field($_POST['date']);
      $email = sanitize_email($_POST['email']);
      $phone = sanitize_text_field($_POST['phone']);
      $message = sanitize_text_field($_POST['message']);

      // Insert data ke reservations table
      $table = $wpdb->prefix . 'reservations';

      $data = array(
        'name' => $name,
        'date' => $date,
        'email' => $email,
        'phone' => $phone,
        'message' => $message
      );

      // Data format %s = string
      $format = array(
        '%s',
        '%s',
        '%s',
        '%s',
        '%s'
      );

      // Insert data ke tabel yg dibuat manual, kalo otomatis gak perlu, perlu 3 parameter
      $wpdb->insert($table, $data, $format);

      // Redirect ke page Thanks setelah submit form
      $url = get_page_by_title('Thanks for Your Reservation');
      wp_redirect(get_permalink($url));
      // Harus tambahkan exit setelah  wp_redirect
      exit();

    }
}
add_action('init', 'restaurant2_save_reservation');
?>