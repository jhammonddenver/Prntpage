<?php
  session_start();

  include_once 'includes/header2.php';
   include_once 'includes/navbar-map.php';
   
   
   if( !isset($_SESSION['id']) ){
   echo '
    <div class="container ">
    <div class="row mt-3 justify-content-center">
    <center><h3>You must log in to continue.</h3> </center></div>
   <div class=" d-flex flex-column justify-content-center">
               
                    <div class="login row justify-content-center">
                   
                        <div class="col-12">
                        <p class="text-center">Thank you for stopping by.</p>
                            <div class="authorization-inner mx-auto">
                                <div class="col-12">                        
                                    <ul class="nav  ">
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-light " href="#">Sign In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-light" href="signup.php">Register</a>
                                        </li>
                                    </ul>                        
                                </div>

                                <div class="authorization-body">
                                    <form class="form authorization-form" action="includes/login.inc.php" method="post">
                                        <div class="authorization-form__top">
                                            <div class="form-group active">
                                                
                                                <input type="text" class="form-control"  name="mailuid" required>

                                                <label for="loginEmail" class="form-label">Email</label>

                                               

                                                
                                            </div>

                                            
                                            <div class="form-group">  
                                             <label  class="label">Password</label>
                                                <input type="password" class="form-control" name="pwd"  required>

                                                 

                                                

                                                      
                                            </div>                                    

                                            <div class="row justify-content-between align-items-center form-group no-gutters">
                                                <div class="col-12 col-md-6 mb-2 mb-md-0">                  
                                                    <div class="checkbox">
                                                        <label class="checkbox-label">
                                                            <input type="checkbox" class="checkbox-input" checked>
                                                            <span class="checkbox-indicator"></span>
                                                            <span class="checkbox-description">
                                                                Remember Me
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6 text-md-right">
                                                    <a href="#" class="form-link">
                                                        Forgot password?
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row justify-content-md-end">
                                                <div class="col-12 col-md-6 text-md-right">
                                                    <button type="submit" class="btn btn-send text-white" name="login-submit" >Sign In</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                    </form>
                                </div></div></div></div>
          ';
            
 
   } else {

  echo '

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

<form class="form" action="includes/new.bnb2.inc.php" method="post">
    
        
                   
    
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
                                                   
                                                   
                                               
    
    
    
    
    
    
    
    
    <div class="form-group">
     <label class="label">Category:</label><br>
    
    <select name="bnb_cat" class="form-control custom-select " aria-describedby="mutedField1">
                                                            <option selected>-- Choose One --</option>
                                                            <option value="Entire Property">Entire Property</option>
                                                            <option value="Private Room">Private Room</option>
                                                            <option value="Shared Room">Shared Space</option>
                                                            
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
    
   
    <input type="hidden" class="field" name="bnb_lat"
        id="latitude" required></input>
    <input type="hidden" class="field" name="bnb_long"
        id="longitude" required></input>
    
    
     </div> 
  
  
   <div class="form-group">
     <label class="label">Description:</label><br>
     <textarea rows="4"  class="form-control" id="field-9" name="bnb_disc" placeholder="Add description, house rules, and anything else the guest will need to know. " required></textarea></div>  
     
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
   <select name="bnb_cancel" class="form-control custom-select " aria-describedby="mutedField1">
                                                            <option selected>-- Choose One --</option>
                                                            <option value="No Refunds">No Refunds</option>
                                                            <option value="Strict">Strict</option>
                                                            <option value="Moderate">Moderate</option>
                                                            <option value="Flexible">Flexible</option>
                                                            </select>
    
    
    
    
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
    ';}
    ?>
    
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