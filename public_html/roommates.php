<?php
include 'includes/header.php';


?>



    <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="catalog.php">Catalog</a></li>
                        <li class="breadcrumb-item"><a href="properties.php">Properties</a></li>
                         <li class="breadcrumb-item active" aria-current="page">Roommates</li>
                    </ol>
                </nav>
            </div>

            <div class=" container-fluid" id="js-propertiesWrap">
                <div class="row align-items-center col-12 mb-4 mb-lg-0">
                    <div class="col-2 col-md-3">
                        <ul class=" page-view nav float-left filter-list">
                                 <li class=" nav-item">
                                    <a class="nav-link view-list" href="roommates.php">List</a>
                                </li> 
                                <li class="  nav-item">
                                    <a class="nav-link view-map" href="roommates-map.php">Map</a>
                                </li>
                            </ul>
                      <center>  <h3>Roommates</h3> </center>
                        
                 </div>
   

       

 


                    <div class="col-5 col-md-4 filter-list">
                         
        <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Long Term Rentals</span>
                                                    </label>
<label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" >
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Real Estate</span>
                                                    </label>
<label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" checked disabled>
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Roommates</span>
                                                    </label>
<a href="#" class="col-2 btn btn-send"><font color="#fff">Search</font></a>

</div>
                        <div class=" col-3 col-md-4 float-right">
                            <div class="search ">
                                
                            </div> 

                          
                        </div>
                    </div>
                </div>

                <div class="row mb-5 flex-lg-nowrap">
                    <div class="col-3 ">
                        <div class="filter-inner" aria-labelledby="dropdownMenuFilter">
                                    
                                    <div class="filter-group">
                                       <h6 class="filter-title">Price</h6> <br>
                                       
                                       
                                       
                                       
                                       
                                       
               
                                       
                                       
                                        
                                        <ul class="filter-list">
                                             <li>
                                                <div class="rg-slider">
                                                    <div class="rg-slider__slider">
                                                        <i class="rg-slider__slider-amount amount-1">0</i>
                                                        <i class="rg-slider__slider-amount amount-2">900M</i>

                                                        <div class="rg-slider__slider-range"> </div>

                                                        <span class="rg-slider__slider-handle handle-1"></span>
                                                        <span class="rg-slider__slider-handle handle-2"></span>
                                                    </div>

                                                    <div class="d-flex align-items-center justify-content-between ">
                                                        $ 
                                                        <div class="rg-slider__item">
                                                            <input type="text" class="rg-slider__control" placeholder="Min Price">
                                                        </div>

                                                        - 

                                                        <div class="rg-slider__item">
                                                            <input type="text" class="rg-slider__control" placeholder="Max Price">
                                                        </div>
                                                        
                                                        <a href="#" class="btn btn-send"><i class="ico-slider"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" checked>
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Any Price</span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="filter-group">
                                        <h6 class="filter-title">Looking for</h6>
                                        
                                        <ul class="filter-list">
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" >
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">A Place </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">A Roommate</span>
                                                    </label>
                                                </div>
                                            </li>
                                           
                                        </ul>
                                    </div>

                                    <div class="filter-group">
                                        <h6 class="filter-title">Pets</h6>
                                        
                                        <ul class="filter-list">
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" checked>
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Any </span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">I have no pets</span></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">I have a dog</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">I have a cat</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">I have another type of pet</span>
                                                    </label>
                                                </div>
                                            </li>
                                         
                                           
                                        </ul>
                                    </div>

                                    <div class="filter-group">
                                        <h6 class="filter-title">Children</h6>
                                        
                                        <ul class="filter-list">
                                                 <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" checked>
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Any </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" >
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">I have no children.</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">I have children.</span>
                                                    </label>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="filter-group">
                                        <h6 class="filter-title">Sex</h6>
                                        
                                        <ul class="filter-list">
                                                 <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" checked>
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Male </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" >
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Female</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Other</span>
                                                    </label>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                                    <div class="filter-group">
                                        <h6 class="filter-title">Distance</h6>
                                        
                                        <ul class="filter-list">
                                                 <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" >
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">0 - 10 </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" >
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">10 - 20</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">20 - 30</span>
                                                    </label>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    
                                    
                                    
                                    
                                    

                                    <a href="#" class="btn btn-send"><font color="#fff">Save Search</a></font>

                                </div>

                            </div> 
                            
                            
                            
                          
                            
                           
                            
                            



                        
                          
                           

                           
                              
                               
                                                    



                                                   



    
<?php
                                             
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM homes WHERE listing_cat='Roommates'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        echo "
        
        
         
        

  <div class='row  catalog-list properties-catalog'> 


 <div class='catalog-item '>
           <div class='col-4 product d-flex flex-column flex-md-row flex-wrap flex-md-nowrap flex-xl-nowrap flex-lg-wrap'>

<div class='d-flex flex-wrap flex-md-nowrap col-12'>
                                                  
                                        <div class='product-prev '>  
                                             
                                                          <a class='col-1 btn btn-link'  href='listing.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                                <a  class='col-1 btn btn-link' href='mailto:". $row2["listing_contact_email"] . "'>Contact</a>
                                                         <br>
                                                         
                                                         
                                          
                                               <a href='listing.php?id=".$row2["id"]."
                                                
                                                ' >
                                                   
                                                       <img alt='' style='max-width:350px; max-height:240px;' class='rounded img-fluid'  src='properties/photos/" . $row2["listing_main_photo"] . "'>
                                                          </a> <p>" . $row2["listing_add2"]. " <br>
                                                         " . $row2["listing_city"]. ", " . $row2["listing_state"]. " " . $row2["listing_zip"]. " <br>
                                                         
                                                     " . $row2["listing_monthly"]. " a month.
                                                         
                                                         
                                                         
                                                         <div class='product-body'>
                                                   
                                                      
                                                    </div>

                                                    <div class='product-name'>
                                                      
                                                    </div>

                                                    

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
                                            
 </div>
                                            </div>
                                               
                                            </div>
                                                                      
                                   
 
     "
     
     ?>
      </div>
    
     <?php
                                                             
    }
} else {
    echo "0 results";
}

$conn->close();
?>

                              
                                                
                         
</div></div>
</div> </div> </div> 

</div>
</div></div></div>
</div>

</div></div>










  
  
   





<?php




include 'includes/footer.php';
?>