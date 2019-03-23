<?php
  session_start();

  include_once "includes/header2.php";
  include_once "includes/navbar-map.php";
  
?>
        <main class="page-content"> 

            <div class="add-listing">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page__title text-center">Add Rideshare</h2>
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
                                   
 <div class="add-listing__information">
<form class="form" action="includes/new-transport.inc.php" method="post">
    
  <div class="form-group">
     <label class="label">Type:</label><br>
    <select name="transport_type" class="form-control custom-select " aria-describedby="mutedField1">
                                                            <option selected>-- Choose One --</option>
                                                            <option value="Bicycle">Bicycle</option>
                                                            <option value="Motorbike">Motorbike</option>
                                                            <option value="Motorcycle">Motorcycle</option>
                                                            <option value="Quad">Quad</option>
                                                            <option value="Rickshaw">Rickshaw</option>
                                                            <option value="Sedan">Sedan</option>
                                                            <option value="Electric Car">Electric Car</option>
                                                            <option value="Truck">Truck</option>
                                                            <option value="SUV">SUV</option>
                                                            <option value="Convertable">Convertable</option>
                                                            <option value="Van">Van</option>
                                                            <option value="Coupe">Coupe</option>

                                                            <option value="Emergency Vehicles">Emergency Vehicles</option>
                                                            
                                                          <option value="Snow Mobile">Snow Mobile</option>     
                                                            
                                                            
                                                            
                                                            
                                                                 <option value="Jet Ski">Jet Ski</option>
                                                            <option value="Canoe">Canoe</option>
                                                            <option value="Boat">Boat</option>

                                                            <option value="Yacht">Yacht</option>
                                                            
                                                          <option value="Electric Scooter">Electric Scooter</option>     
                                                            
                                                            
                                                            
                                                            
                                                            
                                                            
                                                        </select> 
    
    
    
    
    
    </div>
    
    
    <div class="form-group">
    
    <label class="label">Distance:</label><br>
    <select name="transport_distance" class="form-control custom-select " aria-describedby="mutedField1">
                                                            <option selected>-- Choose One --</option>
                                                            <option value="Long">Long</option>
                                                            <option value="Short">Short</option>
    
    </select>
    
    
    
    
    </div>
    
      <div class="form-group">
          
          
        
     
    <input type="hidden" name="transport_cat" class="form-control" value="Rideshare"></div> 
          
    
     <label class="label">Title:</label><br>
    <input type="text" name="transport_title" class="form-control" placeholder="Listing Title" required></div> 
    
    
    
    
   
    
    
    <div class="form-group">
     <label class="label">Description:</label><br>
     <textarea class="form-control" id="field-9" name="transport_disc" placeholder="Description " required></textarea>
    
    <div class="form-group">
     <label class="label">Address:</label><br>
     <div id="locationField">
      <input class="form-control" id="autocomplete" placeholder="Enter the address."
             onFocus="geolocate()" type="text" required></input>
    </div>
    
    <input type="hidden" name="transport_add1" class="form-control"  disabled="true" id="street_number" placeholder="Listing Address 1" required>
    <input type="hidden" name="transport_add2" class="form-control"   disabled="true" id="route" placeholder="Listing Address 2" required>
    <input type="hidden" name="transport_city" class="form-control"   disabled="true" id="locality" placeholder="Listing City" required>
    <input type="hidden" name="transport_state" class="form-control"   disabled="true" id="administrative_area_level_1" placeholder="Listing State" required>
    <input type="hidden" name="transport_country" class="form-control"   id="country" disabled="true" placeholder="Listing Country" required>
    <input type="hidden" name="transport_zip" class="form-control"   disabled="true" id="postal_code" placeholder="Listing Zipcode" required>
    <input type="text" name="transport_apt" class="form-control" placeholder="Apartment / Suite Number" ></div> 
    
    <div class="form-group">
    <label class="label">Price:</label><br>
    <input type="text" name="transport_price" class="form-control" placeholder="Enter Amount">
    </div> 
    
    
    
    
    
    <div class="form-group">
        
        
        
          <label class="label">Make:</label><br>
    
    
    <input type="text" name="transport_make" class="form-control" placeholder="Enter Make" required>
    
         
            </div> 
    
    <div class="form-group">
     <label class="label">Model:</label><br>
    
    <input type="text" name="transport_model" class="form-control" placeholder="Enter Model" required>
    
            </div> 
            
            
            
            
            <div class="form-group">
        
        
        
          <label class="label">Year:</label><br>
    
    
    <input type="text" name="transport_year" class="form-control" placeholder="Enter Year" required>
    
         
            </div> 
            
            
            
            
             <div class="form-group">
        
        
        
          <label class="label">Fuel Type:</label><br>
    
    
    <input type="text" name="transport_fuel" class="form-control" placeholder="Enter Fuel Type" required>
    
         
            </div> 
            
            
            
            
            
            
    
    <div class="form-group">
        
  
   
    <input type="hidden" class="field" name="transport_lat"
        id="latitude" required></input>
    <input type="hidden" class="field" name="transport_long"
        id="longitude" required></input>
    
    
     </div> 
    
    <div class="form-group">
            </div> 
    <label class="label">Condition:</label><br>
    
        
        
        <input type="radio" name="transport_condition" value="New" checked> New &nbsp;
  <input type="radio" name="transport_condition" value="Excellent"> Excellent &nbsp;
  <input type="radio" name="transport_condition" value="Good"> Good
      <input type="radio" name="transport_condition" value="Fair"> Fair &nbsp;
  <input type="radio" name="transport_condition" value="Below Average"> Below Average<br>   
        
    
    
    </div>
    
    
    
    
     <div class="form-group">
            
    <label class="label">Allow Instant Book:</label><br>
    
    
    
    <small>
        Guests pay online instantly. Can cancel or turn down any guest you feel uncomfortable with. The safety of our hosts is our top concern.
    </small>
     
       <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" name="instant-book-allow[]" id="instant-book-allow" value="allowed">
  <label class="form-check-label" for="instant-book-allow">Allow</label>
</div>
    
    </div>
     
     
     
     
     
     
     
    
    <div class="form-group">
           
    <label class="label">Payment Options:</label><br>
    
        
 <small> Guests will pay 3.9% deposit fee for Cash or Credit Card on arrival options to confirm booking, which Prntpage takes to maintain our customer support.
   </small><br> 
    
     </div> 
    
    
   
    <div class="form-group">
    
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
  <label class="form-check-label" for="instant-book">Book In Full Online</label>
</div></div>
    
    
    
    
    <div class="form-group">
     <label class="label">Refund Policy:</label><br>
    <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="non-refundable" value="1">
  <label class="form-check-label" for="non-refundable">Non-refundable</label>
</div></div>
    
    
     
    
    
    
    
     <p>Amenities:</p>
    
    
    <div class="col-12 row">

    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="ac" value="ac">
  <label class="form-check-label" for="ac">AC</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="heat" value="heat">
  <label class="form-check-label" for="heat">Heat</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="snow-tires" value="snow-tires" >
  <label class="form-check-label" for="snow-tires">Snow Tires</label>
</div>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="ski-racks" value="ski-racks">
  <label class="form-check-label" for="ski-racks">Ski Racks</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="GPS" value="GPS">
  <label class="form-check-label" for="GPS">GPS</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="audio-input" value="audio-input" >
  <label class="form-check-label" for="audio-input">Audio Input</label>
</div>
       <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="bike-rack" value="bike-rack">
  <label class="form-check-label" for="bike-rack">Bike Rack</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="bluetooth" value="bluetooth">
  <label class="form-check-label" for="bluetooth">Bluetooth</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="pet-friendly" value="pet-friendly" >
  <label class="form-check-label" for="pet-friendly">Pet Friendly</label>
</div>
       <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="smoker-friendly" value="smoker-friendly">
  <label class="form-check-label" for="smoker-friendly">Smoker Friendly</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="child-seat" value="child-seat">
  <label class="form-check-label" for="child-seat">Child Seat</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="usb-port" value="usb-port" >
  <label class="form-check-label" for="usb-port">USB Port</label>
</div>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="toll-pass" value="toll-pass">
  <label class="form-check-label" for="toll-pass">Toll Pass</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="heated-seats" value="heated-seats">
  <label class="form-check-label" for="heated-seats">Heated Seats</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="sun-roof" value="sun-roof" >
  <label class="form-check-label" for="sun-roof">Sun Roof</label>
</div>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="helmet" value="helmet">
  <label class="form-check-label" for="helmet">Helmet</label>
</div>
   
   
   
    
    
    
    </div>
    
    
    
    
    
    
     
    
    
    
    
    
    
    <button type="submit" class="btn btn-send" name="transport-submit">Submit</button>
    
  
   <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
     

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
        ></script>
   