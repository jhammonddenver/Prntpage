<?php
include 'includes/header.php';
 include_once 'includes/navbar-map.php';

?>



    <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Catalog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Food</li>
                    </ol>
                </nav>
            </div>

            <div class=" container-fluid" id="js-propertiesWrap">
                <div class="row align-items-center col-12 mb-4 mb-lg-0">
                    <div class="col-4 col-md-4">
                        <ul class=" page-view nav float-left filter-list">
                                 <li class=" nav-item">
                                    <a class="nav-link view-list" href="food.php">List</a>
                                </li> 
                                <li class="  nav-item">
                                    <a class="nav-link view-map" href="food-map.php">Map</a>
                                </li>
                            </ul>
                      <center>  <h3>Food</h3> </center>
                        
                 </div>
   

       

 


                 <small>   <div class="col-8 col-md-8 filter-list">
                         
        <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Home Cooked</span>
                                                    </label>
<label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Restaurant</span>
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
                                        <h6 class="filter-title">Price Range</h6>
                                        
                                        <ul class="filter-list">
                                            <li>
                                                <select class="form-control custom-select col-4" >
                                                <option selected>Any</option>
                                                <option>$</option>
                                                <option>$$</option>
                                                <option>$$$</option></option>
                                                <option>$$$$</option>
                                             
                                               
                                                </select>
                                               
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="filter-group">
                                        <h6 class="filter-title">Delivery</h6>
                                        
                                        <ul class="filter-list">
                                            <li>
                                                 <select class="form-control custom-select col-4" >
                                                <option selected>Any</option>
                                                <option>No</option>
                                                <option>Yes</option>
                                              
                                               
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                     <div class="filter-group">
                                        <h6 class="filter-title">Type</h6>
                                        
                                        <ul class="filter-list">
                                            <li>
                                                 <select class="form-control custom-select col-4" >
                                                <option selected>Any</option>
                                              
                                                        
                                                        
                                                         <option value="Food Truck">Food Truck</option>   
                                                        
                                                        
                                                        <option value="Family Style">Family Style</option> 
                                                        <option value="House">House</option> 
                                                         <option value="Bar">Bar</option> 
                                                          <option value="Pub">Pub</option> 
                                                        
                                                       <option value="Tavern">Tavern</option>
                                                        <option value="Deli">Deli</option>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                                      
                                                         <option value="Pizzeria">Pizzeria</option> 
                                                        
                                                        
                                                        
                                                <option value="Cafe">Cafe</option>  
                                                  
                                                  
                                                  
                                                                
                                           
                                           
                                                <option value="Fast Food">Fast Food</option>   
                                                        
                                                        
                                                        <option value="Diner">Diner</option> 
                                                        <option value="Restaurant">Restaurant</option> 
                                                         <option value="Buffet">Buffet</option> 
                                                          <option value="Nightclub">Nightclub</option> 
                                                        
                                                       <option value="Adult Entertainment">Adult Entertainment</option>
                                                        <option value="Banquet Hall">Banquet Hall</option>             
                                                        
                                              
                                              
                                                <option value="Osteria">Osteria</option> 
                                                        
                                                       <option value="Steakhouse">Steakhouse</option>
                                                        <option value="Fine Dining">Fine Dining</option>           
                                                        
                                                        
                                                        
                                                        
                                                    </select>  
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    

                                    <div class="filter-group">
                                        <h6 class="filter-title">Cuisine</h6>
                                        
                                        
                                         <input type="text" name="cuisine" class="form-control" placeholder="Enter Text" required> 
    
    
    
    
    
    
    
                                       
                                       
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

$sql2 = "SELECT * FROM food";
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
                                        
                                             
                                                          <a class='col-1 btn btn-link'  href='food-listing.php?id=".$row2["id"]."
                                                
                                                ' >View</a>
                                               <br>
                                                         
                                                 <strong>
                                            
                                            " . $row2["name"]. "</strong><br>         
                                                         
                                          
                                               <a href='food-listing.php?id=".$row2["id"]."'<br>
                                                
                                                 
                                                   
                                                       <img alt='' style='max-width:350px; max-height:240px;' class='rounded img-fluid'  src='food/photos/" . $row2["main_pic"] . "'>
                                                          </a> 
                                                          <p>
                                                          " . $row2["cat"]. "
                                                          </p>
                                                          
                                                          <p>" . $row2["add2"]. " <br>
                                                         " . $row2["city"]. ", " . $row2["state"]. " " . $row2["zip"]. " <br>
                                                         
                                             Price Range: &nbsp;        " . $row2["price_range"]. " 
                                                         <br>
                                                         
                                             Delivery:&nbsp;" . $row2["delivery"]. "
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