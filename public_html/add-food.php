9<?php
  session_start();

  include_once "includes/header.php";
  
?>
        <main class="page-content"> 

            <div class="add-listing">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page__title text-center">Add Food</h2>
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

<form class="form" action="includes/new.food.inc.php" method="post">
    
    
    <div class="form-group">
                                                   <label class="label">Subcategory:</label><br>

    <select class="form-control custom-select required" name="food_cat"  aria-describedby="mutedField1">                                                   <option selected>Select Category</option>
                                                        
                                                        
                                                         <option value="Home Cooked">Home Cooked</option>   
                                                         <option value="Home Cooked">Restaurant</option>  </select>
    </div> 
    
    
    
    
    <div class="form-group">
                                                   <label class="label">Title:</label><br>

    <input type="text" name="food_title" class="form-control" placeholder="Title" required> 
    </div>
    
    
    
    
          <div class="form-group">
                                               
                                               <label class="label">Type:</label><br> 
                                                   
                                                      <select class="form-control custom-select required" name="food_type"  aria-describedby="mutedField1">                                                   <option selected>Please Select Type</option>
                                                        
                                                        
                                                         <option value="Food Truck">Food Truck</option>   
                                                        
                                                        
                                                        <option value="Family Style">Family Style</option> 
                                                        <option value="House">House</option> 
                                                         <option value="Bar">Bar</option> 
                                                          <option value="Pub">Pub</option> 
                                                        
                                                       <option value="Tavern">Tavern</option>
                                                        <option value="Deli">Deli</option>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                                      
                                                         <option value="Pizzeria">Pizzeria</option> 
                                                        
                                                        
                                                        
                                                <option value="Cafe">Cafe</option>  
                                                  
                                                  
                                                  
                                                                
                                           
                                           
                                                <option value="Fast Food">Fast Food</option>   
                                                        
                                                        
                                                        <option value="Diner">Diner</option> 
                                                        <option value="Restaurant">Restaurant</option> 
                                                         <option value="Buffet">Buffet</option> 
                                                          <option value="Nightclub">Nightclub</option> 
                                                        
                                                       <option value="Adult Entertainment">Adult Entertainment</option>
                                                        <option value="Banquet Hall">Banquet Hall</option>             
                                                        
                                              
                                              
                                                <option value="Osteria">Osteria</option> 
                                                        
                                                       <option value="Steakhouse">Steakhouse</option>
                                                        <option value="Fine Dining">Fine Dining</option>           
                                                        
                                                        
                                                        
                                                        
                                                    </select>  
                                                                                           

                                                </div>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                 <div class="form-group">
                                                      <label class="label">Price Range:</label><br>
                                                   
                                                      <select class="form-control custom-select required" name="food_price_range">
                                                        <option selected>Select</option>
                                                        
                                                        
                                                         <option value="$">$</option>   
                                                        
                                                        
                                                        <option value="$$">$$</option> 
                                                        <option value="$$$">$$$</option> 
                                                         <option value="$$$$">$$$$</option> 
                                                         
                                                        
                                             
                                                    </select>  
                                                                                           

                                                </div>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                              
   
     <div class="form-group">
                                                   <label class="label">Delivery:</label><br>
                                                      <select class="form-control custom-select required" name="food_delivery">
                                                        <option selected>Select</option>
                                                        
                                                        
                                                         <option value="No">No</option>   
                                                        
                                                        
                                                        <option value="Yes">Yes</option> 
                                                       
                                                          
                                             
                                                    </select>  
                                                                                           

                                                </div>
   
   
   
   
 <div class="form-group">
                                                   <label class="label">Delivery Radius:</label><br>
        
    <input type="text" name="food_radius" class="form-control" placeholder="Delivery Radius" required></div>

   
   
 <div class="form-group">
                                                   <label class="label">Delivery Fee:</label><br>
        
    <input type="text" name="food_del_fee" class="form-control" placeholder="Delivery Fee" required></div>
   
   
   
   
    <div class="form-group">
                                                   <label class="label">Description of Restaurant:</label><br>

    <textarea name="food_disc" rows="8" cols="100" >

</textarea> </div>
    
    
     <div class="form-group">
                                                   <label class="label">Location:</label><br>
    
     <div id="locationField">
      <input  class="form-control" id="autocomplete" placeholder="Enter the location."
             onFocus="geolocate()" type="text" required></input>
    </div></div>
    
    <input type="hidden" name="food_add1" class="form-control"  disabled="true" id="street_number" placeholder="Address 1" required>
    <input type="hidden" name="food_add2" class="form-control"   disabled="true" id="route" placeholder="Address 2" required>
    <input type="hidden"text name="food_city" class="form-control"   disabled="true" id="locality" placeholder="City" required>
    <input type="hidden" name="food_state" class="form-control"   disabled="true" id="administrative_area_level_1" placeholder="State" required>
    <input type="hidden" name="food_country" class="form-control"   id="country" disabled="true" placeholder="Country" required>
    <input type="hidden" name="food_zip" class="form-control"   disabled="true" id="postal_code" placeholder="Zipcode" required>
    
    
    
  
    
  
    
    
    
    <input type="hidden" class="field" name="food_lat"
        id="latitude" required></input>
    <input type="hidden" class="field" name="food_long"
        id="longitude" required></input>
    
    
        
        
        <div class="form-group">
                                                   <label class="label">Hours of Operation:</label><br>
        
    <input type="text" name="food_hours" class="form-control" placeholder="Hours" required></div>
    
    <div class="form-group">
                                                   <label class="label">Menu:</label><br>
  <textarea name="food_menu" rows="8" cols="100" >

</textarea>       </div>    



 <div class="form-group">
                                                   <label class="label">Cuisine Type:</label><br>
        
    <input type="text" name="food_cuisine" class="form-control" placeholder="Cuisine Type" required></div>


     <div class="form-group">
                                                   <label class="label">Allow Instant Book:</label><br>
                                                      <select class="form-control custom-select required" name="food_instant_book">
                                                        <option selected>Select</option>
                                                        
                                                        
                                                         <option value="No">No</option>   
                                                        
                                                        
                                                        <option value="Yes">Yes</option> 
                                                       
                                                          
                                             
                                                    </select>  
                                                                                           

                                                </div>

<div class="form-group">
                                                   <label class="label">Additional Information:</label><br>
  <textarea name="food_add_info" rows="8" cols="100" >

</textarea>       </div>    


   
    
    <button type="submit" class="btn btn-send" name="food-submit">Submit</button>
   
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