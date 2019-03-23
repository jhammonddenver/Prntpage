<?php
  session_start();

  include_once "includes/header.php";
  
?>
        <main class="page-content"> 

            <div class="add-listing">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page__title text-center">Add Items</h2>
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

<form class="form" action="includes/new.item.inc.php" method="post">
    
    
    
    
    
     <div class="form-group">
     <label class="label">Address: (required)</label><br>
     <div id="locationField">
      <input class="form-control" id="autocomplete" placeholder="Enter the address."
             onFocus="geolocate()" type="text" required></input>
    </div>
    
    <input type="hidden" name="item_add1" class="form-control"  disabled="true" id="street_number" placeholder="Listing Address 1" >
    <input type="hidden" name="item_add2" class="form-control"   disabled="true" id="route" placeholder="Listing Address 2" >
    <input type="hidden" name="item_city" class="form-control"   disabled="true" id="locality" placeholder="Listing City" >
    <input type="hidden" name="item_state" class="form-control"   disabled="true" id="administrative_area_level_1" placeholder="Listing State" >
    <input type="hidden" name="item_country" class="form-control"   id="country" disabled="true" placeholder="Listing Country" >
    <input type="hidden" name="item_zip" class="form-control"   disabled="true" id="postal_code" placeholder="Listing Zipcode" >
    <input type="text" name="item_apt" class="form-control" placeholder="Apartment / Suite Number" ></div> 
    
    
    
    
    
    
    
    
    
    
    
          <div class="form-group">
                                                     <label class="label">Type: (required)</label><br>
                                                      <select class="form-control custom-select required" name="item_type">
                                                        <option selected>Please Select Listing Type</option>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <option value="Antiques">Antiques</option> 
                                                         <option value="Appliances">Appliances</option> 
                                                        
                                                        <option value="Crafts">Arts & Crafts</option>
                                                        
                                                <option value="Beauty">Beauty</option>         
                                                        
                                                        
                                                        
                                                                      <option value="Books">Books</option> 
                                                         <option value="Cigarettes">Cigarettes</option> 
                                                        
                                                         
                                                        <option value="Cosmetics">Cosmetics</option>
                                                        
                                                        <option value="Clothing">Clothing</option>
                                                        
                                                <option value="Code">Code</option>  
                                                  
                                                  
                                                  
                                                                <option value="Coffee">Coffee</option> 
                                                         <option value="Collectables">Collectables</option> 
                                                        
                                                        <option value="Computers">Computers</option>
                                                        
                                                <option value="Computer_parts">Computer Parts</option>        
                                                        
                                                        
                                                     
                                                     
                                                     
                                                     
                                                                                                 
                                                         <option value="DVDs">DVDs & Blu-ray</option> 
                                                        
                                                        <option value="Electronics">Electronics</option>
                                                        
                                                <option value="Farm">Farm</option>  
                                                  
                                                  
                                                  
                                                                <option value="Food">Food</option> 
                                                         <option value="Collectables">Collectables</option> 
                                                        
                                                        <option value="Furniture">Furniture</option>
                                                        
                                                <option value="Garden">Garden</option>        
                                            
                                                                <option value="General">General</option> 
                                                                
                                                         
                                                        <option value="Handcrafted">Handcrafted</option>        
                                                                
                                                                
                                                         <option value="Household">Household</option> 
                                                        
                                                        <option value="Jewelry">Jewelry</option>
                                                        
                                                <option value="Materials">Materials</option>        
                                                      
                                                
                                                
                                                
                                                
                                                                               <option value="Music">Music</option> 
                                                         <option value="Bongs">Pipes & Bongs</option> 
                                                        
                                                        <option value="Photography">Photography</option>
                                                        
                                                <option value="Plants">Plants & Seeds</option>        
                                              
                                              
                                              
                                              
                                              
                                                                                         <option value="Plumbing">Plumbing</option> 
                                                         <option value="Energy">Renewable Energy</option> 
                                                        
                                                        <option value="Spices">Spices</option>
                                                        
                                                <option value="Sports">Sports</option>  
                                                  
                                                  
                                                  
                                                                <option value="Media">Stock Images & Videos</option> 
                                                         <option value="Tobacco">Tobacco</option> 
                                                         
                                                            <option value="Tools">Tools</option> 
                                                        
                                                        <option value="Toys">Toys</option>
                                                        
                                                <option value="Games">Video Games</option>        
                                                      
                                                  <option value="Weapons">Weapons</option>     
                                                        
                                                  
                                                        <option value="Other">Other</option>       
                                                        
                                                        
                                                    </select>  
                                                                                           

                                                </div>
    
    
    
    
    
    
    
    
     <div class="form-group">
         <label class="label">Title: (required)</label><br>
         
    <input type="text" name="item_title" class="form-control" placeholder="Listing Title" required>
    </div>
        <div class="form-group">
         <label class="label">Description: (required)</label><br>
    
    <textarea rows="4" cols="50"name="item_disc" class="form-control" placeholder="Listing Description" required></textarea>
    
    
       </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="form-group">
         <label class="label">Hourly (if rental):</label><br>
    
    
     <input type="text" name="item_hourly" class="form-control" placeholder="Listing Hourly Price">
        </div>
        <div class="form-group">
         <label class="label">Daily: (if rental)</label><br>
    <input type="text" name="item_daily" class="form-control" placeholder="Listing Daily Price">
       </div>
        <div class="form-group">
         <label class="label">Weekly: (if rental)</label><br>
    
    <input type="text" name="item_weekly" class="form-control" placeholder="Listing Weekly Price">
    
       </div>
        <div class="form-group">
         <label class="label">Montly: (if rental)</label><br>
    
    
    
    <input type="text" name="item_monthly" class="form-control" placeholder="Listing Monthly Price">
       </div>
        <div class="form-group">
         <label class="label">Sale or Rent:</label><br>
         
         
         
         <select class="form-control custom-select required" name="item_sale_rent">
    <option selected>Please Select</option>
     <option value="Rent">Rent</option> 
       <option value="Sale">Sale</option>                                        </select>         
                                                        
                                                        
                                                        
                                                        
                                                    

   </div>
        <div class="form-group">
         <label class="label">Price: (if for sale)</label><br>

<input type="text" name="item_price" class="form-control" placeholder="Listing Price">
   </div>
        <div class="form-group">
         <label class="label">Contact Email:</label><br>

 
    <input type="text" name="item_contact_email" class="form-control" placeholder="Listing Contact Email" required>
       </div>
        <div class="form-group">
         <label class="label">Contact Phone:</label><br>
    <input type="text" name="item_contact_phone" class="form-control" placeholder="Listing Contact Phone" required>
     </div>
       
    
    
    
    <input type="hidden" class="field" name="item_lat"
        id="latitude" required></input>
    <input type="hidden" class="field" name="item_long"
        id="longitude" required></input>
    
    
                   
                   
                   
                   <div class="form-group">
         <label class="label">Deliver Locally:</label><br>
    <select class="form-control custom-select required" name="item_delivery">
                                                        <option selected>Please Select</option>
    <option value="Yes">Yes</option>
    <option value="No">No</option>
    </select>
     </div>
     
     
      <div class="form-group">
         <label class="label">Delivery Fee: (optional)</label><br>
    
    <input type="text" name="item_delivery_fee" class="form-control" placeholder="Listing Delivery Fee">
     </div>
      <div class="form-group">
         <label class="label">Delivery Radius:(optional)</label><br>
    
    <input type="text" name="item_del_radius" class="form-control" placeholder="Listing Delivery Radius">
     </div>
     
                 
                 
                  <div class="form-group">
         <label class="label">Shipping:</label><br>
   
   
   
   
   
   
   
   
   <select class="form-control custom-select" name="item_shipping">
                                                        <option selected>Please Select</option>

                                                        <option value="item_no_shipping">No Shipping</option> 
                                                         <option value="item_nationally">Nationally</option>
   
                                                 <option value="item_internationally">Internationally</option>
   </select>
   
   
   
   
     </div>  
                   
                   
                   <div class="form-group">
         <label class="label">Shipping Details:</label><br>
    
    <input type="text" name="item_shipping_details" class="form-control" placeholder="Listing Shipping Details">
     </div>        
                 
                      <div class="form-group">
         <label class="label">Shipping Cost Nationally:</label><br>
    
    <input type="text" name="item_shipping_nationally" class="form-control" placeholder="Shipping Cost Nationally">
     </div>   
                   
   
        <div class="form-group">
         <label class="label">Shipping Cost Internationally:</label><br>
    
    <input type="text" name="item_shipping_internationally" class="form-control" placeholder="Shipping Cost Internationally">
     </div>   
            
            
                  
     <div class="form-group">
         <label class="label">Additional Details:</label><br>
    
    <textarea rows="4" cols="50" name="item_additional_info" class="form-control" ></textarea>
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
  <label class="form-check-label" for="instant-book">Instant Book Online</label>
</div></div>
   
   
   
   
   
   
   
   
    
    <button type="submit" class="btn btn-send" name="item-submit">Submit</button>
   
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