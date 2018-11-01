$ = jQuery.noConflict();

$(document).ready(function() {

  // Delete reservation row
  // Untuk class dan attr ambil dari options.php
  $('.remove_reservation').on('click', function(e) {
    e.preventDefault();
    var id = $(this).attr('data-reservation');

    // use Seet Alert 2
    swal({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.value) {
    
        // Use ajax in jQuery
        // Post = submit data, get = retrieve data
        $.ajax({
          type:'post',
          data : {
              'action': 'restaurant2_delete_reservation',
              'id' : id,
              'type' : 'delete'
          },
          // Tell wordpress we want to use admin-ajax.php
          url: admin_ajax.ajaxurl,
          success: function(data) {
            // Json.parse convert string to object
            var result= JSON.parse(data);
            // Activate ajax with jquery to automatically remove reservation row
            jQuery("[data-reservation='"+ result.id +"']").parent().parent().remove();
            // alert("Reservation Removed");

            // Add Sweet Alert 2 effects
            swal(
              'Reservation Deleted!',
              'Success, the reservation was deleted!',
              'success'
            )
          }
        }); // End .ajax
      }
    })
  });
});