$ = jQuery.noConflict();

$(document).ready(function() {

  // Delete reservation row
  // Untuk class dan attr ambil dari options.php
  $('.remove_reservation').on('click', function(e) {
    e.preventDefault();
    var id = $(this).attr('data-reservation');
    
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
        alert("Reservation Removed");
      }

    });
  });
});