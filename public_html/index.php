<?php
    session_start();
  require 'includes/header2.php';
  $id = $_SESSION['id'];
  ?>
  
  
  <style>
      .btn-success{
          background-color:#31c677!important;
          border-color:#31c677!important;
      }
  </style>
  
  
  <nav class="page-nav navbar navbar-expand-lg " style="background-color:#000!important">
            <div class="container-fluid row " id="navbarNav" style="background-color:#000!important">
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    
                </button>

               
                    <div class="d-md-none row col-12">

     
      
                               <?php
        if (isset($_SESSION['id'])) {
          echo '
                            <a class="nav-link float-left " href="mylistings.php
">Manage</a>
                                         ';
        }
      
        ?>
                            
                           
                     <a class="nav-link col-12" href="newsfeed.php?id=<?php echo $id?>">Bulletin Board</a>
                       
                            <a class="nav-link col-12" href="add-listing.php">Create Listing</a>
                            <a class="nav-link col-12" href="help.php">Help</a>
                        
      
</div> 


















                           <div class="d-none d-md-block row col-12" style="max-height: 50px"> 
                           
                       
                           <div class="col-8 float-left">
                          </div>
          
                              <ul class="navbar-nav col-4 float-left content-justify-center">
                          <li class="nav-item2 col-3 float-right">
                            <a class="nav-link" href="newsfeed.php?id=<?php echo $id?>">Bulletins</a>
                        </li>
                         
                          <li class="nav-item2 col-3 float-right">
                               <?php
        if (isset($_SESSION['id'])) {
          echo '
                            <a class="nav-link  " href="mylistings.php
">Manage</a>
                                         ';
        }
      
        ?>
                        </li>
        
                        
                          
                        <li class="nav-item2 col-5 float-right">
                            <a class="nav-link" href="add-listing.php">Create Listing </a>
                        </li>
            <li class="nav-item2 col-3 float-right">
                            <a class="nav-link" href="help.php">Help </a>
                        </li>
                        
          
          
                          </ul>  
            
                                         
                
                            
                                         
          </div>     </div>        
                             
          </div>                               
               
           
        </nav> <!-- Page Navigation : end -->

  
  
  <?php
  
  
    require 'includes/gmap1.php';
    
    
    
    
    
  ?>  
    
    <div class="d-none d-md-block">
      <div class="row " style="background-color:#31c677! important" >
        <hr><br>
       
    
   <div id="tab" class="  btn-group content-justify-center" data-toggle="buttons-radio">
       
              <a href="#home" class="btn btn-large btn-success  col-xs-12 col-sm-6 col-md-2 col-lg-2 float-left" data-toggle="tab">Home</a>
              <a href="#properties" class="active btn btn-large btn-success col-sm-6 col-md-2 col-lg-2" data-toggle="tab">Properties</a>
              <a href="#bnbs" class="btn btn-large btn-success col-sm-6 col-md-2 col-lg-2" data-toggle="tab">BnBs</a>
              <a href="#food" class="btn btn-large btn-success col-sm-6 col-md-2 col-lg-2" data-toggle="tab">Food</a>
              <a href="#transportation" class="btn btn-large btn-success col-sm-6 col-md-2 col-lg-2"  data-toggle="tab">Transportation</a>
              
              
              
              <a href="#hotels" class="btn btn-large btn-success col-sm-6 col-md-2 col-lg-2" data-toggle="tab">Hotels & Motels</a>
              <a href="#pets" class="btn btn-large btn-success col-sm-6 col-md-2 col-lg-2" data-toggle="tab">Pets & Livestock</a>
              <a href="#items" class="btn btn-large btn-success col-sm-6 col-md-2 col-lg-2"  data-toggle="tab">For Sale</a>
              <a href="#jobs" class="btn btn-large btn-success col-sm-6 col-md-2 col-lg-2"  data-toggle="tab">Jobs</a>
              
              <a href="#services" class="btn btn-large btn-success col-sm-6 col-md-2 col-lg-2" data-toggle="tab">Services</a>
              <a href="#social" class="btn btn-large btn-success col-sm-6 col-md-2 col-lg-2" data-toggle="tab">Social</a>
              <a href="#videos" class="btn btn-large btn-success col-sm-6 col-md-2 col-lg-2"  data-toggle="tab">Videos</a>

            </div>
            <hr> 
            </div></div>
    
    
    
    
     <div class="d-md-none">
      <div class="row " style="background-color:#31c677! important" >
        <hr><br>
       
    
   <div id="tab" class=" col-12" data-toggle="buttons-radio">
       
              <a href="#home" class="btn  btn-success  col-4 col-sm-6 col-md-2 col-lg-2 float-left" data-toggle="tab">Home</a>
              <a href="#properties" class="active btn  btn-success  col-4 float-left col-sm-6 col-md-2 col-lg-2" data-toggle="tab">Properties</a>
              <a href="#bnbs" class="btn  btn-success col-4 float-left  col-sm-6 col-md-2 col-lg-2" data-toggle="tab">BnBs</a><div class="row col-12">
              <a href="#food" class="btn  btn-success  col-6 float-left col-sm-6 col-md-2 col-lg-2" data-toggle="tab">Food</a>
              
              
              
              <a href="#transportation" class="btn  btn-success  col-6 float-left col-sm-6 col-md-2 col-lg-2"  data-toggle="tab">Transportation</a>
              
              
              
              <a href="#hotels" class="btn  btn-success col-6 float-left  col-sm-6 col-md-2 col-lg-2" data-toggle="tab">Hotels & Motels</a>
              <a href="#pets" class="btn  btn-success col-6 float-left  col-sm-6 col-md-2 col-lg-2" data-toggle="tab">Pets & Livestock</a></div><div class="row col-12">
              <a href="#items" class="btn  btn-success col-4 float-left  col-sm-6 col-md-2 col-lg-2"  data-toggle="tab">For Sale</a>
              <a href="#jobs" class="btn  btn-success  col-4 float-left col-sm-6 col-md-2 col-lg-2"  data-toggle="tab">Jobs</a>
              
              <a href="#services" class="btn  btn-success  col-4 float-left col-sm-6 col-md-2 col-lg-2" data-toggle="tab">Services</a></div><div class="row col-12">
              <a href="#social" class="btn  btn-success col-6 float-left  col-sm-6 col-md-2 col-lg-2" data-toggle="tab">Social</a>
              <a href="#videos" class="btn  btn-success col-6 float-left  col-sm-6 col-md-2 col-lg-2"  data-toggle="tab">Videos</a>

            </div> </div>
            <hr> 
            </div></div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="home">
                <div class="page-top  bg-1 d-flex flex-column justify-content-center mb-3">
                    <div class="container">
                        <div class="row mb-5">
                            <div class="col-12 text-center">
                               
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-12 col-md-7 m-0 p-0">
                                <div class="search">
                                    <form class="form search-form" action="includes/search.inc.php" method="POST">
                                        
                                          <select class="mt-2 col-10 col-md-2 search-options float-left" name="category" id="category">
			                <option value="Category">Category</option>
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
                                        
                                        <label for="pageTop-search" class="search-label">
                                            <input class=" pb-2 col-10 col-md-7 form-control  float-left" type="search" placeholder="Search" aria-label="Search" id="pageTop-search">    
                                        </label> 
                                        <button class="col-1 bg-light pt-3 pb-3 m-1 float-left search-btn" style="margin-left:-95px !important;" type="submit" name="search-submit"></button>                       
                                    </form>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
    
    
    
    
    
    
    
    
    
  
            <div class="tab-content">
                <div class="tab-pane" id="home">
               
               <h1>
               Coming Soon
               </h1>
              </div>
                
                
                
              <div class="tab-pane active" id="properties">
                <?php include_once 'includes/properties-tab.php'; ?>
              </div>
              <div class="tab-pane" id="bnbs">
                     <?php include_once 'includes/bnb-tab.php'; ?>
              </div>
              <div class="tab-pane" id="food">
                   
                   <?php include_once 'includes/food-tab.php'; ?>
              </div>
              <div class="tab-pane" id="transportation">
                  <?php include_once 'includes/transportation-tab.php'; ?>
              </div>
              
              
              <div class="tab-pane" id="hotels">
                  <?php include_once 'includes/hotels-tab.php'; ?>
              </div>
              <div class="tab-pane" id="pets">
                  <?php include_once 'includes/pets-tab.php'; ?>
              </div>
              <div class="tab-pane" id="items">
                  <?php include_once 'includes/items-tab.php'; ?>
              </div>
              <div class="tab-pane" id="jobs">
                  <?php include_once 'includes/jobs-tab.php'; ?>
              </div>
              <div class="tab-pane" id="services">
                  <?php include_once 'includes/services-tab.php'; ?>
              </div>
              <div class="tab-pane" id="social">
                  <?php include_once 'includes/social-tab.php'; ?>
              </div>
              <div class="tab-pane" id="videos">
                  <?php include_once 'includes/videos-tab.php'; ?>
              </div>
              
              
              
              
              
            </div>
        </div>
    

    
    
   <?php 
 
     require 'includes/footer.php';
?>

