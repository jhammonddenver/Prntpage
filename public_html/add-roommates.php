<?php
  session_start();

  include_once "includes/header2.php";
  
?>
        <main class="page-content"> 

            <div class="add-listing">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page__title text-center">Add Roommates</h2>
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
<form class="form" action="includes/new-roommates.inc.php" method="post">

    <input type="hidden" name="housing_cat" class="form-control"  value="Roommates">
    
    
     <div class="form-group">
     <label class="label">Address:</label><br>
     <div id="locationField">
      <input class="form-control" id="autocomplete" placeholder="Enter the address."
             onFocus="geolocate()" type="text" ></input>
    </div>
    
    <input type="hidden" name="housing_add1" class="form-control"  disabled="true" id="street_number" placeholder="Listing Address 1" >
    <input type="hidden" name="housing_add2" class="form-control"   disabled="true" id="route" placeholder="Listing Address 2" >
    <input type="hidden" name="housing_city" class="form-control"   disabled="true" id="locality" placeholder="Listing City" >
    <input type="hidden" name="housing_state" class="form-control"   disabled="true" id="administrative_area_level_1" placeholder="Listing State" >
    <input type="hidden" name="housing_country" class="form-control"   id="country" disabled="true" placeholder="Listing Country" >
    <input type="hidden" name="housing_zip" class="form-control"   disabled="true" id="postal_code" placeholder="Listing Zipcode" >
    <input type="hidden" name="housing_apt" class="form-control" placeholder="Apartment / Suite Number" ></div> 
    
    
    
    
      <div class="form-group">
     <label class="label">Type:</label><br>
    
    <select class="form-control custom-select" name="housing_type" aria-describedby="mutedField1">
                                                            <option selected>-- Choose One --</option>
                                                            <option value="condo">Condo</option>
                                                            <option value="townhouse">Townhouse</option>
                                                            <option value="multifamily">Multifamily</option>
                                                            <option value="maisonette">Maisonette</option>
                                                            <option value="cottage">Cottage</option>
                                                            <option value="house">House</option>
                                                            <option value="farm">Farm</option>
                                                            <option value="ranch">Ranch</option>
                                                            <option value="mansion">Mansion</option>
                                                            <option value="castel">Castel</option>
                                                            <option value="villa">Villa</option>
                                                            <option value="penthouse">Penthouse</option>
Building</option>
                                                            <option value="commercial">Commercial</option>
                                                            
                                                          <option value="other">Other</option>     
                                                            
                                                        </select> 
    
    
    
    
    
    </div>
    
    
      <div class="form-group">
          
          
        
          
    
     <label class="label">Title:</label><br>
    <input type="text" name="housing_title" class="form-control" placeholder="Listing Title" ></div> 
    
    
    
    
   
    
    
    <div class="form-group">
     <label class="label">Description:</label><br>
     <textarea class="form-control" id="field-9" name="housing_disc" placeholder="Description " ></textarea>
     </div>
    
   
    
    <div class="form-group">
    <label class="label">Cost:</label><br>
    <input type="text" name="housing_monthly" class="form-control" placeholder="Enter Amount">
    </div> 
    
    <div class="form-group">
     <label class="label">Security Deposit: (optional)</label><br>
    <input type="text" name="housing_deposit" class="form-control" placeholder="Enter Amount">
    </div> 
    
    <div class="form-group">
        
        
         <label class="label">Available From:</label><br>
        
        <input type="date" name="housing_avail" class="form-control" class="form-control"  >
        
        
        
            </div> 
    
    <div class="form-group">
        
        
        
         <label class="label">Bedrooms:</label><br>
    
    
    <input type="text" name="housing_bedrooms" class="form-control" placeholder="Enter Amount" >
    
         
            </div> 
    
    <div class="form-group">
     <label class="label">Bathrooms:</label><br>
    
    <input type="text" name="housing_bathrooms" class="form-control" placeholder="Enter Amount" >
    
            </div> 
    
    <div class="form-group">
        <label class="label">Contact Email: (optional)</label><br>
    <input type="email" name="housing_contact_email" class="form-control" placeholder="Contact Email" >
    
            </div> 
    <label class="label">Contact Phone: (optional)</label><br>
    <div class="form-group">
    <input type="text" name="housing_contact_phone" class="form-control" placeholder="Contact Phone" >
   
    <input type="hidden" class="field" name="housing_lat"
        id="latitude" ></input>
    <input type="hidden" class="field" name="housing_long"
        id="longitude" ></input>
    
    
     </div> 
    
    <div class="form-group">
          
    <label class="label">Preferred Contact Method:</label><br>
    
        
        
        <input type="radio" name="housing_contact_method" value="email" checked> Email &nbsp;
  <input type="radio" name="housing_contact_method" value="message"> Message &nbsp;
  <input type="radio" name="housing_contact_method" value="phone"> Phone<br>
        
        
    
    
    </div>
    
    
    
    
     <div class="form-row">
    
    
    
    
 <div class="form-group col-md-6">
      <label class="label">Size</label>
      <input type="text" class="form-control" name="housing_size" placeholder="Enter Amount">
    </div>
    <div class="form-group col-md-6">
      <label class="label">Measurement</label>
      
      
      <select class="form-control custom-select" name="housing_measurement" aria-describedby="mutedField1">
                                                            <option selected>-- Choose One --</option>
                                                             <option value="Square Meters">Acres</option>
      
                                                            <option value="Square Feet">Square Feet</option>
                                                            <option value="Square Meters">Square Meters</option>
     
      </select>
      
      
      
      
    </div>
  </div>
    
    
    
    
     <p>Amenities:</p>
    
    
    <div class="col-12 row">

    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="dogs" value="dogs">
  <label class="form-check-label" for="dogs">Dogs Allowed</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="cats" value="cats">
  <label class="form-check-label" for="cats">Cats Allowed</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="other-pets" value="other-pets" >
  <label class="form-check-label" for="other-pets">Other Pets Allowed</label>
</div>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="heat" value="heat">
  <label class="form-check-label" for="heat">Heat Included</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="water" value="water">
  <label class="form-check-label" for="water">Water Included</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="utilities" value="utilities" >
  <label class="form-check-label" for="utilities">Utilities Included</label>
</div>
       <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="smoker" value="smoker">
  <label class="form-check-label" for="smoker">Smoker Friendly</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="420" value="420">
  <label class="form-check-label" for="420">420 Friendly</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="washer-dryer-unit" value="washer-dryer-unit" >
  <label class="form-check-label" for="washer-dryer-unit">Washer/Dryer in Unit</label>
</div>
       <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="washer-dryer-building" value="washer-dryer-building">
  <label class="form-check-label" for="washer-dryer-building">Washer/Dryer in Building</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="parking" value="parking">
  <label class="form-check-label" for="parking">Parking Space</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="paid-parking" value="paid-parking" >
  <label class="form-check-label" for="paid-parking">Paid Parking</label>
</div>
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="yard" value="yard">
  <label class="form-check-label" for="yard">Yard</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="water-front" value="water-front">
  <label class="form-check-label" for="water-front">Water Front</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="scenic-view" value="scenic-view" >
  <label class="form-check-label" for="scenic-view">Scenic View</label>
</div>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="owner" value="owner">
  <label class="form-check-label" for="owner">Direct from Owner</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="doorman" value="doorman">
  <label class="form-check-label" for="doorman">Doorman</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="no-app-fee" value="no-app-fee" >
  <label class="form-check-label" for="no-app-fee">No Application Fee</label>
</div>
   
   
   
    
    
    
    </div>
    
    
    
    
    
    
     
    
    
    
    
    
    
    <button type="submit" class="btn btn-send" name="housing-submit">Submit</button>
   
     </form>
   
    
    

  </div>
  
  
  
  
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
    