 <div class="row justify-content-center"> 
          
        
              
  



 <div class="col-12">
                                
 
                      <div class="card-deck"> 
                
                 <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="home-cooked-map.php">
  <img class="card-img" src="images/catalog/cooking.jpg" alt="">
  <div class="card-link">
   
    
    Home Cooked</a>
  </div>
</div>
                
                             
                
                
                         <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="restaurant-map.php">
  <img class="card-img" src="images/catalog/delivery2.jpg" alt="">
  <div class="card-link">
   
    
    Restaurant</a>
  </div>
</div>



              
</div> 
 </div>      

 <div class="row col-12 justify-content-center">
    
    
    <h2 class="page__title text-center">Newest Restaurants</h2>
     <div class=" catalog-list">
                            <div class="row col-12 ">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM food WHERE cat='Restaurant' ORDER BY `created` DESC LIMIT 3";
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
                                             
                                                          <a class='col-2 btn btn-link'  href='food-listing.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                                <a  class='col-2 float-left btn btn-link' href='mailto:". $row2["contact_email"] . "'>Contact</a>
                                                         
                                                         
                                                         
                                          
                                               <a href='food-listing.php?id=".$row2["id"]."
                                                
                                                ' >
                                                   
                                                     <br><p>  <img alt='' style='width:250px; height:180px;' class='rounded img-fluid'  src='food/photos/" . $row2["main_pic"] . "'>
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
                                <a href="restaurants-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
    
     
     
     
     
     
     
     <div class="row col-12 justify-content-center">
    
    
    <h2 class="page__title text-center">Restaurants Near You</h2>
     <div class=" catalog-list">
                            <div class="row col-12 pl-2 ml-2">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM food WHERE cat='Restaurant' ORDER BY `created` DESC LIMIT 3";
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
                                             
                                                          <a class='col-2 btn btn-link'  href='food-listing.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                                <a  class='col-2 float-left btn btn-link' href='mailto:". $row2["contact_email"] . "'>Contact</a>
                                                         
                                                         
                                                         
                                          
                                               <a href='food-listing.php?id=".$row2["id"]."
                                                
                                                ' >
                                                   
                                                     <br><p>  <img alt='' style='width:250px; height:180px;' class='rounded img-fluid'  src='food/photos/" . $row2["main_pic"] . "'>
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
                                <a href="restaurants-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
    
     
     
     
     
     
     
         
    <div class="row col-12 justify-content-center">
    
    
    <h2 class="page__title text-center">Top Rated Restaurants</h2><br>
     <div class=" catalog-list">
                            <div class="row col-12 ">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM food WHERE cat='Restaurant' ORDER BY `created` DESC LIMIT 3";
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
                                             
                                                          <a class='col-2 btn btn-link'  href='food-listing.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                                <a  class='col-2 float-left btn btn-link' href='mailto:". $row2["contact_email"] . "'>Contact</a>
                                                         
                                                         
                                                         
                                          
                                               <a href='food-listing.php?id=".$row2["id"]."
                                                
                                                ' >
                                                   
                                                     <br><p>  <img alt='' style='width:250px; height:180px;' class='rounded img-fluid'  src='food/photos/" . $row2["main_pic"] . "'>
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
                                <a href="restaurants-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
    
    <div class="row col-12 justify-content-center ml-2">
    
    
    <h2 class="page__title text-center">Home Cooked</h2><br>
     <div class=" catalog-list">
                            <div class="row col-12 ">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM food WHERE cat='Home Cooked' ORDER BY `created` DESC LIMIT 3";
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
                                             
                                                          <a class='col-2 btn btn-link'  href='food-listing.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                                <a  class='col-2 float-left btn btn-link' href='mailto:". $row2["contact_email"] . "'>Contact</a>
                                                         
                                                         
                                                         
                                          
                                               <a href='food-listing.php?id=".$row2["id"]."
                                                
                                                ' >
                                                   
                                                     <br><p>  <img alt='' style='width:250px; height:180px;' class='rounded img-fluid'  src='food/photos/" . $row2["main_pic"] . "'>
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
                                <a href="home-cooked-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
                            
                            
                            
                            
     
     <div class="row col-12 justify-content-center ml-2">
    
    
    <h2 class="page__title text-center col-12">Delivery Near You</h2>
     <div class=" catalog-list">
                            <div class="row col-12 pl-2 ml-2">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM food WHERE delivery='yes' ORDER BY `created` DESC LIMIT 3";
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
                                             
                                                          <a class='col-2 btn btn-link'  href='food-listing.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                                <a  class='col-2 float-left btn btn-link' href='mailto:". $row2["contact_email"] . "'>Contact</a>
                                                         
                                                         
                                                         
                                          
                                               <a href='food-listing.php?id=".$row2["id"]."
                                                
                                                ' >
                                                   
                                                     <br><p>  <img alt='' style='width:250px; height:180px;' class='rounded img-fluid'  src='food/photos/" . $row2["main_pic"] . "'>
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
                                <a href="home-cooked-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
    
</div> </div></div>
</div></div> </div></div>
</div></div> </div></div></div></div></div></div></div>