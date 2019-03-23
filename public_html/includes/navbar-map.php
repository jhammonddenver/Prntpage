 <nav class="page-nav navbar navbar-expand-lg ">
            <div class="container-fluid row " id="navbarNav" style="background-color:#000!important">
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    
                </button>

               
                    <div class="d-md-none">
<form action="includes/search.php" method="POST" id="mobile-search2">
			          
			           <select class="mobile-search-options row col-12 " name="category" id="category">
			                <option value="Category">  Category</option>
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
      
                         
                               <?php
        if (isset($_SESSION['id'])) {
          echo '
                            <a class="nav-link  " href="mylistings.php
">Manage</a>
                                         ';
        }
      
        ?>
                          
<a class="nav-link" href="newsfeed.php?id=<?php echo $id?>">Bulletin Board </a>
                       
                            <a class="nav-link col-6 float-left" href="add-listing.php">Create Listing</a>
                            
                            <a class="nav-link col-3 float-left" href="help.php">Help</a>
                        
                        
      
</div> 


















                          <div class="d-none d-md-block row col-12" style="max-height: 50px"> 
                            
                           
                       
                           
                           <form class="col-7 float-left" action="includes/search.php" method="POST" id="search2">
                               
                                 
			          
			           <select class="search-options col-5 float-left" name="category" id="category">
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
                        
                      
                            <input style="background-color:white!important;" class=" col-7 float-left" type="text" placeholder="Search" name="search" id="search">
      <button class="col-1 search-button2 float-left pb-1 " name="search-button2" type="submit">

<i class="fas fa-search"></i></button>
      </form> 
      
          
                                <div class="col-7  float-left">
                          </div>
          
                              <ul class="navbar-nav col-8 float-left content-justify-center">
                          <li class="nav-item2 col-8 float-right content-justify-right text-right">
                            <a class="nav-link float-right" href="newsfeed.php?id=<?php echo $id?>">Bulletins</a>
                        </li>
                         
                          <li class="nav-item2 col-2 float-right">
                               <?php
        if (isset($_SESSION['id'])) {
          echo '
                            <a class="nav-link  " href="mylistings.php
">Manage</a>
                                         ';
        }
      
        ?>
                        </li>
        
                        
                          
                        <li class="nav-item2 col-2 float-right">
                            <a class="nav-link" href="add-listing.php">Create Listing </a>
                        </li>
            <li class="nav-item2 col-2 float-right">
                            <a class="nav-link" href="help.php">Help </a>
                        </li>
                        
          
          
                          </ul>  
            
                                         
                
                            
                                         
          </div>     </div>        
                             
          </div>                               
               
           
        </nav> <!-- Page Navigation : end -->


