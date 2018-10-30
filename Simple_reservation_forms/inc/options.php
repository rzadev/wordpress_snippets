<?php
// Create page Custom Post Type untuk reservations
function restaurant2_options() {
  // (Page Title, Menu Title, user right, menu slug, function yg akan communicate dgn function ini, icon, posisi)
  add_menu_page('Restaurant', 'Restaurant Options', 'administrator', 'restaurant2_options', 'restaurant2_adjusment', '', 20);

  // Add Sub menu
  // (Parent, page title, menu title, user right, menu slug, function that's going to executed  )
  add_submenu_page('restaurant2_options', 'Reservations', 'Reservations', 'administrator', 'restaurant2_reservations', 'restaurant2_reservations');

}
add_action('admin_menu', 'restaurant2_options');

// Print the page content
function restaurant2_adjusment() {
  echo 'Hello Adjusment';

}

// Function for Sub menu
// Show MySQL table
function restaurant2_reservations() { ?>
  <div class="wrap">
    <h1>Reservations</h1>
      <!-- Print table reservation -->
      <!-- Semua wordpress default class -->
      <table class="wp-list-table widefat striped">
        <thead>
            <tr>
              <th class="manage-column">ID</th>
              <th class="manage-column">Name</th>
              <th class="manage-column">Date of Reservation</th>
              <th class="manage-column">Email</th>
              <th class="manage-column">Phone Number</th>
              <th class="manage-column">Message</th>
              <th class="manage-column">Delete</th>
            </tr>
          </thead>

          <tbody>
            <?php
              global $wpdb;
              // Gunakan ini hanya untuk tabel yg dibuat manual
              // 'reservations' = nama tabel
              // ARRAY_A = Associative array, access using ["this"]
              $table = $wpdb->prefix . 'reservations';
              $reservations = $wpdb->get_results("SELECT * FROM $table", ARRAY_A);

              // Liat nama [] pake var dump
/*            <!-- echo "<pre>"; -->
              <!-- var_dump($reservations); -->
              <!-- echo "</pre>"; --> */
              foreach($reservations as $reservation): ?>
              <tr>
                <td><?php echo $reservation['id']; ?></td>
                <td><?php echo $reservation['name']; ?></td>
                <td><?php echo $reservation['date']; ?></td>
                <td><?php echo $reservation['email']; ?></td>
                <td><?php echo $reservation['phone']; ?></td>
                <td><?php echo $reservation['message']; ?></td>
                <!-- <td>
                  <a href="#" class="remove-reservation" data-reservation="<?php echo $reservation['id']; ?>">Remove</a>
                </td> -->
              </tr>

              <?php endforeach;  ?>

            ?>
          </tbody>
      </table>
  </div>

<?php }


  ?>