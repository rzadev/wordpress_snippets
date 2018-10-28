 wp_register_script('googlemaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBGVcFQMhI3gHgnr2Md-WHBI5SzNJ7nbiA&callback=initMap', array(),'', true);

wp_enqueue_script('googlemaps');

function add_async_defer($tag, $handle) {
  if('googlemaps' !== $handle) {
    return $tag;
  }
  return str_replace(' src', 'async="async" defer="defer" src', $tag);
}
add_filter('script_loader_tag', 'add_async_defer', 10, 2);