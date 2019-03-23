 <div class="row justify-content-center">                
                       
                   
<div class="col-12">

                             
                            
                    <div class="card-deck"> 
              <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto">
                  <a href="bnbs-map.php">
  <img class="card-img" src="images/catalog/bed-breakfast.jpg" alt="">
  <div class="card-link">
   
    
    Bed & Breakfast</a>
  </div>
</div> 

      <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="hostel-map.php">
  <img class="card-img" src="images/catalog/hostels.jpg" alt="">
  <div class="card-link">
   
    
    Hostel</a>
  </div>
</div> 
                                
    <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="hotels-map.php">
  <img class="card-img" src="images/catalog/hotel.jpg" alt="">
  <div class="card-link">
   
    
    Hotels</a>
  </div>
</div> 
    
        
       <div class="card col-sm-6 col-md-3 col-lg-3 text-center mx-auto"><a href="motels-map.php">
  <img class="card-img" src="images/catalog/motel.jpg" alt="">
  <div class="card-link">
   
    
  Motels</a>
   </div>
</div>  
</div> 
 </div>      
 
<div class="row col-12 justify-content-center">
    
    
    <h2 class="page__title text-center">Top Hotels</h2>
     <div class="row catalog-list">
                            <div class="row col-12 ">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM hotels WHERE type='Hotel' ORDER BY `created` DESC LIMIT 3";
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
                                             
                                                          <a class='col-2 btn btn-link'  href='hotel.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                                
                                                         
                                                         
                                                         
                                          
                                               <a href='hotel.php?id=".$row2["id"]."
                                                
                                                ' >
                                                   
                                                     <br><p>  <img alt='' style='width:250px; height:180px;' class='rounded img-fluid'  src='hotels/photos/" . $row2["main_pic"] . "'>
                                                          </a></p> <p>" . $row2["add2"]. " <br>
                                                         " . $row2["city"]. ", " . $row2["state"]. " " . $row2["zip"]. " <br>
                                                         
                                                     " . $row2["nightly"]. "
                                                         
                                                         
                                                         
                                                         

                                                    

                                                    

                                                    <div class='product-settings'>
                                                        <ul class='product-settings__list d-flex content-align-center'>
                                                            <li class='product-settings__item'>
                                                                <span>
                                                                
                                                                " . $row2["beds"]. "
                                                                
                                                                </span>
                                                                bd

                                                                <i class='ico-bd'></i>
                                                            </li>

                                                            <li class='product-settings__item'>
                                                                <span>
                                                                
                                                                " . $row2["baths"]. "
                                                                
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
     
     
     
     
     
     
       <div class="col-12 col-sm catalog-item catalog-item_more">
                                <a href="hotels-motels-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
    
     
     
     
     
     
     
     <div class="row col-12 justify-content-center">
    
    
    <h2 class="page__title text-center">Bed And Breakfasts</h2>
     <div class=" catalog-list">
                            <div class="row col-12 pl-2 ml-2">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM hotels WHERE type='BnB' ORDER BY `created` DESC LIMIT 3";
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
                                             
                                                          <a class='col-2 btn btn-link'  href='hotel.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                               
                                                         
                                                         
                                                         
                                          
                                               <a href='hotel.php?id=".$row2["id"]."
                                                
                                                ' >
                                                   
                                                     <br><p>  <img alt='' style='width:250px; height:180px;' class='rounded img-fluid'  src='hotels/photos/" . $row2["main_pic"] . "'>
                                                          </a></p> <p>" . $row2["add2"]. " <br>
                                                         " . $row2["city"]. ", " . $row2["state"]. " " . $row2["zip"]. " <br>
                                                         
                                                     " . $row2["nightly"]. "  
                                                         
                                                         
                                                         
                                                         

                                                    

                                                    

                                                    <div class='product-settings'>
                                                        <ul class='product-settings__list d-flex content-align-center'>
                                                            <li class='product-settings__item'>
                                                                <span>
                                                                
                                                                " . $row2["beds"]. "
                                                                
                                                                </span>
                                                                bd

                                                                <i class='ico-bd'></i>
                                                            </li>

                                                            <li class='product-settings__item'>
                                                                <span>
                                                                
                                                                " . $row2["baths"]. "
                                                                
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
     
     
    
    <div class="col-12 col-sm catalog-item catalog-item_more">
                                <a href="bnbs-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
    
     
     
     
     
     
     
         
    <div class="row col-12 justify-content-center">
    
    
    <h2 class="page__title text-center">Recommended For You
</h2>
     <div class=" catalog-list">
                            <div class="row col-12 ">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM hotels  ORDER BY `created` DESC LIMIT 3";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        echo "
       <div class='  catalog-list properties-catalog'> 


 <div class='catalog-item '>
           <div class='col-md-3 col-12  product d-flex flex-column flex-md-row flex-wrap flex-md-nowrap flex-xl-nowrap flex-lg-wrap'>

<div class='d-flex flex-wrap flex-md-nowrap col-12 float-left'>
                                                  
                                        <div class='float-left product-prev col-12 '>  
                                             
                                                          <a class='col-2 btn btn-link'  href='hotel.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                               
                                                         
                                                         
                                                         
                                          
                                               <a href='hotel.php?id=".$row2["id"]."
                                                
                                                ' >
                                                   
                                                     <br><p>  <img alt='' style='width:250px; height:180px;' class='rounded img-fluid'  src='hotels/photos/" . $row2["main_pic"] . "'>
                                                          </a></p> <p>" . $row2["add2"]. " <br>
                                                         " . $row2["city"]. ", " . $row2["state"]. " " . $row2["zip"]. " <br>
                                                         
                                                     " . $row2["nightly"]. "
                                                         
                                                         
                                                         
                                                         

                                                    

                                                    

                                                    <div class='product-settings'>
                                                        <ul class='product-settings__list d-flex content-align-center'>
                                                            <li class='product-settings__item'>
                                                                <span>
                                                                
                                                                " . $row2["beds"]. "
                                                                
                                                                </span>
                                                                bd

                                                                <i class='ico-bd'></i>
                                                            </li>

                                                            <li class='product-settings__item'>
                                                                <span>
                                                                
                                                                " . $row2["baths"]. "
                                                                
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
     
       <div class="col-12 col-sm catalog-item catalog-item_more">
                                <a href="hotels-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
    
   
       <div class="row col-12 justify-content-center">
    
    
    <h2 class="page__title text-center col-12">Hotels of the week</h2>
     <div class=" catalog-list">
                            <div class="row col-12 ">
                               
    <?php
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM hotels WHERE type='Hotel' ORDER BY `created` DESC LIMIT 3";
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
                                             
                                                          <a class='col-2 btn btn-link'  href='hotel.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                               
                                                         
                                                         
                                                         
                                          
                                               <a href='hotel.php?id=".$row2["id"]."
                                                
                                                ' >
                                                   
                                                     <br><p>  <img alt='' style='width:250px; height:180px;' class='rounded img-fluid'  src='hotels/photos/" . $row2["main_pic"] . "'>
                                                          </a></p> <p>" . $row2["add2"]. " <br>
                                                         " . $row2["city"]. ", " . $row2["state"]. " " . $row2["zip"]. " <br>
                                                         
                                                     " . $row2["nightly"]. "
                                                         
                                                         
                                                         
                                                         

                                                    

                                                    

                                                    <div class='product-settings'>
                                                        <ul class='product-settings__list d-flex content-align-center'>
                                                            <li class='product-settings__item'>
                                                                <span>
                                                                
                                                                " . $row2["beds"]. "
                                                                
                                                                </span>
                                                                bd

                                                                <i class='ico-bd'></i>
                                                            </li>

                                                            <li class='product-settings__item'>
                                                                <span>
                                                                
                                                                " . $row2["baths"]. "
                                                                
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
     
       <div class="col-12 col-sm catalog-item catalog-item_more">
                                <a href="motels-map.php" class="catalog-more">
                                    <img src="images/catalog/pp-1.png" alt="" class="rounded img-fluid">
                                </a>
                            </div>
    
    
    
</div> </div></div>
</div></div> </div></div></div> </div></div>
</div></div> </div>