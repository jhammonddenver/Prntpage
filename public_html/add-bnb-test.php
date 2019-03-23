<?php
  session_start();

  include_once "includes/header.php";
  
?>


<style>
    #map {
        height: 100%;
    }
    
</style>




        <main class="page-content"> 

            <div class="add-listing">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page__title text-center">Add BnB</h2>
                        </div>
                    </div>
                    
                    <div class="tabs steps">
                        
                            <div class="row mt-4 mb-5">
                                <div class="col-3 col-sm-2 col-md-4 col-lg-4">
                                    <ul class="nav nav-tabs flex-column" id="myTabSteps" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center" id="step-1-tab" data-toggle="tab" href="add-listing.php" role="tab" aria-controls="step-1" aria-selected="true">
                                                <span class="steps-num">01</span>

                                                <span class="steps-name">Main Category</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center active save" id="step-2-tab" data-toggle="tab" href="#" role="tab" aria-controls="step-2" aria-selected="false">
                                                <span class="steps-num">02</span>

                                                <span class="steps-name">Add Information</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center " id="step-3-tab" data-toggle="tab" href="#step-3" role="tab" aria-controls="step-3" aria-selected="false">
                                                <span class="steps-num">03</span>

                                                <span class="steps-name">Add Pics</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center" id="step-4-tab" data-toggle="tab" href="#step-4" role="tab" aria-controls="step-4" aria-selected="false">
                                                <span class="steps-num"><i class="ico-step"></i></span>

                                                <span class="steps-name">Finished</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="col-9 col-sm-8 col-md-8 col-lg-8 ">
                                    <div class="tab-content" id="myTabContentSteps">

<form class="form" action="includes/new.bnb.inc.php" method="post">
    
        
                   
    
    <div class="form-group">
     <label class="label">Address:</label><br>
     <div id="locationField">
      <input class="form-control" id="autocomplete" placeholder="Enter the address."
             onFocus="geolocate()" type="text" required></input>
    </div>
    
    <input type="hidden" name="bnb_add1" class="form-control"  disabled="true" id="street_number" placeholder="Listing Address 1" required>
    <input type="hidden" name="bnb_add2" class="form-control"   disabled="true" id="route" placeholder="Listing Address 2" required>
    <input type="hidden" name="bnb_city" class="form-control"   disabled="true" id="locality" placeholder="Listing City" required>
    <input type="hidden" name="bnb_state" class="form-control"   disabled="true" id="administrative_area_level_1" placeholder="Listing State" required>
    <input type="hidden" name="bnb_country" class="form-control"   id="country" disabled="true" placeholder="Listing Country" required>
    <input type="hidden" name="bnb_zip" class="form-control"   disabled="true" id="postal_code" placeholder="Listing Zipcode" required>
    <input type="text" name="bnb_apt" class="form-control" placeholder="Apartment / Suite Number" ></div>                                 
                                                   
                                                   
                                               
    <div id="map"></div>
    
    
    
    
    
    
    
    <div class="form-group">
     <label class="label">Category:</label><br>
    
    <select name="bnb_cat" class="form-control custom-select " aria-describedby="mutedField1">
                                                            <option selected>-- Choose One --</option>
                                                            <option value="bnb-entire-property">Entire Property</option>
                                                            <option value="bnb-private-room">Private Room</option>
                                                            <option value="bnb-shared-room">Shared Space</option>
                                                            
                                                            </select>
    
    
    
    
    </div>
    
    
    
    
    
    
    
    
    
    

    
    
    
    
      <div class="form-group">
     <label class="label">Type:</label><br>
    
    <select name="bnb_type" class="form-control custom-select " aria-describedby="mutedField1">
                                                            <option selected>-- Choose One --</option>
                                                            <option value="Tent">Tent</option>
                                                            <option value="RV">RV</option>
                                                            <option value="Yurt">Yurt</option>
                                                            <option value="Igloo">Igloo</option>
                                                            <option value="Hut">Hut</option>
                                                            <option value="Hotel">Hotel</option>
                                                            <option value="Cabin">Cabin</option>
                                                            <option value="Resort">Resort</option>
                                                            <option value="Hostel">Hostel</option>
                                                            <option value="Barn">Barn</option>
                                                            <option value="Apartment">Apartment</option>
                                                            <option value="Condo">Condo</option>
Building</option>
                                                            <option value="Townhouse">Townhouse</option>
                                                            
                                                          <option value="Multifamily">Multifamily</option>     
                                                            
                                                        
                                              
                                              
                                              
                                              
                                              
                                              
                                              
                                                                      <option value="Maisonette">Maisonette</option>
                                                            <option value="Cottage">Cottage</option>
                                                            <option value="House">House</option>
                                                            <option value="Farm">Farm</option>
                                                            <option value="Ranch">Ranch</option>
                                                            <option value="Mansion">Mansion</option>
                                                            <option value="Castle">Castle</option>
                                                            <option value="Villa">Villa</option>
Building</option>
                                                            <option value="Penthouse">Penthouse</option>
                                                            
                                                          <option value="Building">Building</option> 
                                                <option value="Commercial">Commercial</option>
                                                            
                                                          <option value="Other">Other</option>
                                              
                                              
                                              
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </select> 
    
    
    
    
    
    </div>
    
    
      <div class="form-group">
          
          
          
          
    
     <label class="label">Title:</label><br>
    <input type="text" name="bnb_title" class="form-control" placeholder="Listing Title" required></div> 

                                       
                  <div class="form-group">
     <label class="label">Description:</label><br>
     <textarea class="form-control" id="field-9" name="bnb_disc" placeholder="Description " required></textarea></div>   
   
    
    <div class="form-group">
    <label class="label">Price Per Night:</label><br>
    <input type="text" name="bnb_nightly" class="form-control" placeholder="Enter Amount">
    </div> 
    
   
    

    
    <div class="form-group">
        
        
        
         <label class="label">Bedrooms:</label><br>
    
    
    <input type="text" name="bnb_bedrooms" class="form-control" placeholder="Enter Amount" required>
    
         
            </div> 
    
    <div class="form-group">
     <label class="label">Bathrooms:</label><br>
    
    <input type="text" name="bnb_bathrooms" class="form-control" placeholder="Enter Amount" required>
    
            </div> 
    
    <div class="form-group">
        <label class="label">Contact Email: (optional)</label><br>
    <input type="email" name="bnb_contact_email" class="form-control" placeholder="Contact Email" >
    
            </div> 
    <label class="label">Contact Phone: (optional)</label><br>
    <div class="form-group">
    <input type="text" name="bnb_contact_phone" class="form-control" placeholder="Contact Phone" >
   
    <input type="hidden" class="field" name="bnb_lat"
        id="latitude" required></input>
    <input type="hidden" class="field" name="bnb_long"
        id="longitude" required></input>
    
    
     </div> 
  
     
     <div class="form-group">
            
    <label class="label">Allow Instant Book:</label><br>
    
    
    
    <small>
        Guests pay online instantly. Can cancel or turn down any guest you feel uncomfortable with. The safety of our hosts is our top concern.
    </small>
     
       <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" name="instant-book-allow[]" id="instant-book-allow" value="allowed">
  <label class="form-check-label" for="instant-book-allow">Allow Instant Book</label>
</div>
    
    </div>
     
     
     
     
     
     
     
    
    <div class="form-group">
             
    <label class="label">Payment Options:</label><br>
    
        
 <small> Guests will pay 3.9% deposit fee for Cash or Credit Card on arrival options to confirm booking, which Prntpage takes to maintain our customer support.
   </small><br> 
    
    
    
    
   
    
    
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="cash-arrival" value="1">
  <label class="form-check-label" for="cash-arrival">Cash on Arrival</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="credit-card-arrival" value="1">
  <label class="form-check-label" for="credit-card-arrival">Credit Card on Arrival</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="instant-book" value="1" >
  <label class="form-check-label" for="instant-book">Pay Online</label>
</div>
    
    <div class="form-group">
             
    <label class="label">Cancellation Policy:</label><br>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="non-refundable" value="1">
  <label class="form-check-label" for="non-refundable">Non-refundable</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="Strict" value="1">
  <label class="form-check-label" for="Strict">Strict</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="Moderate" value="1">
  <label class="form-check-label" for="Moderate">Moderate</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="Flexible" value="1">
  <label class="form-check-label" for="Flexible">Flexible</label>
</div>

    
    </div>
    
    
    
    

    <div class="form-group">
    
    
     <label class="label">Amenities:</label><br>
    
    <div class="row col-12">
        <div class="col-3">


    <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="elevator" value="1">
  <label class="form-check-label" for="elevator">Elevator</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="internet" value="1">
  <label class="form-check-label" for="internet">Internet</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="wifi" value="1" >
  <label class="form-check-label" for="wifi">WiFi</label>
</div>
    <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="familiy" value="1">
  <label class="form-check-label" for="familiy">Family</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="gym" value="1">
  <label class="form-check-label" for="gym">Gym</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="free-parking-premises" value="1" >
  <label class="form-check-label" for="free-parking-premises">Free Parking on Premises</label>
</div>
       <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="hot-tub" value="hot-tub">
  <label class="form-check-label" for="hot-tub">Hot Tub</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="buzzer" value="1">
  <label class="form-check-label" for="buzzer">Buzzer/Wireless Intercom</label>
</div></div> <div class="col-3">
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="dryer" value="1" >
  <label class="form-check-label" for="dryer">Dryer</label>
</div>
       <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="kitchen" value="1">
  <label class="form-check-label" for="kitchen">Kitchen</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="pool" value="1">
  <label class="form-check-label" for="pool">Pool</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="cable" value="1" >
  <label class="form-check-label" for="cable">Cable TV</label>
</div>
          <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="pets" value="1">
  <label class="form-check-label" for="pets">Pets Allowed</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="handicap" value="1">
  <label class="form-check-label" for="handicap">Wheelchair Accessible</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="1" value="breakfast" >
  <label class="form-check-label" for="breakfast">Breakfast</label>
</div>
    <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="ac" value="1">
  <label class="form-check-label" for="ac">Air Conditioning</label>
</div></div> <div class="col-3">
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="heating" value="1">
  <label class="form-check-label" for="heating">Heating</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="hangers" value="1" >
  <label class="form-check-label" for="hangers">Hangers</label>
</div>
        <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="washer" value="1">
  <label class="form-check-label" for="washer">Washer</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="iron" value="1">
  <label class="form-check-label" for="iron">Iron</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="events" value="1" >
  <label class="form-check-label" for="events">Events Allowed</label>
</div>
      <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="laptop" value="1">
  <label class="form-check-label" for="laptop">Laptop Friendly Workspace</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="smoking" value="1">
  <label class="form-check-label" for="smoking">Smoking Allowed</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="420" value="1">
  <label class="form-check-label" for="420">420 Allowed</label>
</div></div> <div class="col-3">
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="hair-dryer" value="1" >
  <label class="form-check-label" for="hair-dryer">Hair Dryer</label>
</div>
      <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="fireplace" value="1">
  <label class="form-check-label" for="fireplace">Indoor Fireplace</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="essentials" value="1">
  <label class="form-check-label" for="essentials">Essentials</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="paid-parking" value="1" >
  <label class="form-check-label" for="paid-parking">Paid Parking</label>
</div>
          <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="free-street-parking" value="1">
  <label class="form-check-label" for="free-street-parking">Free Street Parking</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="private-entrance" value="1">
  <label class="form-check-label" for="private-entrance">Private Entrance</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="doorman" value="1" >
  <label class="form-check-label" for="doorman">Doorman</label>
</div>
    
   
   
   
    
    
    
    </div>
    
    
    
    
    
    
     
    
    
    
    
    
    
    <button type="submit" class="btn btn-send" name="bnb-submit">Submit</button>
   
    
    
    
    

  </div>
                    
                                                
                                                
                                                
                                                
                                                
                                                
                                                        
                                              
    </form>
    
     <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
     
     
     
     
     
     
          function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
         center: {lat: 39.7392, lng: -104.9903},
          zoom: 13
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        // Set the data fields to return when the user selects a place.
        autocomplete.setFields(
            ['address_components', 'geometry', 'icon', 'name']);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });
        
        
        
        
        
        
        
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
      

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });
      }
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name',
        
       
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
          
        
         $lat = place.geometry.location.lat();
          document.getElementById('latitude').value = $lat;
          
          $lng = place.geometry.location.lng();
document.getElementById('longitude').value =  $lng;


}
 


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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFt-aPTyRNNhRmcczr344JpDllcSXffLk&libraries=places&callback=initMap"
        async defer></script>
    
</div>
</div>
</div>
</div>
</div>

</main> 
<?php
include_once 'includes/footer-none.php';
?>