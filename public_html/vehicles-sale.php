<?php
include 'includes/header.php';
 include_once 'includes/navbar-map.php';

?>



    <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="catalog.php">Catalog</a></li>
                         <li class="breadcrumb-item"><a href="transportation.php">Transportation</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Vehicles For Sale</li>
                    </ol>
                </nav>
            </div>

            <div class=" container-fluid" id="js-propertiesWrap">
                <div class="row align-items-center col-12 mb-4 mb-lg-0">
                    <div class="col-3 col-md-3">
                        <ul class=" page-view nav float-left filter-list">
                                 <li class=" nav-item">
                                    <a class="nav-link view-list" href="vehicles-sale.php">List</a>
                                </li> 
                                <li class="  nav-item">
                                    <a class="nav-link view-map" href="vehicles-sale-map.php">Map</a>
                                </li>
                            </ul>
                      <center>  <h3>Vehicles For Sale</h3> </center>
                        
                 </div>
   

       

 


                 <small>   <div class="col-8 col-md-8 filter-list">
                         
        <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input"  checked disabled>
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Vehicles For Sale</span>
                                                    </label>
<label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Vehicles For Rent</span>
                                                    </label>
<label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Rideshares</span>
                                                    </label>
<a href="#" class="col-1 btn btn-send"><font color="#fff">Search</font></a>
</small>
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
                                         <select name="bnb_type" class="form-control custom-select " aria-describedby="mutedField1">
                                                            <option selected>Any</option>
                                                            <option value="Bicycle">Bicycle</option>
                                                            <option value="Motorbike">Motorbike</option>
                                                            <option value="Motorcycle">Motorcycle</option>
                                                            <option value="Quad">Quad</option>
                                                            <option value="Rickshaw">Rickshaw</option>
                                                            <option value="Sedan">Sedan</option>
                                                            <option value="Electric Car">Electric Car</option>
                                                            <option value="Truck">Truck</option>
                                                            <option value="SUV">SUV</option>
                                                            <option value="Convertable">Convertable</option>
                                                            <option value="Van">Van</option>
                                                            <option value="Coupe">Coupe</option>

                                                            <option value="Emergency Vehicles">Emergency Vehicles</option>
                                                            
                                                          <option value="Snow Mobile">Snow Mobile</option>     
                                                            
                                                            
                                                            
                                                            
                                                                 <option value="Jet Ski">Jet Ski</option>
                                                            <option value="Canoe">Canoe</option>
                                                            <option value="Boat">Boat</option>

                                                            <option value="Yacht">Yacht</option>
                                                            
                                                          <option value="Electric Scooter">Electric Scooter</option>     
                                                         
                                                        
                                                        
                                                        
                                                        </select> 
    
    
    
    
    
    
    
    
                                       
                                       
                                    </div>
                                    
                                    
                                    
                                    
                            <div class="filter-group">         
                                    
                                <h6 class="filter-title">Year</h6>    
                               
                                <input type="text" class="form-control" name="year" placeholder="Enter Year">    
                            
                                  </div>  
                                  
                                   <div class="filter-group">         
                                    
                                <h6 class="filter-title">Make</h6>    
                               
                                <input type="text" class="form-control" name="make" placeholder="Enter Make">    
                            
                                  </div>  
                                  
                                   <div class="filter-group">         
                                    
                                <h6 class="filter-title">Model</h6>    
                               
                                <input type="text" class="form-control" name="model" placeholder="Enter Model">    
                            
                                  </div>  
                                   <div class="filter-group">         
                                    
                                <h6 class="filter-title">Fuel</h6>    
                               
                                <input type="text" class="form-control" name="fuel" placeholder="Enter Fuel">    
                            
                                  </div>  
                                  
                                  
                                    
                                    
                                      <div class="filter-group">
                                        <h6 class="filter-title">Amenities</h6>
                                        
                                        <ul class="filter-list">
                                         
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" >
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">AC</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Heat</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Snow Tires</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Ski Racks</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">GPS</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" >
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Audio Input</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Bike Rack</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Bluetooth</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Pet Friendly</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Smoker Friendly</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Child Seat</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">USB Port</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Toll Pass</span>
                                                    </label>
                                                </div>
                                            </li>
                                            
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Heated Seats</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Sun Roof</span>
                                                    </label>
                                                </div>
                                            </li>
                                               <li>
                                                <div class="checkbox">
                                                    <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Helmet</span>
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

$sql2 = "SELECT * FROM transport WHERE cat='Vehicles For Sale'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        echo "
        
        
         
         

  <div class='  catalog-list properties-catalog'> 


 <div class='catalog-item '>
           <div class='col-4 product d-flex flex-column flex-md-row flex-wrap flex-md-nowrap flex-xl-nowrap flex-lg-wrap'>

<div class='d-flex flex-wrap flex-md-nowrap col-12'>
                                                  
                                        <div class='product-prev '>  
                                        
                                             
                                                          <a class='col-1 btn btn-link'  href='transport-listing.php?id=".$row2["id"]."
                                                
                                                ' >View</a><br>
                                                
                                                         
                                                 <strong>
                                            
                                            " . $row2["name"]. "</strong><br>         
                                                         
                                          
                                               <a href='transport-listing.php?id=".$row2["id"]."'<br>
                                                
                                                 
                                                   
                                                       <img alt='' style='max-width:350px; max-height:240px;' class='rounded img-fluid'  src='transport/photos/" . $row2["main_pic"] . "'>
                                                          </a> 
                                                          <p>
                                                          " . $row2["cat"]. "<br>" . $row2["type"]. "<br>
                                                          " . $row2["year"]. "&nbsp;" . $row2["make"]. "&nbsp;" . $row2["model"]. "
                                                          </p>
                                                          
                                                          <p>" . $row2["add2"]. " <br>
                                                         " . $row2["city"]. ", " . $row2["state"]. " " . $row2["zip"]. " <br>
                                                         
                                                     " . $row2["price"]. " " . $row2["daily"]. " 
                                                         
                                                         
                                                         
                                                         <div class='product-body'>
                                                   
                                                      
                                                    </div>

                                                    <div class='product-name'>
                                                      
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



<script>
     function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
             
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
      
      
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 10
         

        });
        infoWindow = new google.maps.InfoWindow;
        

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('You are here.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
      

     
      
      
      
      
      
      
      
      
      
    
</script>






  
  
   





<?php




include 'includes/footer.php';
?>