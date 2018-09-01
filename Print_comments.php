<?php
// Print comment, tulis di single_page.php
  if(comments_open() || get_comments_number()) {
    comments_template();
  }

// buat/copy file comments.php
?>