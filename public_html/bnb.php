<?php
 include_once 'includes/header.php';
 $id = $_GET['id'];
$_SESSION['BnBid'] = $_GET['id'];
if( !isset($_SESSION['id']) ){
        $_SESSION['friend_req_id'] = $_SESSION['id'];
       
   echo '
    <div class="container ">
    <div class="row mt-3 justify-content-center">
    <center><h3>You must log in to continue.</h3> </center></div>
   <div class=" d-flex flex-column justify-content-center">
               
                    <div class="login row justify-content-center">
                   
                        <div class="col-12">
                        <p class="text-center">Thank you for stopping by.</p>
                            <div class="authorization-inner mx-auto">
                                <div class="col-12">                        
                                    <ul class="nav  ">
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-light " href="#">Sign In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-light" href="signup.php">Register</a>
                                        </li>
                                    </ul>                        
                                </div>

                                <div class="authorization-body">
                                    <form class="form authorization-form" action="includes/login.bnb.inc.php" method="post">
                                        <div class="authorization-form__top">
                                            <div class="form-group active">
                                                
                                                <input type="text" class="form-control"  name="mailuid" required>

                                                <label for="loginEmail" class="form-label">Email</label>

                                               

                                                
                                            </div>

                                            
                                            <div class="form-group">  
                                             <label  class="label">Password</label>
                                                <input type="password" class="form-control" name="pwd"  required>

                                                 

                                                

                                                      
                                            </div>                                    

                                            <div class="row justify-content-between align-items-center form-group no-gutters">
                                                <div class="col-12 col-md-6 mb-2 mb-md-0">                  
                                                    <div class="checkbox">
                                                        <label class="checkbox-label">
                                                            <input type="checkbox" class="checkbox-input" checked>
                                                            <span class="checkbox-indicator"></span>
                                                            <span class="checkbox-description">
                                                                Remember Me
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6 text-md-right">
                                                    <a href="#" class="form-link">
                                                        Forgot password?
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row justify-content-md-end">
                                                <div class="col-12 col-md-6 text-md-right">
                                                    <button type="submit" class="btn btn-send text-white" name="login-submit" >Sign In</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                    </form>
                                </div></div></div></div>
          ';
          include_once 'includes/footer.php';
            exit();
    
    } else {


 session_start();
include_once 'includes/header.php';
 $userid = $_SESSION['id']; 


$sql3 = "SELECT * FROM bnbs WHERE id='$id'";

$result3 = $conn->query($sql3);
$row3 = $result3->fetch_assoc();
$luid = $row3['listing_uid'];

$sql4 =  "SELECT * FROM users WHERE idUsers='$luid'";
$result4 = $conn->query($sql4);
$row4 = $result4->fetch_assoc();













?>






<div class="page-wrapper">
<div class='one-product'>
                <div class='container'>
                    <div class='row col-12'>
                        
                       
<?php



       
        echo "  
                           
                            
                            
                         <iframe width='100%' height='450' frameborder='0' style='border:0' src='https://www.google.com/maps/embed/v1/place?q="                                         . $row3["lat"] . ","                                         . $row3["lng"] . "&amp;key=AIzaSyCFt-aPTyRNNhRmcczr344JpDllcSXffLk'></iframe>    
                            
                            
                           </div> 
                      
                            
                            
                            
                            
                          
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-md-6 col-lg-4 mb-3 mb-lg-0'>
                            <div class='product-prev'>
                                
                                                           <img alt='' class='rounded img-fluid col-12' src='bnbs/photos/" . $row3["listing_main_photo"] . "'>
                                          </div> </div>
                       
                       

                        <div class='col-sm-12 col-md-5 col-lg-5 '>
                            <div class='product-body'>
                                                         
                              <h2 class='page__title  text-center  mb-2 mt-0'>
                              
                            "                                         . $row3["name"] . " </h2>
                                                    
        </div></br>
        
        
        
        <div class='row' >
          <div class=' col-sm-6 col-12'>
                                       <strong>  ". $row3["type"]. "</strong><br><br>
                   ". $row3["listing_add2"]. "<br>
                    ". $row3["listing_city"]. "   ". $row3["listing_state"]. "<br>
                     ". $row3["listing_country"]. "<br>
      
      
      </div>    </div>
                           </div>   
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                            <div style='height:390px; width:100px' class='contact-badge  col-12 col-md-2 col-lg-2 float-right'>
                                                                       
         <div class='agent-body content-justify-center text-center'>
             
             
             
     
                                    <div class='col-12'>
                                    <a href='profile.php?id=".$row3["listing_uid"]."'>
                                    
                                        <img height='100' width='100' style='border-radius: 50%' alt='' src='users/photos/" . $row4["user_photo"] . "'></a>
                                    </div>
                                    <div class='col-3>
                                        <div class='agent-name'>
                                          " . $row4["user_fn"] . "
                                        </div>
                                       
                                   
                    
        
                                          
                                            
                                            
                                        
                                    
                                </div><div class='col-12 content-justify-center'>

 <center>
  <a class='mt-2 btn btn-send' href='message.php?id=".$row3["listing_uid"]."'><font color='#fff'>Message</font></a>
                                            
                                            
                                                             <button type='button' class='btn btn-primary col-8' data-toggle='modal' data-target='#book'>
 Book
</button>
                              </center>
                              
                              
                             
                            
                             
                             
         

<!-- Modal -->
<div class='modal fade' id='book' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
  <div class='modal-dialog modal-dialog-centered' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
      
      ";
      
      
   
      
      
      
      
      echo"
      
        <h5 class='modal-title' id='exampleModalLongTitle'></h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <form class='form' action='check-out-bnb.php?id=".$id."' method='POST'>
      <div class='modal-body'>
       <label class='col-6 float-left label'>
       How many nights?
       </label>
       <input type='number' class='col-6 float-left form-control' name='nights' value='1'>
       </input>
       <br>
       
         <label class='col-6 float-left label'>
       How many guest?
       </label>
       <input type='number' class='col-6 float-left form-control' name='guests' value='1'>
       </input>
       <br>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        <button type='submit' class='btn btn-primary' name='next-submit'>Next</button></form>
      </div>
    </div>
  </div>
</div> 
                             
           ";                 
                             
                             
                             
                             
                             
                             
                             
                             
                             
                             
                             
                              
             echo"                 
                              
                                    </div><br>
                                    <div class='text-center mt-4' style='font-size:1.5rem'>                                               Only        ". $row3["listing_nightly"]. " a day
     
      </div>  
      
      <div class='row'>
      
        <ul class='col-12 pl-5 pt-2 ml-4 content-justify-center product-settings__list d-flex'>
                                        <li class='product-settings__item'>
                                            <span>
                                            
                                            " . $row3["listing_bedrooms"] . "
                                            
                                            </span>
                                            bd

                                            <i class='ico-bd'></i>
                                        </li>

                                        <li class='product-settings__item'>
                                            <span>
                                            
                                          " . $row3["listing_bathrooms"] ."
                                            
                                            </span>
                                            ba

                                            <i class='ico-ba'></i>
                                        </li>

                                      

                                       

                                        
                                    </ul>
      
      </div>
      
                           </div>
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
      
       <div style='overflow: auto; max-height: 400px;' class=' mx-auto col-11'>
       
       
       
       
      
            <h3>Description</h3><br> <p>
             ". $row3["listing_description"]. "
            </p>
            
            
            
                                
                            
  
            </div> 
            
            
            <div class=' col-sm-12 col-xs-12 text-center'>
            <br>
            
            
            
         
               </div>

                    
                     
            
            
           
                                       
        
      
                 
           
                
                   
                    

                
          
            
            
            
             <div class=' col-11  float-left mx-auto mb-5 mb-lg-2'>
                            
                            <h3 >Amenities</h3>
                            
                            <ul class='product-amenities__list d-flex flex-wrap mt-3 mb-3 '>
                                <li class='product-amenities__item'>
                                    Elevator
                                </li>
                                <li class='product-amenities__item disabled'>
                                    Dryer
                                </li>
                                <li class='product-amenities__item'>
                                    Heating
                                </li>   
                                <li class='product-amenities__item'>
                                    Indoor fireplace
                                </li>

                                <li class='product-amenities__item'>
                                    Internet
                                </li>
                                <li class='product-amenities__item'>
                                    Kitchen
                                </li>
                                <li class='product-amenities__item'>
                                    Hangers
                                </li>   
                                <li class='product-amenities__item'>
                                    Essentials
                                </li>

                                <li class='product-amenities__item'>
                                    Wireless Internet
                                </li>
                                <li class='product-amenities__item'>
                                    Pool
                                </li>
                                <li class='product-amenities__item'>
                                    Washer
                                </li>   
                                <li class='product-amenities__item'>
                                    TV
                                </li>

                                <li class='product-amenities__item'>
                                    Family/kid frendly
                                </li>
                                <li class='product-amenities__item'>
                                    Cable TV
                                </li>
                                <li class='product-amenities__item'>
                                    Iron
                                </li>   
                                <li class='product-amenities__item'>
                                    Paid parking off premises
                                </li>

                                <li class='product-amenities__item disabled'>
                                    Gym
                                </li>
                                <li class='product-amenities__item disabled'>
                                    Pets allowed
                                </li>
                                <li class='product-amenities__item'>
                                    Suitable for events
                                </li>   
                                <li class='product-amenities__item'>
                                    Free parking on street
                                </li>

                                <li class='product-amenities__item disabled'>
                                    Free parking on premises
                                </li>
                                <li class='product-amenities__item disabled'>
                                    Wheelchair accessible
                                </li>
                                <li class='product-amenities__item'>
                                    Laptop friendly workspace
                                </li>   
                                <li class='product-amenities__item'>
                                    Private entrance
                                </li>

                                <li class='product-amenities__item disabled'>
                                    Hot tub
                                </li>
                                <li class='product-amenities__item'>
                                    Breakfast
                                </li>
                                <li class='product-amenities__item'>
                                    Smoking allowed
                                </li>   
                                <li class='product-amenities__item'>
                                    Doorman
                                </li>

                                <li class='product-amenities__item'>
                                    Buzzer/wireless intercom
                                </li>
                                <li class='product-amenities__item'>
                                    Air conditioning
                                </li>
                                <li class='product-amenities__item'>
                                    Hair dryer
                                </li>
                            </ul>
                        </div>     

                    </div>
                
                      
            
            
       
 ";}
                       


$conn->close();



include_once 'includes/footer.php';
?>               
