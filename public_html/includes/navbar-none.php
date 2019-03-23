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
