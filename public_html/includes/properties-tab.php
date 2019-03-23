<?php
 require 'db_connect.php';
?>



<div class="col-12 content-justify-center">

                               
                            
                    <div class="card-deck ml-2">        
                            
                     <div class="card col-sm-6 col-md-4 col-lg-4 text-center mx-auto"><a href="long-term-rentals.php">
  <img class="card-img" src="images/catalog/rent.jpg" alt="">
  <div class="card-link">
   
    
    Long Term Rentals</a>
  </div>
</div>
           <div class="card col-sm-6 col-md-4 col-lg-4 text-center mx-auto">    <a href="real-estate.php">                    
         <img class="card-img" src="images/catalog/real-estate.jpg" alt="">
  <div class="card-link">
   
    
    Real Estate</a>
  </div>
</div>                               
                                    
 
         <div class="card col-sm-6 col-md-4 col-lg-4 text-center mx-auto">      <a href="roommates.php">                   
  <img class="card-img" src="images/catalog/roommates.jpg" alt="">
  <div class="card-link">
   
    
    <a href="roommates.php">Roommates</a>
  </div>
</div>  
</div>

<div class="row col-12 justify-content-center">
    
    
    <h2 class="page__title text-center">Latest Properties</h2>
     <div class="row catalog-list">
                            <div class="row col-12 ">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM homes ORDER BY `listing_created` DESC LIMIT 3";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        echo "
       <div class='  catalog-list properties-catalog'> 


 <div class='catalog-item '>
           <div class='col-12 col-md-3 product d-flex flex-column flex-md-row flex-wrap flex-md-nowrap flex-xl-nowrap flex-lg-wrap'>

<div class='d-flex flex-wrap flex-md-nowrap col-12 float-left'>
                                                  
                                        <div class='product-prev col-12 '>  
                                             
                                                          <a class='col-6 col-md-2 float-left  btn btn-link'  href='listing.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                                <a  class='col-6 float-left btn btn-link' href='mailto:". $row2["listing_contact_email"] . "'>Contact</a>
                                                         
                                                         
                                                         
                                          
                                               <a href='listing.php?id=".$row2["id"]."
                                                
                                                ' >
                                                   
                                                     <br><p>  <img alt='' style='width:250px; height:180px;' class='rounded img-fluid'  src='properties/photos/" . $row2["listing_main_photo"] . "'>
                                                          </a></p> <p>" . $row2["listing_add2"]. " <br>
                                                         " . $row2["listing_city"]. ", " . $row2["listing_state"]. " " . $row2["listing_zip"]. " <br>
                                                         
                                                     " . $row2["listing_monthly"]. "" . $row2["listing_purchase"]. "  
                                                         
                                                         
                                                         
                                                         

                                                    

                                                    

                                                    <div class='product-settings'>
                                                        <ul class='product-settings__list d-flex content-align-center'>
                                                            <li class='product-settings__item'>
                                                                <span>
                                                                
                                                                " . $row2["listing_bedrooms"]. "
                                                                
                                                                </span>
                                                                bd

                                                                <i class='ico-bd'></i>
                                                            </li>

                                                            <li class='product-settings__item'>
                                                                <span>
                                                                
                                                                " . $row2["listing_bathrooms"]. "
                                                                
                                                                </span>
                                                                ba

                                                                <i class='ico-ba'></i>
                                                            </li>

                                                            
                                                        </ul>
                                                    </div>
                                                      
                                                </div>
                                            
 </div> </div>
                                     </div> </div>                                 
                                   
 
     ";
    }}
     ?>
     
     
     
     
     
     
       <div class="col-12 col-sm-3 catalog-item catalog-item_more">
                                <a href="properties-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
    
     
     
     
     
     
     
     <div class="row col-12 justify-content-center">
    
    
    <h2 class="page__title text-center">Properties Near You</h2>
     <div class=" catalog-list">
                            <div class="row col-12 ">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM homes ORDER BY `listing_created` DESC LIMIT 3";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        echo "
       <div class='  catalog-list properties-catalog'> 


 <div class='catalog-item '>
            <div class='col-12 col-md-3 product d-flex flex-column flex-md-row flex-wrap flex-md-nowrap flex-xl-nowrap flex-lg-wrap'>

<div class='d-flex flex-wrap flex-md-nowrap col-12 float-left'>
                                                  
                                        <div class=' product-prev col-12 '>  
                                             
                                                          <a class='float-left col-6 col-md-2 btn btn-link'  href='listing.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                                <a  class='col-6 col-md-2 float-left btn btn-link' href='mailto:". $row2["listing_contact_email"] . "'>Contact</a>
                                                         
                                                         
                                                         
                                          
                                               <a href='listing.php?id=".$row2["id"]."
                                                
                                                ' >
                                                   
                                                     <br><p>  <img alt='' style='width:250px; height:180px;' class='rounded img-fluid'  src='properties/photos/" . $row2["listing_main_photo"] . "'>
                                                          </a></p> <p>" . $row2["listing_add2"]. " <br>
                                                         " . $row2["listing_city"]. ", " . $row2["listing_state"]. " " . $row2["listing_zip"]. " <br>
                                                         
                                                     " . $row2["listing_monthly"]. "" . $row2["listing_purchase"]. "  
                                                         
                                                         
                                                         
                                                         

                                                    

                                                    

                                                    <div class='product-settings'>
                                                        <ul class='product-settings__list d-flex content-align-center'>
                                                            <li class='product-settings__item'>
                                                                <span>
                                                                
                                                                " . $row2["listing_bedrooms"]. "
                                                                
                                                                </span>
                                                                bd

                                                                <i class='ico-bd'></i>
                                                            </li>

                                                            <li class='product-settings__item'>
                                                                <span>
                                                                
                                                                " . $row2["listing_bathrooms"]. "
                                                                
                                                                </span>
                                                                ba

                                                                <i class='ico-ba'></i>
                                                            </li>

                                                            
                                                        </ul>
                                                    </div>
                                                      
                                                </div>
                                            
 </div> </div>
                                     </div> </div>                                 
                                   
 
     ";
    }}
     ?>
     
     
    
    <div class="col-12 col-sm-3 catalog-item catalog-item_more">
                                <a href="properties-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
    
     
     
     
     
     
     
         
    <div class="row col-12 justify-content-center">
    
    
    <h2 class="page__title text-center">Top Rated Properties</h2>
     <div class=" catalog-list"></div>
                            <div class="row col-12">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM homes ORDER BY `listing_created` DESC LIMIT 3";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        echo "
       <div class='  catalog-list properties-catalog'> 


 <div class='catalog-item '>
           <div class='col-3 product d-flex flex-column flex-md-row flex-wrap flex-md-nowrap flex-xl-nowrap flex-lg-wrap'>

<div class='d-flex flex-wrap flex-md-nowrap float-left'>
                                                  
                                        <div class=' product-prev '>  
                                             
                                                          <a class='col-2 btn btn-link float-left'  href='listing.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                                <a  class='col-2 float-left btn btn-link' href='mailto:". $row2["listing_contact_email"] . "'>Contact</a>
                                                         
                                                         
                                                         
                                          
                                               <a href='listing.php?id=".$row2["id"]."
                                                
                                                ' >
                                                   
                                                     <br><p>  <img alt='' style='width:250px; height:180px;' class='rounded img-fluid'  src='properties/photos/" . $row2["listing_main_photo"] . "'>
                                                          </a></p> <p>" . $row2["listing_add2"]. " <br>
                                                         " . $row2["listing_city"]. ", " . $row2["listing_state"]. " " . $row2["listing_zip"]. " <br>
                                                         
                                                     " . $row2["listing_monthly"]. "" . $row2["listing_purchase"]. "  
                                                         
                                                         
                                                         
                                                         

                                                    

                                                    

                                                    <div class='product-settings'>
                                                        <ul class='product-settings__list d-flex content-align-center'>
                                                            <li class='product-settings__item'>
                                                                <span>
                                                                
                                                                " . $row2["listing_bedrooms"]. "
                                                                
                                                                </span>
                                                                bd

                                                                <i class='ico-bd'></i>
                                                            </li>

                                                            <li class='product-settings__item'>
                                                                <span>
                                                                
                                                                " . $row2["listing_bathrooms"]. "
                                                                
                                                                </span>
                                                                ba

                                                                <i class='ico-ba'></i>
                                                            </li>

                                                            
                                                        </ul>
                                                    </div>
                                                      
                                                </div>
                                            
 </div> </div>
                                     </div> </div>                                 
                                   
 
     ";
    }
    echo'
    <div class="col-12 col-md-3 float-left catalog-item catalog-item_more">
                                <a href="properties-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
';}
     ?>
     
       
    
   
    
    
    
</div> </div></div>
</div></div> </div></div></div> </div>
  
                      