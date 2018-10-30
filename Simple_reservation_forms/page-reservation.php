<?php
/*
* Template Name: Reservation
*/
?>

<?php get_header(); ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4">
        <div class="forms">
        <h3 class="text-center">Make a Reservation</h3>
            <form class="reservation-form" method="post">
              <div class="form-group field">
                <input type="text" class="form-control" name="name" placeholder="Name">
              </div>
              <div class="form-group field datetime">
                <input type="datetime-local" class="form-control" name="date" step="1800" placeholder="Date">
              </div>
              <div class="form-group field">
                <input type="email" class="form-control" aria-describedby="emailHelp" name="email" placeholder="Email">
              </div>
              <div class="form-group field">
                <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
              </div>
              <div class="form-group field">
                <textarea class="form-control message" name="message" placeholder="Message"></textarea>
              </div>
              <input type="submit" name="reservation" class="btn btn-success"></input>

              <input type="hidden" name="hidden" value="1">
            </form>    
        </div>
    </div>
  </div>
</div>




<?php get_footer(); ?>
