9<?php
  session_start();

  include_once "includes/header.php";
  
?>
        <main class="page-content"> 

            <div class="add-listing">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page__title text-center">Add Services</h2>
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

<form class="form" action="includes/new.services.inc.php" method="post">
    
          <div class="form-group">
               <label class="label">Category:</label><br>
                                                   
                                                      <select class="form-control custom-select required" name="services_type">
                                                        <option selected>Select Category</option>
                                                        
                                                        
                                                         <option value="Agriculture">Agriculture</option>   
                                                        
                                                        
                                                        <option value="App Developer">App Developer</option> 
                                                        <option value="Automotive">Automotive</option> 
                                                         <option value="Barber">Barber</option> 
                                                          <option value="Beauty">Beauty</option> 
                                                        
                                                       <option value="Carpenters">Carpenters</option>
                                                        <option value="Catering">Catering</option>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                                      
                                                         <option value="Cellular">Cellular</option> 
                                                        
                                                        
                                                        
                                                <option value="Cleaner">Cleaners</option>  
                                                  

                                                         <option value="Clinic">Clinic</option>   
                                                        
                                                        
                                                        <option value="Computer">Computer</option> 
                                                        <option value="Creative">Creative</option> 
                                                         <option value="Currency Exchange">Currency Exchange</option> 
                                                          <option value="Dentist">Dentist</option> 
                                                        
                                                       <option value="Doctor">Doctor</option>
                                                        <option value="Dispensaries">Dispensaries</option>
                                                                   
                                                         <option value="Electrician">Electricians</option> 
                                                        
                                                        
                                                        
                                                <option value="Event">Event</option>                                
                                                        
            
                                                         <option value="Financial">Financial</option>   
                                                        
                                                        
                                                        <option value="Genealogy">Genealogy</option> 
                                                        <option value="Hospital">Hospital</option> 
                                                         <option value="Household">Household</option> 
                                                          <option value="House Sitter">House Sitter</option> 
                                                        
                                                       <option value="Insurance">Insurance</option>
                                                        <option value="Journalism">Journalism</option>
                                                        
                                                <option value="Labor">Labor</option>
                                                        <option value="Legal">Legal</option>         
                                                        
                                                        
                                                
                                                
                                                
                                                
                                                                        <option value="Lessons">Lessons</option> 
                                                        <option value="Marketing">Marketing</option> 
                                                         <option value="Masseuse">Masseuse</option> 
                                                          <option value="Medical">Medical</option> 
                                                        
                                                       <option value="Movers">Movers</option>
                                                        <option value="Musician">Musicians</option>
                                                        
                                                <option value="Pets">Pets</option>
                                                        <option value="Plumber">Plumber</option>         
                                                                

                                            
                                                                        <option value="Programmers">Programmers</option> 
                                                        <option value="Real Estate">Real Estate</option> 
                                                         <option value="Religious">Religious</option> 
                                                          <option value="Salon">Salon</option> 
                                                        
                                                       <option value="Tour Guide">Tour Guides</option>
                                                        <option value="Travel Agents">Travel Agents</option>
                                                        
                                                <option value="Tutors">Tutors</option>
                                                  <option value="Writers">Writers</option>
                                                                                     
                                                        
                                                        
                                                        
                                                        
                                                    </select>  
                                                                                           

                                                </div>
                      <label class="label">Title:</label><br>                            
    <input type="text" name="services_title" class="form-control" placeholder="Title">

       
     <label class="label">Description:</label><br>
     <textarea class="form-control" id="field-9" name="services_disc"  required></textarea>  
    <label class="label">Location:</label><br>
     <div id="locationField">
      <input class="form-control" id="autocomplete" placeholder="Enter the address."
             onFocus="geolocate()" type="text" required></input>
    </div>
    
    <input type="hidden" name="services_add1" class="form-control"  disabled="true" id="street_number" placeholder="Address 1" required>
    <input type="hidden" name="services_add2" class="form-control"   disabled="true" id="route" placeholder="Address 2" required>
    <input type="hidden"text name="services_city" class="form-control"   disabled="true" id="locality" placeholder="City" required>
    <input type="hidden" name="services_state" class="form-control"   disabled="true" id="administrative_area_level_1" placeholder="State" required>
    <input type="hidden" name="services_country" class="form-control"   id="country" disabled="true" placeholder="Country" required>
    <input type="hidden" name="services_zip" class="form-control"   disabled="true" id="postal_code" placeholder="Zipcode" required>
    
   
  <label class="label">Price:</label><br>
<input type="text" name="services_price" class="form-control" placeholder="Price">


    

  
    
    
    
    <input type="hidden" class="field" name="services_lat"
        id="latitude" required></input>
    <input type="hidden" class="field" name="services_long"
        id="longitude" required></input>
    
    
        
      
    
    <button type="submit" class="btn btn-send" name="services-submit">Submit</button>
   
    </form>
    
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