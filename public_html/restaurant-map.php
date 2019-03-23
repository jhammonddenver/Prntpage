<?php
    session_start();
  require 'includes/db_connect.php';
 
?>
<!DOCTYPE html >
<html itemscope itemtype="http://schema.org/Article">
  <head>
    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
       <title>Prntpage</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    
    
    
    
    <link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet"> 
    
    
     
    
    
    
    
    
 <!-- For Google -->
<meta name="description" content="Prntpage is a Global Social Media and Peer to Peer Marketplace!" />
<meta name="keywords" content="prntpage, global social media, social media, peer to peer, peer to peer marketplace" />

<meta name="author" content="Prntpage" />
<meta name="copyright" content="2019" />
<meta name="application-name" content="Prntpage" />

<!-- For Facebook -->
<meta property="og:title" content="Prntpage" />

<meta property="fb:app_id" content="328930347866854" />




<meta property="og:type" content="website" />
<meta property="og:image" content="https://prntpage.com/earth-logo.png" />
<meta property="og:url" content="https://prntpage.com" />
<meta property="og:description" content="Prntpage is a Global Social Media and Peer to Peer Marketplace!" />

<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="Prntpage" />
<meta name="twitter:description" content="Prntpage is a Global Social Media and Peer to Peer Marketplace!" />
<meta name="twitter:image" content="https://prntpage.com/earth-logo.png" />












	<script type="text/javascript" src="js/gmap-restaurant.js"></script>



    <script type="text/javascript" src="libs/jquery/jquery-2.1.3.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" type="text/css" media="all" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
    <link href="libs/font-awesome/css/all.css" rel="stylesheet">
 
    
    
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
<link rel="mask-icon" href="safari-pinned-tab.svg" color="#2dad36">
<meta name="apple-mobile-web-app-title" content="Prntpage">
<meta name="application-name" content="Prntpage">
<meta name="msapplication-TileColor" content="#2dad36">
<meta name="msapplication-TileImage" content="mstile-144x144.png">
<meta name="theme-color" content="#2dad36">


    
    
	
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
       
   
 

<br><br>
         
 <?php
  $id = $_SESSION['id']; 
  $uid = $_SESSION['uid'];
  $fn = $_SESSION['fn'];
  $ln = $_SESSION['ln'];
  $email = $_SESSION['email'];
  $mailuid = $_SESSION['mailuid'];
  $phone = $_SESSION['phone'];
  $photo = $_SESSION['photo'];
  $add1 = $_SESSION['add1'];
  $add2 = $_SESSION['add2'];
  $city = $_SESSION['city'];
  $state = $_SESSION['state'];
  $zip = $_SESSION['zip'];
  $country = $_SESSION['country'];
  $userLevel = $_SESSION['ul'];
  $bd = $_SESSION['bd'];
  $user_from = $_SESSION['user_from'];
  $user_lives = $_SESSION['user_lives'];
  $sex = $_SESSION['sex'];
  $pref = $_SESSION['pref'];
  $currency = $_SESSION['currency'];
  $lang = $_SESSION['lang'];
  $lid = $_SESSION['lid'];
  $lmainphoto = $_SESSION['lmainphoto'];
  $lphoto1 = $_SESSION['lphoto1'];
  $lphoto2 = $_SESSION['lphoto2'];
  $lphoto3 = $_SESSION['lphoto3'];
  $lphoto4 = $_SESSION['lphoto4'];
  $lphoto5 = $_SESSION['lphoto5'];
  $lphoto6 = $_SESSION['lphoto6'];
  $lphoto7 = $_SESSION['lphoto7'];
  $lphoto8 = $_SESSION['lphoto8'];
  $lphoto9 = $_SESSION['lphoto9'];
  $lphoto10 = $_SESSION['lphoto10'];
  $lphoto11 = $_SESSION['lphoto11'];
  $lphoto12 = $_SESSION['lphoto12'];
  $lphoto13 = $_SESSION['lphoto13'];
  $lphoto14 = $_SESSION['lphoto14'];
  $lphoto15 = $_SESSION['lphoto15'];
  $lphoto16 = $_SESSION['lphoto16'];
  $lphoto17 = $_SESSION['lphoto17'];
  $lphoto18 = $_SESSION['lphoto18'];
  $lphoto19 = $_SESSION['lphoto19'];
  $lphoto20 = $_SESSION['lphoto20'];
  
  
  switch($userLevel)
 {
    case '0':
        include_once 'includes/adminnav.php';
        break;
    case '1':
        include_once 'includes/usernav.php';
        break;
    case '2';
        include_once 'includes/managernav.php';
        break;
    case '3':
        include_once 'includes/advertisenav.php';
        break;
    default:
        include_once 'includes/guestnav.php';
        break;
 }
     
     include_once 'includes/navbar-map.php';
   
   ?>

</nav>
</head>


<style>
#map {
        height: 900px;
      }

 
   #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        
      }

     

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        text-justify: left;
        margin-left: 3px;
       
       
        text-overflow: ellipsis;
        
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }

    	#data, #allData {
			display: none;
		}
		
</style>





     <div class="container">
                <nav aria-label="breadcrumb" role="navigation">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="catalog.php">Category</a></li>
                        <li class="breadcrumb-item"><a href="food-map.php">Food</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Restaurant</li>
                         
                    </ol>
                </nav>
            </div>

            <div class=" container-fluid" id="js-propertiesWrap">
                <div class="row align-items-center col-12 mb-4 mb-lg-0">
                    <div class="col-2 col-md-3">
                        <ul class=" page-view nav float-left filter-list">
                                 <li class=" nav-item">
                                    <a class="nav-link view-map" href="restaurant.php">List</a>
                                </li> 
                                <li class="  nav-item">
                                    <a class="nav-link view-list" href="restaurant-map.php">Map</a>
                                </li>
                            </ul>
                      <center>  <h3>Restaurant</h3> </center>
                        
                 </div>
   

       




                    <div class="col-8 col-md-8 filter-list float-left"><font style="font-size:.1rem">
                         
        <label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input">
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Home Cooked</span>
                                                    </label>
<label class="checkbox-label">
                                                        <input type="checkbox" class="checkbox-input" checked disabled>
                                                        <span class="checkbox-indicator"></span>
                                                        <span class="checkbox-description checkbox-description_light">Restaurant</span>
                                                    </label></font>
<a href="#" class="col-2 btn btn-send" style="max-height:1.5rem;padding:0px"><font color="#fff" style="font-size=".09rem">Save Search</font></a>

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

                        
                          
                           

                           
                              
                               
                                                    

                            
                            


                        
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                           
                             <div class="pac-card" id="pac-card">
      
        
     
      
      
    	<?php 
			require 'restaurant-class.php';
			$edu = new education;
			$coll = $edu->getCollegesBlankLatLng();
			$coll = json_encode($coll, true);
			echo '<div id="data">' . $coll . '</div>';

			$allData = $edu->getAllColleges();
			$allData = json_encode($allData, true);
			echo '<div id="allData">' . $allData . '</div>';			
		 ?>
    <div id="map"></div>
    



    
</div>
    
                            </div>

                           
                              
                               
                                                    


<div class=' properties-catalog-wrap'>
                                                   



    
<?php
                                             
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM food WHERE cat='Restaurant'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        echo "
        
        
         
        

  <div class='catalog-list properties-catalog'>


 <div class='catalog-item'>
           <div class='product d-flex flex-column flex-md-row flex-wrap flex-md-nowrap flex-xl-nowrap flex-lg-wrap'>

<div class='col-12 d-flex flex-wrap flex-md-nowrap'>
                                                  
                                        <div class='product-prev col-5'>  <strong>
                                            
                                            " . $row2["name"]. "</strong>
                                               <br>" . $row2["cat"]. "<br>
                                                   
                                                       <img alt='' style='max-width:199px' class='rounded img-fluid'  src='food/photos/" . $row2["main_pic"] . "'>
                                                     </div>    <div class='product-body'>
                                                     <div class='product-price'>
                                           
                                                   
                                                      
                                                    </div>

                                                    <div class='product-name'>
                                                      
                                                    </div>
 Price Range:            " . $row2["price_range"]. " <br>
                                                      " . $row2["add2"]. " <br>
                                                         " . $row2["city"]. ", " . $row2["state"]. " " . $row2["zip"]. " <br>Delivery:&nbsp;" . $row2["delivery"]. "

                                                    <div class='product-settings col-7'>
                                                        
                                                    </div>
                                                </div>
                                            

                                            <div class='col-3'>
                                                <a class='btn btn-send' style='float:right' href='food-listing.php?id=".$row2["id"]."
                                                
                                                ' ><font color='#fff'>View details</font></a>
                                               
                                            </div>
                                        </div>                               
                                   
 </div> 
     "
     
     ?>
     
    
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

 </div></div></div>
</div>

</div></div>
      
      
      
<script>
function initialize() {
   loadMap();
   initAutocomplete();
}

</script>

<script 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFt-aPTyRNNhRmcczr344JpDllcSXffLk&libraries=places&callback=initialize"></script>
   

  
  
   





<?php




include 'includes/footer-none.php';
?>