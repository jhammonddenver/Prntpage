
<?php
include 'includes/header.php';
include 'includes/gmap.php';
?>







 <div id="map"></div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: {lat: 42.3726399, lng: -71.1096528}
        });

        var bikeLayer = new google.maps.BicyclingLayer();
      bikeLayer.setMap(map);
        

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
 bikeLayer.setMap(map);
            bikeLayer.setPosition(pos);
            bikeLayer.setContent('You are here.');
            bikeLayer.open(map);
            map.setCenter(pos);
              
          }, function() {
            handleLocationError(true, bikeLayer, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, bikeLayer, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, bikeLayer, pos) {
        bikeLayer.setPosition(pos);
        bikeLayer.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        bikeLayer.open(map);
     
        
      }
    </script>
    
<?php    
include 'includes/footer.php';
?>


