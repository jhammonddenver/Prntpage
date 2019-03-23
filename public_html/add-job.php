9<?php
  session_start();

  include_once "includes/header.php";
  
?>
        <main class="page-content"> 

            <div class="add-listing">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page__title text-center">Add Job</h2>
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

<form class="form" action="includes/new.job.inc.php" method="post">
    
          <div class="form-group">
               <label class="label">Category:</label><br>
                                                   
                                                      <select class="form-control custom-select required" name="job_type">
                                                        <option selected>Please Select Job Category</option>
                                                        
                                                        
                                                         <option value="Accounting">Accounting</option>   
                                                        
                                                        
                                                        <option value="Agricultural">Agricultural</option> 
                                                        <option value="Customer Service">Customer Service</option> 
                                                         <option value="Education">Education</option> 
                                                          <option value="Engineering">Engineering</option> 
                                                        
                                                       <option value="Film">Film</option>
                                                        <option value="General Labor">General Labor</option>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                                      
                                                         <option value="Government">Government</option> 
                                                        
                                                        
                                                        
                                                <option value="Human Resorces">Human Resources</option>  
                                                  

                                                         <option value="Legal">Legal</option>   
                                                        
                                                        
                                                        <option value="Management">Management</option> 
                                                        <option value="Marketing">Marketing</option> 
                                                         <option value="Media">Media</option> 
                                                          <option value="Medical">Medical</option> 
                                                        
                                                       <option value="Networking">Networking</option>
                                                        <option value="Non Profit">Non Profit Sector</option>
                                                                   
                                                         <option value="Real Estate">Real Estate</option> 
                                                        
                                                        
                                                        
                                                <option value="Retail">Retail</option>                                
                                                        
            
                                                         <option value="Sales">Sales</option>   
                                                        
                                                        
                                                        <option value="Salon">Salon</option> 
                                                        <option value="Security">Security</option> 
                                                         <option value="Skilled Trade">Skilled Trade</option> 
                                                          <option value="Software">Software</option> 
                                                        
                                                       <option value="Technical Support">Technical Support</option>
                                                        <option value="Transport">Transport</option>
                                                        
                                                <option value="Web Design">Web Design</option>
                                                        <option value="Writing">Writing</option>         
                                                        
                                                        
                                                        

                                                        
                                                        
                                                        
                                                        
                                                        
                                                    </select>  
                                                                                           

                                                </div>
                      <label class="label">Title:</label><br>                            
    <input type="text" name="job_title" class="form-control" placeholder="Listing Title">

       
     <label class="label">Description:</label><br>
     <textarea class="form-control" id="field-9" name="job_disc"  required></textarea>  
    <label class="label">Location:</label><br>
     <div id="locationField">
      <input class="form-control" id="autocomplete" placeholder="Enter the address."
             onFocus="geolocate()" type="text" required></input>
    </div>
    
    <input type="hidden" name="job_add1" class="form-control"  disabled="true" id="street_number" placeholder="Address 1" required>
    <input type="hidden" name="job_add2" class="form-control"   disabled="true" id="route" placeholder="Address 2" required>
    <input type="hidden"text name="job_city" class="form-control"   disabled="true" id="locality" placeholder="City" required>
    <input type="hidden" name="job_state" class="form-control"   disabled="true" id="administrative_area_level_1" placeholder="State" required>
    <input type="hidden" name="job_country" class="form-control"   id="country" disabled="true" placeholder="Country" required>
    <input type="hidden" name="job_zip" class="form-control"   disabled="true" id="postal_code" placeholder="Zipcode" required>
    
      <label class="label">Position Title:</label><br>
    <input type="text" name="job_pos_title" class="form-control" placeholder="Position Title">
  <label class="label">Payrate:</label><br>
<input type="text" name="job_payrate" class="form-control" placeholder="Payrate">


    
      <label class="label">Certifications:</label><br>
    <input type="text" name="job_certifications" class="form-control" placeholder="Certifications">
    
    
      <label class="label">Qualifications:</label><br>
    <input type="text" name="job_qualifications" class="form-control" placeholder="Qualifications">
    
    
      <label class="label">Education Level:</label><br>
    <input type="text" name="job_education" class="form-control" placeholder="Education Level">
    
   <label class="label">Level:</label><br>
    <input type="text" name="job_level" class="form-control" placeholder="Job Level">
    
    
    
    <input type="hidden" class="field" name="job_lat"
        id="latitude" required></input>
    <input type="hidden" class="field" name="job_long"
        id="longitude" required></input>
    
    
        
        
          <label class="label">Contact Email:</label><br>
        
    <input type="text" name="job_contact_email" class="form-control" placeholder="Contact Email" required>
      <label class="label">Contact Phone:</label><br>
    <input type="text" name="job_contact_phone" class="form-control" placeholder="Contact Phone" required>           
   
    
    <button type="submit" class="btn btn-send" name="job-submit">Submit</button>
   
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