<?php
include 'includes/header2.php';   
include_once 'includes/navbar-map.php';


?>



    <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Properties</li>
                    </ol>
                </nav>
            </div>

           <div class=" container-fluid" id="js-propertiesWrap">
                <div class="row align-items-center col-12 mb-4 mb-lg-0">
                    <div class="col-2 col-md-3">
                        <ul class=" page-view nav float-left filter-list">
                                 <li class=" nav-item">
                                    <a class="nav-link view-list" href="properties.php">List</a>
                                </li> 
                                <li class="  nav-item">
                                    <a class="nav-link view-map" href="properties-map.php">Map</a>
                                </li>
                            </ul>
                      <center>  <h3>Properties</h3> </center>
                        
                 </div>
   

       

 


                    <div class="col-6 col-md-6 filter-list">
                         
        <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Long Term Rentals</span>
                                                    </label>
<label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Real Estate</span>
                                                    </label>
<label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
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
                                        <h6 class="filter-title">Bedrooms</h6>
                                        
                                        <ul class="filter-list">
                                            <li>
                                                <select class="form-control custom-select col-4" >
                                                <option selected>Any</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6+</option>
                                               
                                                </select>
                                               
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="filter-group">
                                        <h6 class="filter-title">Bathrooms</h6>
                                        
                                        <ul class="filter-list">
                                            <li>
                                                 <select class="form-control custom-select col-4" >
                                                <option selected>Any</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6+</option>
                                               
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                     <div class="filter-group">
                                        <h6 class="filter-title">Guest</h6>
                                        
                                        <ul class="filter-list">
                                            <li>
                                                 <select class="form-control custom-select col-4" >
                                                <option selected>Any</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6+</option>
                                               
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    

                                    <div class="filter-group">
                                        <h6 class="filter-title">Property Type</h6>
                                         <select name="bnb_type" class="form-control custom-select " aria-describedby="mutedField1">
                                                            <option selected>Any</option>
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
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                      <div class="filter-group">
                                        <h6 class="filter-title">Amenities</h6>
                                        
                                        <ul class="filter-list">
                                         
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" >
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Elevator</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Internet</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Wifi</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Family Friendly</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Gym</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" >
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Free Parking on Premises</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Hot Tub</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Buzzer</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Dryer</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Kitchen</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Pool</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Cable TV</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Pets Allowed</span>
                                                    </label>
                                                </div>
                                            </li>
                                            
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Wheelchair Accessible</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Breakfast</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Air Conditioning</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Heating</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Hangers</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Washer</span>
                                                    </label>
                                                </div>
                                            </li>
                                              <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Iron</span>
                                                    </label>
                                                </div>
                                            </li> 
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Gym</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Events Allowed</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Laptop Workspace</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Smoking Allowed</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">420 Allowed</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Hair Dryer</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Fireplace</span>
                                                    </label>
                                                </div>
                                            </li>
                                              <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Essentials</span>
                                                    </label>
                                                </div>
                                            </li> 
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Paid Parking</span>
                                                    </label>
                                                </div>
                                            </li>
                                            
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Free Street Parking</span>
                                                    </label>
                                                </div>
                                            </li>
                                             <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Private Entrance</span>
                                                    </label>
                                                </div>
                                            </li>  
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Doorman</span>
                                                    </label>
                                                </div>
                                            </li>
                                            
                                            
                                            
                                            
                                            
                                        </ul>
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

$sql2 = "SELECT * FROM homes ";
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
                                             
                                                          <a class='col-1 btn btn-link'  href='listing.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                                <a  class='col-1 btn btn-link' href='mailto:". $row2["listing_contact_email"] . "'>Contact</a>
                                                         
                                                         
                                                         
                                          
                                               <a href='listing.php?id=".$row2["id"]."
                                                
                                                ' >
                                                   
                                                     <br><p>  <img alt='' style='width:350px; height:240px;' class='rounded img-fluid'  src='properties/photos/" . $row2["listing_main_photo"] . "'>
                                                          </a></p> <p>" . $row2["listing_add2"]. " <br>
                                                         " . $row2["listing_city"]. ", " . $row2["listing_state"]. " " . $row2["listing_zip"]. " <br>
                                                         
                                                     " . $row2["listing_monthly"]. "" . $row2["listing_purchase"]. "  
                                                         
                                                         
                                                         
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