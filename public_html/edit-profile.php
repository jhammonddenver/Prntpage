<?php
    
    include_once 'includes/header.php';
  
  $sqlMain = "SELECT * FROM users WHERE idUsers='$id'";

$resultMain = $conn->query($sqlMain);

        $rowMain = $resultMain->fetch_assoc();
 
?>

  <!-- Main content  : start -->
      

            <div class="admin">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page__title text-center">Account Management</h2>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    <ul class="row nav nav-tabs justify-content-center text-center">
  <li class=" ml-5 mr-5"><a data-toggle="tab" href="#payments"> <font color="#000 !important">Payments</font></a></li>
  <li class="ml-5 mr-5"><a data-toggle="tab" href="#messages"> <font color="#000 !important">Messages</font></a></li>
  <li class="ml-5 mr-5"><a data-toggle="tab" href="#email"> <font color="#000 !important">Email</font></a></li>
  <li class="ml-5 mr-5"><a data-toggle="tab" href="#purchases"> <font color="#000 !important">Purchases</font></a></li>
  <li class="ml-5 mr-5"><a data-toggle="tab" href="#friends" ><font color="#000 !important">Friends</font></a></li>
  <li class="active ml-5 mr-5"><a data-toggle="tab" href="#mydetails"> <font color="#000 !important">My Details</font></a></li>
 
  
  
  
  
</ul>

<div class="tab-content">
  <div id="payments" class="tab-pane fade ">
    <h3>Payments</h3>
    <p>Coming Soon</p>
  </div>
  <div id="messages" class="tab-pane fade">
      
      
      
      <ul class="list-unstyled">
      <?php
     $sql5 = "SELECT * FROM messages WHERE msg_to='$id' OR msg_from='$id'";

$result5 = $conn->query($sql5);









 if ($result5->num_rows > 0) {
    // output data of each row
    while($row5 = $result5->fetch_assoc()) {
        $senderid = $row5["msg_from"];
        $sql6 = "SELECT * FROM users WHERE idUsers='$senderid'";
        $result6 = $conn->query($sql6);
        $row6 = $result6->fetch_assoc();
        
        echo "
                      
                      
                      
                      
                      <li class='notification-box'>
                        <div class='row'>
                          <div class='col-lg-4 col-sm-3 col-4 text-center'><a href='profile.php?id=" . $row5['msg_from']. "'>
                            <img  class='mt-2 rounded-circle' height='60' width='60' src='users/photos/" . $row6['user_photo']. "'>
                          </div>    
                          <div class='col-lg-8 col-sm-8 col-8'>
                            <strong class='text-info'>" . $row6['user_fn']. " " . $row6['user_ln']. "</strong></a>
                            <div>
                            " . $row5['msg_sub']. " <br>
                               " . $row5['msg_body']. "
                            </div>
                            <small class='text-warning'>" . $row5['sent_on']. "</small>
                          </div>    
                        </div>
                      </li>
                      
                      " ;}} ?>
    </ul>                  
  </div>
  <div id="email" class="tab-pane fade">
    <h3>Email</h3>
    <p>Coming Soon</p>
  </div>
    <div id="purchases" class="tab-pane fade">
    <h3>Purchases</h3>
    <p>Coming Soon</p>
  </div>
  <div id="friends" class="tab-pane fade">
    
    
      <ul class="list-unstyled">
    
    
    
    
    
    
    
  
        <?php
     $sql5TT = "SELECT * FROM friends WHERE uid='$id' OR friend_id='$id'";

$result5TT = $conn->query($sql5TT);









 if ($result5TT->num_rows > 0) {
    // output data of each row
    while($row5TT = $result5TT->fetch_assoc()) {
        $friendid = $row5TT["friend_id"];
        
        if ($friendid == $id){
            $otherid = $row5TT["uid"];
        }else {
             $otherid = $row5TT["friend_id"];
        }
        
        $sql6TT = "SELECT * FROM users WHERE idUsers='$otherid'";
        $result6TT = $conn->query($sql6TT);
        $row6TT = $result6TT->fetch_assoc();
        
        echo "
                      
                      
                      
                      
                      <li class='notification-box'>
                        <div class='row'>
                          <div class='col-lg-4 col-sm-3 col-4 text-center'><a href='profile.php?id=" . $row5TT['friend_id']. "'>
                            <img  class='mt-2 rounded-circle' height='60' width='60' src='users/photos/" . $row6TT['user_photo']. "'>
                          </div>    
                          <div class='col-lg-8 col-sm-8 col-8'>
                            <strong class='text-info'>" . $row6TT['user_fn']. " " . $row6TT['user_ln']. "</strong></a>
                            
                           
                             
                        </div>
                        </div> 
                      </li>
                      
                      " ;}} ?>

      
     </ul>

  </div> 
   
  
    
    <div id="mydetails" class="tab-pane in active">
        <div class="row">
            <div class="col-3 float-left">
                
             <form action="includes/upload.inc.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <button type="submit" class="btn btn-send col-2 px-1 text-white" name="submit">Upload</button>
        </form>  
                
                
 <?php            
     $photo = $rowMain['user_photo'];                                      
if ($photo == 1){
    echo '<img src="images/default-profile.png" />';
  
} else {
      
      
  echo "<img height='260' width='375' src='users/photos/".$photo."?".mt_rand()."' />";
}
?>

                                        

                                        <div class="profile__name">
                                            <?php echo "{$rowMain['user_fn']} {$rowMain['user_ln']}"; ?>
                                        </div>
                                        <span class="profile__address">
                                             <?php echo "{$rowMain['user_add1']}  {$rowMain['user_add2']}, 
                                             {$rowMain['user_city']}, {$rowMain['user_state']}, {$rowMain['user_zip']}"; ?>
                                        </span>
                                       
                                   
                                
                                
                                <div class="profile__info-verified">
                                        <h6 class="profile__subtitle">Verified Profile</h6>

                                        <ul class="profile__verified-list">
                                            <li class="profile__verified-item not-verified">
                                                Phone 
                                            </li>
                                            <li class="profile__verified-item not-verified">
                                                Government ID 
                                            </li>
                                            <li class="profile__verified-item not-verified">
                                                Address 
                                            </li>
                                             <li class="profile__verified-item not-verified">
                                               Clean Background
                                            </li>
                                        </ul>
                                    </div>                     
                                
                                

                                <ul class="admin__list">
                                   
                                    <li class="admin__item">
                                        <li class="admin__item">
                                        <a href="profile.php?id=<?php echo "{$rowMain['idUsers']}"; ?>" class="admin__link">Public Profile</a>
                                    </li>
                                   
                                   
                                   
                                   
                                    <li class="admin__item">
                                        <li class="admin__item">
                                        <a href="change-password.php" class="admin__link">Change Password</a>
                                    </li>
                                    <li class="admin__item">
                                       
                                        <a href="mymedia.php" class="admin__link">Photos and Videos</a>
                                    </li>
                                  
                                    <li class="admin__item">
                                        <a href="user-reviews.php" class="admin__link">Reviews</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-8 col-lg-8 float-left">
                               
                                <div class="profile__edit">

                                    <form class="form" action="includes/editprofile.inc.php" method="post">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">                     <label class="label">First Name</label>                   
                                                    <input type="text"  class="form-control" name="first" required value=" <?php echo "{$rowMain['user_fn']}"; ?>">

                                                

                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">                    <label class="label">Last Name</label>
                                                    <input type="text"   class="form-control" name="last" required value=" <?php echo "{$rowMain['user_ln']}"; ?>">


                                                 

                                                    
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="row row_select">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label class="label">Gender</label>
                                                    <input type="text"   class="form-control" name="gender" required value=" <?php echo "{$rowMain['user_gender']}"; ?>">                                       

                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-row ">
                                                    
                    
                                                        
                                                         <div class="col-1 col-md-4">
                                               
                                                    
                                                        
                                                            <div class="form-group active">   
                                                           <label class="label">Birth Month</label>
                                                                <input type="text" class="form-control" name="bmonth"  required value=" <?php echo "{$rowMain['user_bmonth']}"; ?>">                                                

                                                                                                           
                                                        
                                                    </div>
                                                </div>                                               
                                            
<br>


   <div class="col-1 col-md-4">
                                               
                                                    
                                                        
                                                            <div class="form-group active">   
                                                            <label class="label">Birth Day</label>
                                                                <input type="text" class="form-control" name="bday"  required value=" <?php echo "{$rowMain['user_bday']}"; ?>">      
                                                             

                                                                                                           
                                                        
                                                    </div>
                                                </div>                                               
                                          
                                            
                                            
                                              <div class="col-1 col-md-4">
                                                
                                                    
                                                        
                                                            <div class="form-group active">   
                                                           <label class="label">Birth Year</label>
                                                                <input type="text" class="form-control" name="byear"  required value=" <?php echo "{$rowMain['user_byear']}"; ?>">

                                                                                                           
                                                        
                                                    </div>
                                                </div>                                     </div>            
                                      
                                             </div> 
                                            
                                            
                                                                         

                                        <div class="row col-12">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group active">
                                                    <label class="label">Email</label>
                                                    <input type="email" class="form-control" name="email"  required value =" <?php echo "{$rowMain['emailUsers']}"; ?>">
                                        
                                                   
                                         
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group active">
                                                    <label class="label">Phone Number</label>
                                                    <input type="text" class="form-control" name="phone"  required value=" <?php echo "{$rowMain['user_phone']}"; ?>">

                                                  
                                                </div>
                                            </div>
                                        </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label class="label">Preferred Language</label>
                                                    <input type="text"  class="form-control" name="lang"  required value=" <?php echo "{$rowMain['user_lang']}"; ?>">
                                                   
                                                   
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label class="label">Preferred Currency</label>

                                                 
                                                    <input type="text"  class="form-control" name="currency"  required value=" <?php echo "{$rowMain['user_currency']}"; ?>">

                                            
                                                </div>  
                                            </div>
                                            
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                             <div class="row">
                                            
                                          
                                            
                                            
                                             
                                            
                                            
                                            <div class="col-12 col-md-6">
                                                <div class="form-group"> 
                                            <label class="label">Change Location</label>
                                            <div id="locationField">
      <input id="autocomplete" class="form-control" placeholder="Enter new address."
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
    
                                            
                                            
                                            
                                            
                                            </div>  
                                            </div>
                                            
                                             <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label class="label">From</label>

                                                 
                                                    <input type="text"  class="form-control" name="from"  required value=" <?php echo "{$rowMain['user_from']}"; ?>">

                                            
                                                </div>  
                                            </div>
                                            
                                        </div> 

                                        <div class="row justify-content-md-end">
                                            <div class="col-12 col-lg-6 text-lg-right">
                                                <button type="submit" class="text-white btn btn-send" name="editprofile-submit">Save</button>
                                                
                                                
                                                
             

                                                
                                                
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div> 
            </div>  
  </div>
  
  
</div></div>
                    
                    
                    
                   
                    
                    
                    
                    
                    
                    

                   

        </main> <!-- Main content  : end -->
        
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


 <?php
       include_once 'includes/footer.php';
    ?>
