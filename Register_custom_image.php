<?php

// Functions.php
 // Create thumbnail image size
  add_image_size( 'nama ukuran image', 750, 490, true ); // true = crop the image


// Frontpage.php
 <div class="col-xs-12 col-md-6 col-lg-4 entry">
    <?php the_post_thumbnail('nama ukuran image', array('class' => 'img-responsive')); ?> // Tambah kelas img-responsive
  </div>

?>