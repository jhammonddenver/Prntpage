<div class="row justify-content-center">

           <div class="col-12">

                             
                            
                    <div class="card-deck"> 
                             
                             
                             
                             
                             <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="vehicles-sale.php">
  <img class="card-img" src="images/catalog/car-3.png" alt="">
  <div class="card-link">
   
    
    For Sale</a>
  </div>
</div>
              
              
                          <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="vehicles-rent.php">
  <img class="card-img" src="images/catalog/car-2.png" alt="">
  <div class="card-link">
   
    
    For Rent</a>
  </div>
</div>               
                           
                           
                         
                
                
               
                               <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="directions.php">
  <img class="card-img" src="images/catalog/car-1.png" alt="">
  <div class="card-link">
   
    
    Directions</a>
  </div>
</div> 
                                
                        <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="long-rideshares.php">
  <img class="card-img" src="images/catalog/car-4.png" alt="">
  <div class="card-link">
   
    
    <a href="long-rideshares.php">Rides - Long Distance</a>
  </div>
</div>                      
                      <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="short-rideshares.php">
  <img class="card-img" src="images/catalog/pp-3.png" alt="">
  <div class="card-link">
   
    
    Rides - Short Distance</a>
   </div>
</div>  
</div> 
 </div>      
 
 <div class="row col-12 justify-content-center">
    
    
    <h2 class="page__title text-center">Newest Transportation for Sale</h2>
     <div class="row catalog-list">
                            <div class="row col-12 ">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM transport WHERE cat='Vehicles for Sale' ORDER BY `created` DESC LIMIT 3";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        echo "
       <div class='  catalog-list properties-catalog'> 


 <div class='catalog-item '>
           <div class='col-12 col-md-3 product d-flex flex-column flex-md-row flex-wrap flex-md-nowrap flex-xl-nowrap flex-lg-wrap'>

<div class='d-flex flex-wrap flex-md-nowrap col-12 float-left'>
                                                  
                                        <div class='float-left product-prev col-12 '>  
                                             
                                                          <a class='col-2 btn btn-link'  href='transport-listing.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                               
                                                         
                                                         
                                                         
                                          
                                               <a href='transport-listing.php?id=".$row2["id"]."
                                                
                                                ' >
                                                   
                                                     <br><p>  <img alt='' style='width:250px; height:180px;' class='rounded img-fluid'  src='transport/photos/" . $row2["main_pic"] . "'>
                                                          </a></p> <p>" . $row2["add2"]. " <br>
                                                         " . $row2["city"]. ", " . $row2["state"]. " " . $row2["zip"]. " <br>
                                                         
                                                     " . $row2["price"]. " 
                                                         
                                                         
                                                         
                                                         

                                                    

                                                    

                                                    <div class='product-settings'>
                                                        
                                                    </div>
                                                      
                                                </div>
                                            
 </div> </div>
                                     </div> </div>                                 
                                   
 
     ";
    }}
     ?>
     
     
     
     
     
     
       <div class="col-12 col-sm catalog-item catalog-item_more">
                                <a href="vehicles-sale-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
    
     
     
     
     
     
     
     <div class="row col-12 justify-content-center">
    
    
    <h2 class="page__title text-center">Top Rated Rentals</h2>
     <div class=" catalog-list">
                            <div class="row col-12 pl-2 ml-2">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM transport WHERE cat='Vehicles For Rent' ORDER BY `created` DESC LIMIT 3";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        echo "
       <div class='  catalog-list properties-catalog'> 


 <div class='catalog-item '>
           <div class='col-12 col-md-3 product d-flex flex-column flex-md-row flex-wrap flex-md-nowrap flex-xl-nowrap flex-lg-wrap'>

<div class='d-flex flex-wrap flex-md-nowrap col-12 float-left'>
                                                  
                                        <div class='float-left product-prev col-12 '>  
                                             
                                                          <a class='col-2 btn btn-link'  href='transport-listing.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                                <a  class='col-2 float-left btn btn-link' href='mailto:". $row2["contact_email"] . "'>Contact</a>
                                                         
                                                         
                                                         
                                          
                                               <a href='transport-listing.php?id=".$row2["id"]."
                                                
                                                ' >
                                                   
                                                     <br><p>  <img alt='' style='width:250px; height:180px;' class='rounded img-fluid'  src='transport/photos/" . $row2["main_pic"] . "'>
                                                          </a></p> <p>" . $row2["add2"]. " <br>
                                                         " . $row2["city"]. ", " . $row2["state"]. " " . $row2["zip"]. " <br>
                                                         
                                                     " . $row2["price"]. "
                                                         
                                                         
                                                         
                                                         

                                                    

                                                    

                                                    <div class='product-settings'>
                                                        
                                                    </div>
                                                      
                                                </div>
                                            
 </div> </div>
                                     </div> </div>                                 
                                   
 
     ";
    }}
     ?>
     
     
    
    <div class="col-12 col-sm catalog-item catalog-item_more">
                                <a href="vehicles-rent-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
    
     
     
     
     
     
     
         
    <div class="row col-12 justify-content-center">
    
    
    <h2 class="page__title text-center col-12">Long Distance Rides Near You</h2><br>
     <div class=" catalog-list">
                            <div class="row col-12 ">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM transport WHERE cat='Rideshare' AND distance='Long' ORDER BY `created` DESC LIMIT 3";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        echo "
       <div class='  catalog-list properties-catalog'> 


 <div class='catalog-item '>
           <div class='col-md-3 col-12 product d-flex flex-column flex-md-row flex-wrap flex-md-nowrap flex-xl-nowrap flex-lg-wrap'>

<div class='d-flex flex-wrap flex-md-nowrap col-12 float-left'>
                                                  
                                        <div class='float-left product-prev col-12 '>  
                                             
                                                          <a class='col-2 btn btn-link'  href='pet.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                                <a  class='col-2 float-left btn btn-link' href='mailto:". $row2["contact_email"] . "'>Contact</a>
                                                         
                                                         
                                                         
                                          
                                               <a href='pet.php?id=".$row2["id"]."
                                                
                                                ' >
                                                   
                                                     <br><p>  <img alt='' style='width:250px; height:180px;' class='rounded img-fluid'  src='pets/photos/" . $row2["main_pic"] . "'>
                                                          </a></p> <p>" . $row2["add2"]. " <br>
                                                         " . $row2["city"]. ", " . $row2["state"]. " " . $row2["zip"]. " <br>
                                                         
                                                     " . $row2["price"]. "
                                                         
                                                         
                                                         
                                                         

                                                    

                                                    

                                                    <div class='product-settings'>
                                                      
                                                    </div>
                                                      
                                                </div>
                                            
 </div> </div>
                                     </div> </div>                                 
                                   
 
     ";
    }}
     ?>
     
       <div class="col-12 col-sm catalog-item catalog-item_more">
                                <a href="rideshares-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
    
    
</div> </div></div>
</div></div> </div></div>
</div></div> </div>