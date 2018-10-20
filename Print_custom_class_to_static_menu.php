          <ul>
            <!-- Add classs untuk active page -->
            <!-- Jika current page = about-us atau parentnya about us -->
            <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 12) echo 'class="current-menu-item"' ?> ><a href="<?php echo site_url('/about-us')?>">About Us</a></li>
            <li><a href="#">Programs</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Campuses</a></li>
            <li <?php if(get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
          </ul>