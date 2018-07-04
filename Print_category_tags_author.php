<!-- Single.php -->
<?php
 <div class="written-info">  
      <div class="column">
        <?php the_tags(__('Tags for this post: ', 'Toronto Online'), ', ','<br>'); ?>
      </div>
      <div class="column">
        <?php _e('Category: ', 'Toronto Online') . the_category(', '); ?>
      </div>
      <div class="column">
        <?php _e('Written By: ', 'TOronto Online') . "<span>" . the_author() . "</span>" ?>      
      </div>
    </div>
?>

<!-- Style.css -->
/* Single Post */
.single .written-info {
  background-color: #ebebeb;
  padding: 5px;
  font-size: 12px;
  overflow: auto;
  margin-bottom: 20px;
}

.single .written-info .column {
  float: left;
  margin-right: 20px;
}

/* .single .written-info .column:last-child {
  text-align: right;
  float: right;
}  */

.single .written-info a {
  font-weight: bold;
}

/* Style for comment */
.single textarea {
  width: 100%;
}