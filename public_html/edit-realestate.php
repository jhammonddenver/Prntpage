
<?php
 session_start();
include_once 'includes/header.php';
 $userid = $_SESSION['id']; 

$id = $_GET['id'];
$_SESSION['lid'] = $_GET['id'];
$sql3 = "SELECT * FROM homes WHERE id='$id'";

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
       
       
       
       
       
       
       
          
        <form class="form float-left  " action="includes/unpub.realestate.inc.php" method="post">
                                        <input type="hidden" name="unpublish" value="' . $row3['id']. '">
                                  <button class="btn btn-warning text-white  float-left" type="submit" name="unpublish-submit">Unpublish</button></form>
       
 
       
      
       '; 
    }
     if ($published == '1'){
       echo'
       
        <form class="form float-left " action="includes/pub.realestate.inc.php" method="post">
                                        <input type="hidden" name="publish" value="' . $row3['id']. '">
                                   <button class="btn btn-send text-white float-left" type="submit" name="publish-submit">Publish</button>
                           </form>
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       '; 
    }
    echo'
    
    
    
    
    
     <form class="form float-left ml-2 " action="includes/del.realestate.inc.php" method="post">
                                        <input type="hidden" name="deleted" value="' . $row3['id']. '">
                                     <button style="width:30px; height:35px" type="submit" class="btn  p-1 m-1 " name="delete-submit"><i class="ico-remove"></i>
</button>
                           </form>
    
    
    
    
    
    
    
    </div>
    
    <div class=" col-8 float-left">
    
    
    
   <form class="form " action="includes/edit.realestate.inc.php" method="post">
    
      
    
    
    
    
      <div class="form-group">
     <label class="label">Type:</label><br>
    
    <select class="form-control custom-select" name="housing_type" aria-describedby="mutedField1">
                                                            <option selected>'.$row3['type'].'</option>
                                                            <option value="Condo">Condo</option>
                                                            <option value="Townhouse">Townhouse</option>
                                                            <option value="Multifamily">Multifamily</option>
                                                            <option value="Maisonette">Maisonette</option>
                                                            <option value="Cottage">Cottage</option>
                                                            <option value="House">House</option>
                                                            <option value="Farm">Farm</option>
                                                            <option value="Ranch">Ranch</option>
                                                            <option value="Mansion">Mansion</option>
                                                            <option value="Castel">Castel</option>
                                                            <option value="Villa">Villa</option>
                                                            <option value="Penthouse">Penthouse</option>
Building</option>
                                                            <option value="Commercial">Commercial</option>
                                                            
                                                          <option value="Other">Other</option>     
                                                            
                                                        </select> 
    
    
    
    
    
    </div>
    
    
      <div class="form-group">
          
          
        
          
    
     <label class="label">Title:</label><br>
    <input type="text" name="housing_title" value="'.$row3['name'].'" class="form-control" placeholder="Listing Title" ></div> 
    
    
    
    
   
    
    
    <div class="form-group">
     <label class="label">Description:</label><br>
     <textarea class="form-control" id="field-9" name="housing_disc"  >'.$row3['listing_description'].'</textarea>
     </div>
    
   
    
    <div class="form-group">
    <label class="label">Cost:</label><br>
    <input type="text" name="housing_purchase" value="'.$row3['listing_purchase'].'"class="form-control" placeholder="Enter Amount">
    </div> 
    
   
    
   
    
    <div class="form-group">
        
        
        
         <label class="label">Bedrooms:</label><br>
    
    
    <input type="text" name="housing_bedrooms" value="'.$row3['listing_bedrooms'].'" class="form-control" placeholder="Enter Amount" >
    
         
            </div> 
    
    <div class="form-group">
     <label class="label">Bathrooms:</label><br>
    
    <input type="text" name="housing_bathrooms" value="'.$row3['listing_bathrooms'].'" class="form-control" placeholder="Enter Amount" >
    
            </div> 
    
    <div class="form-group">
        <label class="label">Contact Email: (optional)</label><br>
    <input type="email" name="housing_contact_email" value="'.$row3['listing_contact_email'].'" class="form-control" placeholder="Contact Email" >
    
            </div> 
    <label class="label">Contact Phone: (optional)</label><br>
    <div class="form-group">
    <input type="text" name="housing_contact_phone" value="'.$row3['listing_contact_phone'].'" class="form-control" placeholder="Contact Phone" >
   
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
      <input type="text" class="form-control" name="housing_size" value="'.$row3['size'].'" placeholder="Enter Amount">
    </div>
    <div class="form-group col-md-6">
      <label class="label">Measurement</label>
      
      
      <select class="form-control custom-select" name="housing_measurement" aria-describedby="mutedField1">
                                                            <option selected>'.$row3['measurement'].'</option>
                                                             <option value="Acres">Acres</option>
      
                                                            <option value="Square Feet">Square Feet</option>
                                                            <option value="Square Meters">Square Meters</option>
     
      </select>
      
      
      
      
    </div>
  </div>
    
    
    
    
     <p>Amenities:</p>
    
    
    <div class="col-12 row">

    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="dogs" value="dogs"
   '; 
 if ($row3['dogs'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="dogs">Dogs Allowed</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="cats" value="cats"
   '; 
 if ($row3['cats'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="cats">Cats Allowed</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="other-pets" value="other-pets" 
   '; 
 if ($row3['pets'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="other-pets">Other Pets Allowed</label>
</div>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="heat" value="heat"
   '; 
 if ($row3['heating'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="heat">Heat Included</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="water" value="water"
   '; 
 if ($row3['water'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="water">Water Included</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="utilities" value="utilities" 
   '; 
 if ($row3['utilities'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="utilities">Utilities Included</label>
</div>
       <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="smoker" value="smoker"
   '; 
 if ($row3['smoking'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="smoker">Smoker Friendly</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="420" value="420"
   '; 
 if ($row3['420_friendly'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="420">420 Friendly</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="washer-dryer-unit" value="washer-dryer-unit" 
   '; 
 if ($row3['wd_unit'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="washer-dryer-unit">Washer/Dryer in Unit</label>
</div>
       <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="washer-dryer-building" value="washer-dryer-building"
   '; 
 if ($row3['wd_building'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="washer-dryer-building">Washer/Dryer in Building</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="parking" value="parking"
   '; 
 if ($row3['parking_space'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="parking">Parking Space</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="paid-parking" value="paid-parking" 
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
          <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="yard" value="yard"
   '; 
 if ($row3['yard'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="yard">Yard</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="water-front" value="water-front"
   '; 
 if ($row3['water_front'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="water-front">Water Front</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="scenic-view" value="scenic-view" 
   '; 
 if ($row3['scenic'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="scenic-view">Scenic View</label>
</div>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="owner" value="owner"
   '; 
 if ($row3['owner'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="owner">Direct from Owner</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="doorman" value="doorman"
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
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="no-app-fee" value="no-app-fee" 
   '; 
 if ($row3['no_app'] == '1')
 {
 echo' 
 checked >';
 } else {
     echo'
 
  >';}
  echo '
  <label class="form-check-label" for="no-app-fee">No Application Fee</label>
</div>
   
   
   
    
    
    
    </div>
    
    
    
    
    
    
     
    
    
    
    
    
    
    <button type="submit" class="btn btn-send mb-5" name="housing-submit">Submit</button>
   
    
    
    
    

  </div>
                    
                                                
                                                
                                                
                                                
                                                
                                                
        </div></div>      </div>                                            
                                              
    </form>
    <div class="col-2 float-left">
    
    <p class="text-center">
    Main Photo:
    </p>';
    if (!empty($row3['listing_main_photo'])){
     echo '
     <img class="col-12" alt="" src="properties/photos/' . $row3["listing_main_photo"] . '">';
    }
    echo '
      <form action="includes/upload.realestate.main.inc.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <button type="submit" class="btn btn-send col-3 px-1 text-white float-left" name="submit">Upload</button>
        </form> 
    
    <br><br>
      <a href="real-estate-gallery.php?id='.$id.'" class="text-center">
    Gallery Photos
    </a>
   
   
   
   
    
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
    
    
    
    
    
    
     <form class="form float-right col-1" action="includes/undel.realestate.inc.php" method="post">
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