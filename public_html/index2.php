<?php
    session_start();
  require 'includes/header2.php';
  
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

               
                    <div class="d-md-none">

     
      
                           
                            
                            <a class="nav-link col-6 float-right" href="#">List</a>
                       
                            <a class="nav-link col-6 float-left" href="add-listing.php">Post</a>
                        
      
</div> 


















                           <div class="d-none d-md-block row col-12" style="max-height: 50px"> 
                           
                       
                           
                          
          
                              <ul class="navbar-nav col-3 float-right justify-content-right">
                         
                         
                          <li class="nav-item2 col-3">
                               <?php
        if (isset($_SESSION['id'])) {
          echo '
                            <a class="nav-link  " href="mylistings.php
">Manage</a>
                                         ';
        }
      
        ?>
                        </li>
        
                         
                           <li class="nav-item2 col-3">
                            <a class="nav-link " href="#">Publish</a>
                        </li>
                        <li class="nav-item2 col-3">
                            <a class="nav-link" href="add-listing.php">Listing </a>
                        </li>
          
                        
          
          
                          </ul>  
            
                                         
                
                            
                                         
          </div>     </div>        
                             
          </div>                               
               
           
        </nav> <!-- Page Navigation : end -->

  
  
  <?php
  
  
    require 'includes/gmap1.php';
    
    
    
    
    
  ?>  
    
    
      <div class="row col-12 ml-2 p-0" style="background-color:#31c677! important" >
        <hr><br>
       
    
   <div id="tab" class="pl-1  btn-group content-justify-center" data-toggle="buttons-radio">
              <a href="#properties" class="btn btn-large btn-success active col-sm-6 col-md-1 col-lg-2" data-toggle="tab">Properties</a>
              <a href="#bnbs" class="btn btn-large btn-success col-sm-6 col-md-1 col-lg-2" data-toggle="tab">BnBs</a>
              <a href="#food" class="btn btn-large btn-success col-sm-6 col-md-1 col-lg-2" data-toggle="tab">Food</a>
              <a href="#transportation" class="btn btn-large btn-success col-sm-6 col-md-1 col-lg-2"  data-toggle="tab">Transportation</a>
              
              
              
              <a href="#hotels" class="btn btn-large btn-success col-sm-6 col-md-1 col-lg-2" data-toggle="tab">Hotels & Motels</a>
              <a href="#pets" class="btn btn-large btn-success col-sm-6 col-md-1 col-lg-2" data-toggle="tab">Pets & Livestock</a>
              <a href="#items" class="btn btn-large btn-success col-sm-6 col-md-1 col-lg-2"  data-toggle="tab">Items for Sale</a>
              <a href="#jobs" class="btn btn-large btn-success col-sm-6 col-md-1 col-lg-2"  data-toggle="tab">Jobs</a>
              
              <a href="#services" class="btn btn-large btn-success col-sm-6 col-md-1 col-lg-2" data-toggle="tab">Services</a>
              <a href="#social" class="btn btn-large btn-success col-sm-6 col-md-1 col-lg-2" data-toggle="tab">Social</a>
              <a href="#videos" class="btn btn-large btn-success col-sm-6 col-md-1 col-lg-2"  data-toggle="tab">Videos</a>

            </div>
            <hr> 
            </div>
    
    
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
                                    <form class="form search-form">
                                        
                                          <select class="mt-2 col-2 search-options float-left" name="category" id="category">
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
                                            <input class=" pb-2 col-7 form-control  float-left" type="search" placeholder="Search" aria-label="Search" id="pageTop-search">    
                                        </label> 
                                        <button class="col-1 bg-light pt-3 pb-3 m-1 float-left search-btn" style="margin-left:-95px !important;" type="submit"></button>                       
                                    </form>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
    
    
    
    
    
    
    
    
    
  
            <div class="tab-content">
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

