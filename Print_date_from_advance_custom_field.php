
<?php
  $format = 'd F, Y ';
  // leaving_date dapat dari Field Name di Advanced Custom Field
  $date = strtotime(get_field('leaving_date'));
  $leavingDate = date_i18n($format, $date);

  $returningDate = strtotime(get_field('returning_date'));
  $returningDate = date_i18n($format, $returningDate);
?>

<div class="date-price">
  <p class="date"><?php echo $leavingDate . ' - ' . $returningDate; ?></p>
</div>
