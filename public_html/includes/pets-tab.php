 <div class="row justify-content-center">                
                    
                   
    
   
                          
                           
                             <div class="col-12">
                             
                      
                        <div class="card-deck">  
                           <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="birds-map.php">
  <img class="card-img" src="images/catalog/birds.jpg" alt="">
  <div class="card-link">
   
    
    Birds</a>
  </div>
</div>
 <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="cattle-map.php">
  <img class="card-img" src="images/catalog/cattle.jpg" alt="">
  <div class="card-link">
   
    
    Cattle</a>
  </div>
</div>
                                    
                            <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="cats-map.php">
  <img class="card-img" src="images/catalog/cats.jpg" alt="">
  <div class="card-link">
   
    
    Cats</a>
  </div>
</div>                           
         
         
         
                               <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="dogs-map.php">
  <img class="card-img" src="images/catalog/dogs.jpg" alt="">
  <div class="card-link">
   
    
    <a href="dogs.php">Dogs</a>
  </div>
</div>                             
                                 
                 <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="farm-animals-map.php">
  <img class="card-img" src="images/catalog/horse.jpg" alt="">
  <div class="card-link">
   
    
    Farm Animals</a>
  </div>
</div>
</div>
<div class="row justify-content-center">   
             <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="fish-map.php">
  <img class="card-img" src="images/catalog/fish.jpg" alt="">
  <div class="card-link">
   
    
    Fish</a>
  </div>
</div>
          
           <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="exotic-animals-map.php">
  <img class="card-img" src="images/catalog/exotic-animals.jpg" alt="">
  <div class="card-link">
   
    
    Exotic Animals</a>
  </div>
</div>
 <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="horses-map.php">
  <img class="card-img" src="images/catalog/horse.jpg" alt="">
  <div class="card-link">
   
    
    Horses</a>
  </div>
</div> 
  <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="other-animals-map.php">
  <img class="card-img" src="images/catalog/other-pets.jpg" alt="">
  <div class="card-link">
   
    
    Other Animals</a>
   </div>
</div>  

</div> 
 </div>      
 <div class="row col-12 justify-content-center">
    
    
    <h2 class="page__title text-center">Latest Pets</h2>
     <div class=" catalog-list">
                            <div class="row col-12 ">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM pets ORDER BY `created` DESC LIMIT 3";
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
                                <a href="pets-livestock-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
    
     
     
     
     
     
     
     <div class="row col-12 justify-content-center">
    
    
    <h2 class="page__title text-center">Pets Near You</h2>
     <div class=" catalog-list">
                            <div class="row col-12">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM pets ORDER BY `created` DESC LIMIT 3";
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
                                <a href="pets-livestock-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
    
     
     
     
     
     
     
         
    <div class="row col-12 justify-content-center">
    
    
    <h2 class="page__title text-center">Latest Dogs</h2><br>
     <div class=" catalog-list">
                            <div class="row col-12 ">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM pets WHERE type='Dog' ORDER BY `created` DESC LIMIT 3";
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
                                <a href="dogs-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
    
    <div class="row col-12 justify-content-center ml-2">
    
    
    <h2 class="page__title text-center">Latest Cats</h2><br>
     <div class=" catalog-list">
                            <div class="row col-12 ">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM pets WHERE type='Cat' ORDER BY `created` DESC LIMIT 3";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        echo "
       <div class='  catalog-list properties-catalog'> 


 <div class='catalog-item '>
           <div class='col-md-3 col-12 product d-flex flex-column flex-md-row flex-wrap flex-md-nowrap flex-xl-nowrap flex-lg-wrap '>

<div class='d-flex flex-wrap flex-md-nowrap col-12 float-left'>
                                                  
                                        <div class=' product-prev col-12 '>  
                                             
                                                          <a class='col-2 btn btn-link float-left'  href='pet.php?id=".$row2["id"]."
                                                
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
                                <a href="cats-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
    
</div> </div></div>
</div></div> </div></div>
</div></div> </div></div></div></div>