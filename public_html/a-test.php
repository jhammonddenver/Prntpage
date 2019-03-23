<?php 
include_once 'includes/header2.php';

?>

<style>
    
    #map{
        height: 40%;
        width: 100%;
    }
 html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

    
</style>

<nav class="page-nav navbar navbar-expand-lg ">
            <div class="container-fluid row " id="navbarNav" style="background-color:#000!important">
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    
                </button>

               
                    <div class="d-md-none">
<form action="includes/search.php" method="POST" id="mobile-search2">
			          
			           <select class="mobile-search-options row col-12 " name="category" id="category">
			                <option value="Dropdown">  Dropdown</option>
			              <option value="All">All</option>
			              <option value="Properties">Properties</option>
			              <option value="Bed and Breakfast">Bed and Breakfast</option>
			              <option value="Food">Food</option>
			              <option value="Transportation">Transportation</option>
			              <option value="Hotels and Motels">Hotels and Motels</option>
			              <option value="Pets and Livestock">Pets and Livestock</option>
			               <option value="Items">Items</option>
			               <option value="For Sale">For Sale</option>
			               <option value="Jobs">Jobs</option>
			               <option value="Services">Services</option>
			               <option value="Social">Social</option>
			               <option value="Videos">Videos</option>
			               
			              
			          </select>
                        
                    <div class="row col-12">
                            <input class=" col-10 " type="text" placeholder="Search" name="mobile-search" id="mobile-search">
      <button class=" col-2 mobile-search-button2 float-right" name="mobile-search-button2" type="submit">

<i class="fas fa-search"></i></button>
      </form> 
      </div>
      
                           
                            
                            <a class="nav-link col-6 float-right" href="#">List</a>
                       
                            <a class="nav-link col-6 float-left" href="add-listing.php">Post</a>
                        
      
</div> 


















                           <div class="d-none d-md-block row col-12" style="max-height: 50px"> 
                           
                         <input class=" col-2 float-left my-3" id="pac-input" type="text"
            placeholder="Enter Location">
                           
                           <form class="col-7 float-left" action="includes/search.php" method="POST" id="search2">
                               
                                 
			          
			           <select class="search-options col-5 float-left" name="category" id="category">
			                <option value="Dropdown">Dropdown</option>
			              <option value="All">All</option>
			              <option value="Properties">Properties</option>
			              <option value="Bed and Breakfast">Bed and Breakfast</option>
			              <option value="Food">Food</option>
			              <option value="Transportation">Transportation</option>
			              <option value="Hotels and Motels">Hotels and Motels</option>
			              <option value="Pets and Livestock">Pets and Livestock</option>
			               <option value="Items">Items</option>
			               <option value="For Sale">For Sale</option>
			               <option value="Jobs">Jobs</option>
			               <option value="Services">Services</option>
			               <option value="Social">Social</option>
			               <option value="Videos">Videos</option>
			               
			              
			          </select>
                        
                      
                            <input class=" col-7 float-left" type="text" placeholder="Search" name="search" id="search">
      <button class="col-1 search-button2 float-left pb-1" name="search-button2" type="submit">

<i class="fas fa-search"></i></button>
      </form> 
    
                              <ul class="navbar-nav col-3 float-right justify-content-right">
                         
                         
                          <li class="nav-item2 col-3">
                            <a class="nav-link  " href="mylistings.php
">Manage</a>
                        </li>
                         
                           <li class="nav-item2 col-3">
                            <a class="nav-link " href="#">Publish</a>
                        </li>
                        <li class="nav-item2 col-6">
                            <a class="nav-link col-3" href="add-listing.php">Listing </a>
                        </li>
          
                        
          
          
                          </ul>  
                        
                                         
                
                            
                                         
          </div>     </div>        
                             
          </div>                               
               
           
        </nav> <!-- Page Navigation : end -->











        
     



    <div id="map"></div>
    <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>
<div id="page-wrapper-home" class="col-12" style="background-color:#3a3b3f !important;">

<?php 
 require 'includes/featured_listings.php';

?> 


</div></div></div></div>
 </main>



    <!--[if lt IE 9]>
        <script src="libs/html5shiv/es5-shim.min.js"></script>
        <script src="libs/html5shiv/html5shiv.min.js"></script>
        <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
        <script src="libs/respond/respond.min.js"></script>
    <![endif]-->

    <!-- build:css js/vendor.js --> 
    
  <script type="text/javascript" src="js/gmap-adding.js"></script>

 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFt-aPTyRNNhRmcczr344JpDllcSXffLk&libraries=places&callback=initMap"
        ></script>
           
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
  
      
    <!-- endbuild -->   

</body>
</html>