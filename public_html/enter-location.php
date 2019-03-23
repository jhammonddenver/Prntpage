<?php
    
    include_once 'includes/header.php';
  
   
?>


  <main>

<script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
         for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
        $lat = place.geometry.location.lat();
          document.getElementById('latitude').value = $lat;
          
          $lng = place.geometry.location.lng();
document.getElementById('longitude').value =  $lng;

      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFt-aPTyRNNhRmcczr344JpDllcSXffLk&libraries=places&callback=initAutocomplete"
        async defer></script>
    
     <div class="page-wrapper">
         <div class="container">
             <div class ="row col-12">
   

  <form action="includes/enterlocation.inc.php" method="post" enctype="multipart/form-data>

  <div id="locationField">
      <input id="autocomplete" class="form-control" placeholder="Enter the address."
             onFocus="geolocate()" type="text"></input>
    </div>

  <input type="hidden" name="add1" class="form-control"  disabled="true" id="street_number" placeholder="Listing Address 1">
    <input type="hidden" name="add2" class="form-control"   disabled="true" id="route" placeholder="Listing Address 2">
     
    <input type="hidden" name="city" class="form-control"   disabled="true" id="locality" placeholder="Listing City">
    <input type="hidden" name="state" class="form-control"   disabled="true" id="administrative_area_level_1" placeholder="Listing State">
    <input type="hidden" name="country" class="form-control"   id="country" disabled="true" placeholder="Listing Country">
    <input type="hidden" name="zip" class="form-control"   disabled="true" id="postal_code" placeholder="Listing Zipcode">
    <input type="text" class="form-control" name="apt"  placeholder="Apartment / Suite Number">
   
     <input type="hidden" class="field" name="latitude"
        id="latitude" ></input>
    <input type="hidden" class="field" name="longitude"
        id="longitude"></input>
    <button submit" class="btn btn-send" name="enterlocation-submit">Submit</button> </table>
</form></div></div></div>

   
   
</main>

 <?php
       include_once 'includes/footer-none.php';
    ?>
