<?php
include 'includes/header2.php';   
include_once 'includes/navbar-map.php';


?>



    <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Category</a></li>
                         <li class="breadcrumb-item"><a href="#">Animals</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Horses</li>
                    </ol>
                </nav>
            </div>

           <div class=" container-fluid" id="js-propertiesWrap">
                <div class="row align-items-center col-12 mb-4 mb-lg-0">
                    <div class="col-2 col-md-3">
                        <ul class=" page-view nav float-left filter-list">
                                 <li class=" nav-item">
                                    <a class="nav-link view-list" href="horses.php">List</a>
                                </li> 
                                <li class="  nav-item">
                                    <a class="nav-link view-map" href="horses-map.php">Map</a>
                                </li>
                            </ul>
                      <center>  <h3>Horses</h3> </center>
                        
                 </div>
   

       

 


                    <div class="col-6 col-md-6 filter-list">
                         
        <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Bird</span>
                                                    </label>
<label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Cat</span>
                                                    </label>
                                                    
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Cattle</span>
                                                    </label>
                                                    
                                                    
                                        <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Dog</span>
                                                    </label>
                                                     <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Farm Animal</span>
                                                    </label>
                                                    
                                            <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Fish</span>
                                                    </label>         
                                         <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Exotic</span>
                                                    </label> 
                                                    
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" checked disabled>
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Horse</span>
                                                    </label>
                                                    
                                                    
                                             <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Other</span>
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
                        <div class="filter">
                            <div class="dropdown">

                                <button class="btn btn-back dropdown-toggle" type="button" id="dropdownMenuFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Filter
                                </button>                                    

                                <div class="filter-inner dropdown-menu-left" aria-labelledby="dropdownMenuFilter">
                                    
                                    
                                    
                                    
                                   
                                  

                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <div class="filter-group">
                                        <h6 class="filter-title">Price</h6>
                                        <br>
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
                                                            <input class="form-control" type="text" class="rg-slider__control" placeholder="Min Price">
                                                        </div>

                                                        - 

                                                        <div class="rg-slider__item">
                                                            <input class="form-control" type="text" class="rg-slider__control" placeholder="Max Price">
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
                                        <h6 class="filter-title">Type</h6>
                                        
                                        <ul class="filter-list">
                                            <li>
                                                <select class="form-control custom-select col-4" >
                                                <option selected>Any</option>
                                                <option value="pet_bird">Bird</option>   
                                                        
                                                        
                                                        <option value="pet_cat">Cat</option> 
                                                        <option value="pet_cattle">Cattle</option> 
                                                         <option value="pet_dog">Dog</option> 
                                                          <option value="pet_exotic">Exotic</option> 
                                                        
                                                       <option value="pet_farm">Farm</option>
                                                        <option value="pet_fish">Fish</option>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                                      
                                                         <option value="pet_horse">Horse</option> 
                                                        
                                                        
                                                        
                                                <option value="pet_other">Other</option>  
                                                  
                                                  
                                                  
                                                                
                                                        
                                                        
                                                        
                                               
                                                </select>
                                               
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="filter-group">
                                        <h6 class="filter-title">Seller</h6>
                                        
                                        <ul class="filter-list">
                                            <li>
                                                 <select class="form-control custom-select col-4" >
                                                <option selected>Any</option>
                                                <option value="Breeder">Breeder</option>   
                                                        
                                                        
                                                        <option value="Shelter">Shelter</option> 
                                                        <option value="Store">Store</option> 
                                                         <option value="Sanctuary">Sanctuary</option> 
                                                          <option value="Zoo">Zoo</option> 
                                                        
                                                       <option value="private-home">Private Home</option>
                                               
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                     <div class="filter-group">
                                        <h6 class="filter-title">Age</h6>
                                        
                                        <ul class="filter-list">
                                            <li>
                                                 <select class="form-control custom-select col-4" >
                                                <option selected>Any</option>
                                              <option value="Under 1 Year">Under 1 Year</option>   
                                                        
                                                        
                                                        <option value="Young">Young</option> 
                                                        <option value="Adult">Adult</option> 
                                                         <option value="Older">Older</option> 
                                                          
                                               
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    

                                    <div class="filter-group">
                                        <h6 class="filter-title">Shipping</h6>
                                         <select name="bnb_type" class="form-control custom-select " aria-describedby="mutedField1">
                                                            <option selected>Any</option>
                                                             <option value="None">None</option>   
                                                        
                                                        
                                                        <option value="National">National</option> 
                                                        <option value="International">International</option> 
                                                         
                                                          
                                             
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        </select> 
    
    
    
    
    
    
    
    
                                       
                                       
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                     
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    

                                    <a href="#" class="btn btn-send">Save Search</a>


                                </div>

                            </div>
                        </div>
                        
                    </div>



                        
                          
                           

                           
                              
                               
                                                    


<div class="row col-9">
                                                   



    
<?php
                                             
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM pets WHERE type='Horse'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        echo "
        
        
         
        

  <div class='  catalog-list properties-catalog'> 


 <div class='catalog-item '>
           <div class='col-3 product d-flex flex-column flex-md-row flex-wrap flex-md-nowrap flex-xl-nowrap flex-lg-wrap'>

<div class='d-flex flex-wrap flex-md-nowrap col-12'>
                                                  
                                        <div class='product-prev '>  
                                             
                                                          <a class='col-1 btn btn-link'  href='pet.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                                <a  class='col-1 btn btn-link' href='mailto:". $row2["contact_email"] . "'>Contact</a>
                                                         
                                                         
                                                         
                                          
                                              
                                                   
                                                     <br>
                                                      <div class='product-name'>
                                                       " . $row2["name"]. "  
                                                    </div>
                                                     
                                                     
                                                     <p>   <a href='pet.php?id=".$row2["id"]."
                                                
                                                ' ><img alt='' style='width:350px; height:240px;' class='rounded img-fluid'  src='pets/photos/" . $row2["main_pic"] . "'>
                                                          </a></p> <p>" . $row2["add2"]. " <br>
                                                         " . $row2["city"]. ", " . $row2["state"]. " " . $row2["zip"]. " <br>
                                                         
                                                     " . $row2["price"]. "  
                                                         
                                                         
                                                         
                                                         <div class='product-body'>
                                                   
                                                      
                                                    </div>

                                                   

                                                    

                                                    <div class='product-settings'>
                                                       
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