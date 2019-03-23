<?php
 session_start();
include_once 'includes/header.php';
 $userid = $_SESSION['id']; 

$id = $_GET['id'];
$_SESSION['lid'] = $_GET['id'];
$sql3 = "SELECT * FROM bnbs WHERE id='$id'";

$result3 = $conn->query($sql3);
$row3 = $result3->fetch_assoc();
$luid = $row3['listing_uid'];
$published = $row3['published'];
$deleted = $row3['deleted'];



if ($userid != $luid){
    
    echo'
    <div class="container">
    <div class="p-5 row col-12">
    <h1 class="col-12" style="text-align: center; !important">
    You do not have permission to view this page.
    </h1>
    </div>
    <div class="row">
    <div class="col-5">
    </div>
     <button class="btn btn-success col-2 float-left"  onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script> 
    </div>
    ';
    include 'includes/footer.php';
    exit();
}
else if ($deleted != '1')
{
    echo '
    <div class="container">
    <div class="p-5 row col-12">
    <h1 class="col-12" style="text-align: center; !important">
    Edit ' . $row3["name"] . '
    </h1>
    </div>
    <div class="col-2 float-left">';
    if ($published == '0'){
       echo'
       
       
       
       
       
       
       
          
        <form class="form float-left  " action="includes/unpub.bnb.inc.php" method="post">
                                        <input type="hidden" name="unpublish" value="' . $row['id']. '">
                                  <button class="btn btn-warning text-white  float-left" type="submit" name="unpublish-submit">Unpublish</button></form>
       
 
       
      
       '; 
    }
     if ($published == '1'){
       echo'
       
        <form class="form float-left " action="includes/pub.bnb.inc.php" method="post">
                                        <input type="hidden" name="publish" value="' . $row['id']. '">
                                   <button class="btn btn-send text-white float-left" type="submit" name="publish-submit">Publish</button>
                           </form>
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       '; 
    }
    echo'
    
    
    
    
    
     <form class="form float-left ml-2 " action="includes/del.bnb2.inc.php" method="post">
                                        <input type="hidden" name="deleted" value="' . $row['id']. '">
                                     <button style="width:30px; height:35px" type="submit" class="btn  p-1 m-1 " name="delete-submit"><i class="ico-remove"></i>
</button>
                           </form>
    
    
    
    
    
    
    
    </div>
    
    <div class=" col-8 float-left">
    
    
    
   <form class="form " action="includes/edit.bnb.inc.php" method="post">
    
      
    
    
    
    
    <div class="form-group">
     <label class="label">Category:</label><br>
    
    <select name="bnb_cat" class="form-control custom-select " aria-describedby="mutedField1">
                                                            <option value="' . $row3["listing_cat"] . '" >' . $row3["listing_cat"] . '</option>
                                                            <option value="Entire Property">Entire Property</option>
                                                            <option value="Private Room">Private Room</option>
                                                            <option value="Shared Room">Shared Space</option>
                                                            
                                                            </select>
    
    
    
    
    </div>
    
    
    
    
    
    
    
    
    
    

    
    
    
    
      <div class="form-group">
     <label class="label">Type:</label><br>
    
    <select name="bnb_type" class="form-control custom-select " aria-describedby="mutedField1">
                                                            <option value="' . $row3["type"] . '" >' . $row3["type"] . '</option>
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
    <input type="text" name="bnb_title" class="form-control" value="' . $row3["name"] . '" ></div> 

                                       
                  
   
    
    <div class="form-group">
    <label class="label">Price Per Night:</label><br>
    <input type="text" name="bnb_nightly" class="form-control" value="' . $row3["listing_nightly"] . '">
    </div> 
    
   
    

    
    <div class="form-group">
        
        
        
         <label class="label">Bedrooms:</label><br>
    
    
    <input type="text" name="bnb_bedrooms" class="form-control" value="' . $row3["listing_bedrooms"] . '" >
    
         
            </div> 
    
    <div class="form-group">
     <label class="label">Bathrooms:</label><br>
    
    <input type="text" name="bnb_bathrooms" class="form-control" value="' . $row3["listing_bathrooms"] . '" >
    
            </div> 
    
  
   
  
  
   <div class="form-group">
     <label class="label">Description:</label><br>
     <textarea rows="4"  class="form-control" id="field-9" name="bnb_disc"   >' . $row3["listing_description"] . '</textarea></div>  
     
     <div class="form-group">
            
    <label class="label">Allow Instant Book:</label><br>
    
    
    
    <small>
        Guests pay online instantly. Can cancel or turn down any guest you feel uncomfortable with. The safety of our hosts is our top concern.
    </small>
     
       <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" name="instant-book-allow[]" id="instant-book-allow" value="allowed" 
  
  
 '; 
 if ($row3['instant-book-allow'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="instant-book-allow">Allow Instant Book</label>
</div>
    
    </div>
     
     
     
     
     
     
     
    
    <div class="form-group">
             
    <label class="label">Payment Options:</label><br>
    
        
 <small> Guests will pay 3.9% deposit fee for Cash or Credit Card on arrival options to confirm booking, which Prntpage takes to maintain our customer support.
   </small><br> 
    
    
    
    
   
    
    
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="cash-arrival" value="1" 
  
  
  
  
  '; 
 if ($row3['cash-arrival'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  
  
  
  
  
  
  
  
  <label class="form-check-label" for="cash-arrival">Cash on Arrival</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="credit-card-arrival" value="1"
    '; 
 if ($row3['credit-card-arrival'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  
  
  
  
  
  
  <label class="form-check-label" for="credit-card-arrival">Credit Card on Arrival</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="instant-book" value="1"   '; 
 if ($row3['instant-book'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  
  
  <label class="form-check-label" for="instant-book">Pay Online</label>
</div>
    
    <div class="form-group">
             
    <label class="label">Cancellation Policy:</label><br>
    
    <select name="bnb_cancel" class="form-control custom-select " aria-describedby="mutedField1">
                                                            <option value="' . $row3["cancel_policy"] . '" >' . $row3["cancel_policy"] . '</option>
                                                            <option value="No Refunds">No Refunds</option>
                                                            <option value="Strict">Strict</option>
                                                            <option value="Moderate">Moderate</option>
                                                            <option value="Flexible">Flexible</option>
                                                            </select>
    
    
    
    

    
    </div>
    
    
    
    

    <div class="form-group mb-5">
    
    
     <label class="label">Amenities:</label><br>
    
    <div class="row col-12">
        <div class="col-3">


    <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="elevator" value="'.$row3['elevator'].'"
      '; 
 if ($row3['elevator'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  
  
  
  <label class="form-check-label" for="elevator">Elevator</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="internet" value="'.$row3['internet'].'"
      '; 
 if ($row3['internet'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  
  
  
  <label class="form-check-label" for="internet">Internet</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="wifi" value="'.$row3['wifi'].'" 
      '; 
 if ($row3['wifi'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  
  
  
  <label class="form-check-label" for="wifi">WiFi</label>
</div>
    <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="family" value="'.$row3['family'].'"
  '; 
 if ($row3['family'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="familiy">Family</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="gym" value="'.$row3['gym'].'"
  '; 
 if ($row3['gym'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="gym">Gym</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="free-parking-premises" value="'.$row3['gym'].'" 
    '; 
 if ($row3['gym'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="free-parking-premises">Free Parking on Premises</label>
</div>
       <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="hot-tub" value="'.$row3['hot_tub'].'"
  '; 
 if ($row3['hot_tub'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="hot-tub">Hot Tub</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="buzzer" value="'.$row3['buzzer'].'"
  '; 
 if ($row3['buzzer'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="buzzer">Buzzer/Wireless Intercom</label>
</div></div> <div class="col-3">
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="dryer" value="'.$row3['dryer'].'" 
  '; 
 if ($row3['dryer'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="dryer">Dryer</label>
</div>
       <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="kitchen" value="'.$row3['kitchen'].'"
  '; 
 if ($row3['kitchen'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="kitchen">Kitchen</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="pool" value="'.$row3['pool'].'"
  '; 
 if ($row3['pool'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="pool">Pool</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="cable" value="'.$row3['cable'].'" 
  '; 
 if ($row3['cable'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="cable">Cable TV</label>
</div>
          <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="pets" value="'.$row3['pets'].'"
  '; 
 if ($row3['pets'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="pets">Pets Allowed</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="handicap" value="1"
  '; 
 if ($row3['handicap'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="handicap">Wheelchair Accessible</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="1" value="breakfast" 
  '; 
 if ($row3['breakfast'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="breakfast">Breakfast</label>
</div>
    <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="ac" value="1"
  '; 
 if ($row3['ac'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="ac">Air Conditioning</label>
</div></div> <div class="col-3">
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="heating" value="1"
  '; 
 if ($row3['heating'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="heating">Heating</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="hangers" value="1" 
  '; 
 if ($row3['hangers'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="hangers">Hangers</label>
</div>
        <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="washer" value="1"
  '; 
 if ($row3['washer'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="washer">Washer</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="iron" value="1"
  '; 
 if ($row3['iron'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="iron">Iron</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="events" value="1" 
  '; 
 if ($row3['events'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="events">Events Allowed</label>
</div>
      <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="laptop" value="1"
  '; 
 if ($row3['laptop'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="laptop">Laptop Friendly Workspace</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="smoking" value="1"
  '; 
 if ($row3['smoking'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="smoking">Smoking Allowed</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="420" value="1"
  '; 
 if ($row3['420_friendly'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="420">420 Allowed</label>
</div></div> <div class="col-3">
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="hair-dryer" value="1" 
  '; 
 if ($row3['hair_dryer'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="hair-dryer">Hair Dryer</label>
</div>
      <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="fireplace" value="1"
  '; 
 if ($row3['fireplace'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="fireplace">Indoor Fireplace</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="essentials" value="1"
  '; 
 if ($row3['essential'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="essentials">Essentials</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="paid-parking" value="1" 
  '; 
 if ($row3['paid_parking'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="paid-parking">Paid Parking</label>
</div>
          <div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="free-street-parking" value="1"
  '; 
 if ($row3['free_street_parking'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="free-street-parking">Free Street Parking</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="private-entrance" value="1"
  '; 
 if ($row3['private_entrance'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="private-entrance">Private Entrance</label>
</div>
<div class="form-check form-check">
  <input class="form-check-input" type="checkbox" id="doorman" value="1" 
  '; 
 if ($row3['doorman'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="doorman">Doorman</label>
</div>
    
   
   
   
    
    
    
    </div>
    
    
    
    
    
    
     
    
    
    
    
    
    
    <button type="submit" class="text-white mb-5 btn btn-send" name="edit-bnb-submit">Update</button>
   
    
    
    
    

  </div>
                    
                                                
                                                
                                                
                                                
                                                
                                                
        </div></div>      </div>                                            
                                              
    </form>
    <div class="col-2 float-left">
    
    <p class="text-center">
    Main Photo:
    </p>';
    if (!empty($row3['listing_main_photo'])){
     echo '
     <img class="col-12" alt="" src="bnbs/photos/' . $row3["listing_main_photo"] . '">';
    }
    echo '
      <form action="includes/upload.bnb2.main.inc.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <button type="submit" class="btn btn-send col-3 px-1 text-white float-left" name="submit">Upload</button>
        </form> 
    
    <br><br>
      <p class="text-center">
    Gallery Photo1:
    </p>
    ';
      if (!empty($row3['listing_photo1'])){
     echo '
     <img class="col-12" alt="" src="bnbs/photos/' . $row3["listing_photo1"] . '">';
    }
    echo '
    
    
      <form action="includes/upload.bnb2.1.inc.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <button type="submit" class="btn btn-send col-3 px-1 text-white float-left" name="submit">Upload</button>
        </form> 
    
    
    
    <br><br>
      <p class="text-center">
    Gallery Photo2:
    </p>
     ';
      if (!empty($row3['listing_photo2'])){
     echo '
     <img class="col-12" alt="" src="bnbs/photos/' . $row3["listing_photo2"] . '">';
    }
    echo '
    
    
    
      <form action="includes/upload.bnb2.2.inc.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <button type="submit" class="btn btn-send col-3 px-1 text-white float-left" name="submit">Upload</button>
        </form> 
    
    
    
    
    
    
    
     <br><br>
      <p class="text-center">
    Gallery Photo3:
    </p>
     ';
      if (!empty($row3['listing_photo3'])){
     echo '
     <img class="col-12" alt="" src="bnbs/photos/' . $row3["listing_photo3"] . '">';
    }
    echo '
    
    
    
      <form action="includes/upload.bnb2.3.inc.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <button type="submit" class="btn btn-send col-3 px-1 text-white float-left" name="submit">Upload</button>
        </form> 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
      <br><br>
      <p class="text-center">
    Gallery Photo4:
    </p>
    ';
      if (!empty($row3['listing_photo4'])){
     echo '
     <img class="col-12" alt="" src="bnbs/photos/' . $row3["listing_photo4"] . '">';
    }
    echo '
    
    
      <form action="includes/upload.bnb2.4.inc.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <button type="submit" class="btn btn-send col-3 px-1 text-white float-left" name="submit">Upload</button>
        </form> 
    
    
    
    <br><br>
      <p class="text-center">
    Gallery Photo5:
    </p>
     ';
      if (!empty($row3['listing_photo5'])){
     echo '
     <img class="col-12" alt="" src="bnbs/photos/' . $row3["listing_photo5"] . '">';
    }
    echo '
    
    
    
      <form action="includes/upload.bnb2.5.inc.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <button type="submit" class="btn btn-send col-3 px-1 text-white float-left" name="submit">Upload</button>
        </form> 
    
    
    
    
    
    
    
     <br><br>
      <p class="text-center">
    Gallery Photo6:
    </p>
     ';
      if (!empty($row3['listing_photo6'])){
     echo '
     <img class="col-12" alt="" src="bnbs/photos/' . $row3["listing_photo6"] . '">';
    }
    echo '
    
    
    
      <form action="includes/upload.bnb2.6.inc.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <button type="submit" class="btn btn-send col-3 px-1 text-white float-left" name="submit">Upload</button>
        </form> 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
      <br><br>
      <p class="text-center">
    Gallery Photo7:
    </p>
    ';
      if (!empty($row3['listing_photo7'])){
     echo '
     <img class="col-12" alt="" src="bnbs/photos/' . $row3["listing_photo7"] . '">';
    }
    echo '
    
    
      <form action="includes/upload.bnb2.7.inc.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <button type="submit" class="btn btn-send col-3 px-1 text-white float-left" name="submit">Upload</button>
        </form> 
    
    
    
    <br><br>
      <p class="text-center">
    Gallery Photo8:
    </p>
     ';
      if (!empty($row3['listing_photo8'])){
     echo '
     <img class="col-12" alt="" src="bnbs/photos/' . $row3["listing_photo8"] . '">';
    }
    echo '
    
    
    
      <form action="includes/upload.bnb2.8.inc.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <button type="submit" class="btn btn-send col-3 px-1 text-white float-left" name="submit">Upload</button>
        </form> 
    
    
    
    
    
    
    
     <br><br>
      <p class="text-center">
    Gallery Photo9:
    </p>
     ';
      if (!empty($row3['listing_photo9'])){
     echo '
     <img class="col-12" alt="" src="bnbs/photos/' . $row3["listing_photo9"] . '">';
    }
    echo '
    
    
    
      <form action="includes/upload.bnb2.9.inc.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <button type="submit" class="btn btn-send col-3 px-1 text-white float-left" name="submit">Upload</button>
        </form> 
    
    
    
    
    
    
    
      
     <br><br>
      <p class="text-center">
    Gallery Photo10:
    </p>
     ';
      if (!empty($row3['listing_photo10'])){
     echo '
     <img class="col-12" alt="" src="bnbs/photos/' . $row3["listing_photo10"] . '">';
    }
    echo '
    
    
    
      <form action="includes/upload.bnb2.10.inc.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <button type="submit" class="btn btn-send col-3 px-1 text-white float-left" name="submit">Upload</button>
        </form> 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </div></div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ';}

    
    
    else {
        echo '
        
        
        
        
        
        
        
        <div class="container">
    <div class="p-5 row col-12">
    <h1 class="col-12" style="text-align: center; !important">
   This listing is in your trash. You must restore it, in order to continue.
    </h1>
    </div>
    <div class="row">
    <div class="col-5">
    </div>
    
    
    
    
    
    
     <form class="form float-right col-1" action="includes/undel.bnb.inc.php" method="post">
                                        <input type="hidden" name="undelete" value="' . $row['id']. '">
                                     <button  type="submit" class="btn btn-warning text-white  " name="undelete-submit">Undelete

</button>
                           </form>
    
    
    
    
     <button class="btn btn-success col-1 float-left"  onclick="goBack()">Go Back</button>


        
        
        
        
        
        
        
        
        
        
        
        
        ';
        
    }
    
    
    
    
    
    
    
    ?>
    
    
    
    
</div>
</div>
</div>
<div class="p-5 row">
</div>
</main> 
<?php
include_once 'includes/footer-none.php';
?>