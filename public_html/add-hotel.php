<?php
  session_start();

  include_once "includes/header.php";
   include_once 'includes/navbar-map.php';
  
?>
        <main class="page-content"> 

            <div class="add-listing">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page__title text-center">Add Hotel</h2>
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

<form class="form" action="includes/new.hotel.inc.php" method="post">
    
          <div class="form-group">
              
              <label class="label">Address</label>
              
              <div id="locationField">
      <input class="form-control" id="autocomplete" placeholder="Enter the address."
             onFocus="geolocate()" type="text" required></input>
    </div>
    
    <input type="hidden" name="hotel_add1" class="form-control"  disabled="true" id="street_number" placeholder="Listing Address 1" required>
    <input type="hidden" name="hotel_add2" class="form-control"   disabled="true" id="route" placeholder="Listing Address 2" required>
    <input type="hidden"text name="hotel_city" class="form-control"   disabled="true" id="locality" placeholder="Listing City" required>
    <input type="hidden" name="hotel_state" class="form-control"   disabled="true" id="administrative_area_level_1" placeholder="Listing State" required>
    <input type="hidden" name="hotel_country" class="form-control"   id="country" disabled="true" placeholder="Listing Country" required>
    <input type="hidden" name="hotel_zip" class="form-control"   disabled="true" id="postal_code" placeholder="Listing Zipcode" required>
              
              
              
              </div>
               <div class="form-group">
                   <label class="label">Subcatagory</label>
              
              
              
              
                                                   
                                                      <select class="form-control custom-select required" name="hotel_type">
                                                        <option selected>Please Select Listing Type</option>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <option value="BnBs">Bed & Breakfast</option> 
                                                         <option value="Hotel">Hotels</option> 
                                                        
                                                        <option value="Hostel">Hostel</option>
                                                        
                                                <option value="Motel">Motel</option>         
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                    </select>  
                                                                                           

                                               
                                                
                                                 </div>
               <div class="form-group">
                   <label class="label">Business Name</label>
    
    
    <input type="text" name="hotel_title" class="form-control" placeholder="Listing Title" required>
     </div>
               <div class="form-group">
                   <label class="label">Description</label>
    <input type="text" name="hotel_disc" class="form-control" placeholder="Listing Discription" required>
     </div>

                  <div class="form-group">
          
    <label class="label">Preferred Contact Method:</label><br>
    
        
        
        <input type="radio" name="hotel_contact_method" value="email" checked> Email &nbsp;
  <input type="radio" name="hotel_contact_method" value="message"> Message &nbsp;
  <input type="radio" name="hotel_contact_method" value="phone"> Phone<br>
        
        
    
    
    </div>
              
              
               <div class="form-group">
                <label class="label">Contact Email</label>   
    
    <input type="text" name="hotel_contact_email" class="form-control" placeholder="Listing Contact Email" required>
    
    
    
    </div>
              
              
               <div class="form-group">
                <label class="label">Contact Phone</label> 
    <input type="text" name="hotel_contact_phone" class="form-control" placeholder="Listing Contact Phone" required>
    
    <input type="hidden" class="field" name="hotel_lat"
        id="latitude" required></input>
    <input type="hidden" class="field" name="hotel_long"
        id="longitude" required></input>
    
     </div>
    
    
    
    
    
    
    
    
    
    
    
        
              
              
               <div class="form-group">
                <label class="label">Room Title</label>
                
                 <input type="text" name="hotel_room_title" class="form-control" placeholder="Room Title" required>
                
              </div>
              
              
              
               <div class="form-group">
                <label class="label">Room Quantity</label>
                
                 <input type="text" name="hotel_room_quantity" class="form-control" placeholder="Room Quantity" required>
                
              </div>
              
              
              
               <div class="form-group">
                <label class="label">Room Base Price</label>
                
                 <input type="text" name="hotel_base_price" class="form-control" placeholder="Room Base Price" required>
                
              </div>
              
              
              
              
               <div class="form-group">
                <label class="label">Bed Type 1</label>
                    <select class="form-control custom-select required" name="hotel_bedType1" required>
                                                        <option selected>Please Select Bed Type 1</option>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <option value="hotel-bed1-king">King</option> 
                                                         <option value="hotel-bed1-queen">Queen</option> 
                                                        
                                                        <option value="hotel-bed1-double">Double</option>
                                                        
                                                <option value="hotel-bed1-twin">Twin</option>         
                                                        
                                                        <option value="hotel-bed1-bunk-beds">Bunk Beds</option>   
                                                        
                                                 
                                                    </select>  
    
    <input type="text" name="hotel_bedTypeNum1" class="form-control" placeholder="Number of BedType1" required>
    
    
    
    
    
    
    <div class="form-group">
                <label class="label">Bed Type 2</label>
                    <select class="form-control custom-select required" name="hotel_bedType2">
                                                        <option selected>Please Select Bed Type 2</option>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <option value="hotel-bed2-king">King</option> 
                                                         <option value="hotel-bed2-queen">Queen</option> 
                                                        
                                                        <option value="hotel-bed2-double">Double</option>
                                                        
                                                <option value="hotel-bed2-twin">Twin</option>         
                                                        
                                                        <option value="hotel-bed2-bunk-beds">Bunk Beds</option>   
                                                        
                                                 
                                                    </select>  
    
    <input type="text" name="hotel_bedTypeNum2" class="form-control" placeholder="Number of BedType1" required>
    
    </div>
    
    
    
    
    
    <div class="form-group">
                <label class="label">Bed Type 3</label>
                    <select class="form-control custom-select required" name="hotel_bedType3">
                                                        <option selected>Please Select Bed Type 3</option>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <option value="hotel-bed3-king">King</option> 
                                                         <option value="hotel-bed3-queen">Queen</option> 
                                                        
                                                        <option value="hotel-bed3-double">Double</option>
                                                        
                                                <option value="hotel-bed3-twin">Twin</option>         
                                                        
                                                        <option value="hotel-bed3-bunk-beds">Bunk Beds</option>   
                                                        
                                                 
                                                    </select>  
    
    <input type="text" name="hotel_bedTypeNum3" class="form-control" placeholder="Number of BedType3">
    
    
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
    
    
    <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="non-refundable" value="1">
  <label class="form-check-label" for="non-refundable">Non-refundable</label>
</div>
    
    
    
    
    
    
    
    
    
    
    
    
     <div class="form-group">
    
    
     <label class="label">Room Amenities:</label><br>
    
    <div class="row col-12">

<div class="col-3">
    <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Private Bathroom" value="1">
  <label class="form-check-label" for="Private Bathroom">Private Bathroom</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Shower" value="1">
  <label class="form-check-label" for="Shower">Shower</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Bathtub" value="1" >
  <label class="form-check-label" for="Bathtub">Bathtub</label>
</div>
    <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Hair Dryer" value="1">
  <label class="form-check-label" for="Hair Dryer">Hair Dryer</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Complimentary Hygiene Products" value="1">
  <label class="form-check-label" for="Complimentary Hygiene Products">Complimentary Hygiene Products</label>
</div></div><div class="col-3">
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="TV" value="1" >
  <label class="form-check-label" for="TV">TV</label>
</div>
       <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Sofa" value="Sofa">
  <label class="form-check-label" for="Sofa">Sofa</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Kitchenette" value="1">
  <label class="form-check-label" for="Kitchenette">Kitchenette</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Waterfront" value="1" >
  <label class="form-check-label" for="Waterfront">Waterfront</label>
</div>
       <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="View" value="1">
  <label class="form-check-label" for="View">View</label>
</div></div><div class="col-3">
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Sea View" value="1">
  <label class="form-check-label" for="Sea View">Sea View</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Mountain View" value="1" >
  <label class="form-check-label" for="Mountain View">Mountain View</label>
</div>
          <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Smoker Friendly" value="1">
  <label class="form-check-label" for="Smoker Friendly">Smoker Friendly</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Tea Kettle" value="1">
  <label class="form-check-label" for="Tea Kettle">Tea Kettle</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="1" value="Coffee Machine" >
  <label class="form-check-label" for="Coffee Machine">Coffee Machine</label>
</div></div>
<div class="col-3">
    <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="ac" value="1">
  <label class="form-check-label" for="ac">Air Conditioning</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Free Wifi" value="1">
  <label class="form-check-label" for="Free Wifi">Free Wifi</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="AC" value="1" >
  <label class="form-check-label" for="AC">AC</label>
</div>
        <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Heating" value="1">
  <label class="form-check-label" for="Heating">Heating</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Wheelchair Accessible" value="1">
  <label class="form-check-label" for="Wheelchair Accessible">Wheelchair Accessible</label>
</div>

    
     </div>
    
    </div>
    
    
    
      <div class="form-group">
                <label class="label">Additional Room Details</label>
                
                 <textarea name="hotel_room_details" class="form-control" placeholder="Enter Additional Details"></textarea>
                
              </div>
    
    
    
    
    
    
    
    
    
         <div class="form-group">
    
    
     <label class="label">Hotel Amenities:</label><br>
    
    <div class="row col-12">

<div class="col-3">
    <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Suana" value="1">
  <label class="form-check-label" for="Suana">Sauna</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Pool" value="1">
  <label class="form-check-label" for="Pool">Pool</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Spa" value="1" >
  <label class="form-check-label" for="Spa">Spa</label>
</div>
    <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Bar" value="1">
  <label class="form-check-label" for="Bar">Bar</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Gym" value="1">
  <label class="form-check-label" for="Gym">Gym</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Fitness Center" value="1" >
  <label class="form-check-label" for="Fitness Center">Fitness Center</label>
</div></div><div class="col-3">
       <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Restaurant" value="Sofa">
  <label class="form-check-label" for="Restaurant">Restaurant</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Room Service" value="1">
  <label class="form-check-label" for="Room Service">Room Service</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Complementary Breakfast" value="1" >
  <label class="form-check-label" for="Complementary Breakfast">Complementary Breakfast</label>
</div>
       <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Family Friendly" value="1">
  <label class="form-check-label" for="Family Friendly">Family Friendly</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Adult Orientated" value="1">
  <label class="form-check-label" for="Adult Orientated">Adult Orientated</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Waterfront" value="1" >
  <label class="form-check-label" for="Waterfront">Waterfront</label>
</div></div><div class="col-3">
          <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Downtown" value="1">
  <label class="form-check-label" for="Downtown">Downtown</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Off Street Parking" value="1">
  <label class="form-check-label" for="Off Street Parking">Off Street Parking</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="1" value="Lounge" >
  <label class="form-check-label" for="Lounge">Lounge</label>
</div>
    <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Free Coffee/Tea" value="1">
  <label class="form-check-label" for="Free Coffee/Tea">Free Coffee/Tea</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Late Check Out" value="1">
  <label class="form-check-label" for="Late Check Out">Late Check Out</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Early Check In" value="1" >
  <label class="form-check-label" for="Early Check In">Early Check In</label>
</div></div>
<div class="col-3">
        <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Pet Friendly" value="1">
  <label class="form-check-label" for="Pet Friendly">Pet Friendly</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Electric Car Charging Station" value="1">
  <label class="form-check-label" for="Electric Car Charging Station">Electric Car Charging Station</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Rent By The Hour" value="1">
  <label class="form-check-label" for="Rent By The Hour">Rent By The Hour</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Airport Shuttle" value="1">
  <label class="form-check-label" for="Airport Shuttle">Airport Shuttle</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Cryptocurrency Accepted" value="1">
  <label class="form-check-label" for="Cryptocurrency Accepted">Cryptocurrency Accepted</label>
</div>

<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Laundry" value="1">
  <label class="form-check-label" for="Laundry">Laundry</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="Fireplace" value="1">
  <label class="form-check-label" for="Fireplace">Fireplace</label>
</div>


    
     </div>
    
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <button type="submit" class="btn btn-send" name="hotel-submit">Submit</button>
   
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