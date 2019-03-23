<?php

include_once 'includes/header.php';

$id = $_GET['id'];

$sql3 = "SELECT * FROM homes WHERE id='$id'";

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
                                
                                                           <img alt='' class='rounded img-fluid col-12' src='properties/photos/" . $row3["listing_main_photo"] . "'>
                                          </div> </div>
                        

                        <div class='col-sm-12 col-md-5 col-lg-5 '>
                            <div class='product-body'>
                            
                              <h2 class='page__title  text-center  mb-2 mt-0'>
                            "                                         . $row3["name"] . " </h2>
                                                    
        </div></br>
        
        
        
        <div class='row' >
          <div class=' col-sm-6 col-xs-12'>
                                       <strong>  ". $row3["listing_home_type"]. "</strong><br>
                                       
                                       ";
                                       if ($row3["listing_purchase"] != NULL){
                                       echo"
                                                    $". $row3["listing_purchase"]. " to buy.";}
                                                    
                                                   if ($row3["listing_monthly"] != NULL){ 
                                                    
                                                    echo "
                                                    <br>$". $row3["listing_monthly"]. " per month.<br>
                                                       
                                                      "; 
                                                   }
                                                     if ($row3["listing_weekly"] != NULL){ 
                                                    
                                                    echo "
                                                    
                                                    $". $row3["listing_weekly"]. " a week. <br>
                                                    
                                                       "; 
                                                   }
                                                    
                                                     if ($row3["listing_nightly"] != NULL){ 
                                                    
                                                    echo "
                                                    
                                                    
                                                    
                                                    $". $row3["listing_nightly"]. " a day.
     
        "; 
                                                   }
      
      echo"
      </div>
      
       <div class=' col-sm-6 col-xs-12'>
                                    <ul class='col-3 product-settings__list d-flex'>
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
            
            
            <div class=' col-sm-12 col-xs-12 text-center'>
            <br>
            <p>
            
             ". $row3["listing_description"]. "
            </p>
            
            
             </div>
               </div>

                    
                       
            
            
           
                       
                           </div>                   
        
      
                 
           
                
                   <div class='contact-badge  col-sm-12 col-md-2 col-lg-2 float-left'>
                                                                       
         <div class='agent-body '>
             
             
             
     
                                    <div class='col-12'><a href='profile.php?id=".$row3["listing_uid"]."'>
                                        <img alt='' class='rounded img col-6' src='users/photos/" . $row4["user_photo"] . "'>
                                    </div>
                                    <div class='col-3>
                                        <div class='agent-name'>
                                          " . $row4["user_fn"] . "
                                        </div>
                                        <div class='agent-address'>
                                            " . $row4["user_ln"] . "
                                        </div> </a>
                                   
                         
                                    <div class=' no-gutters col-2 float-left'>
                                        <div class=' contact-badge__phone d-flex flex-column align-items-start justify-content-between'>
                                            <ul>
                                                <li>
                                                " . $row3["listing_contact_phone"] . "
                                                </li>
                                            </ul>

                                           
                                        </div>                                                               

                                        <div class='col-6 col-lg-6 col-xl-6 contact-badge__mail d-flex flex-column  justify-content-between'>
                                        
                                        <a href='mailto:". $row3["listing_contact_email"] . "?Subject=RE:". $row3["name"] . "' class='contact-badge__link'>
                                            <i class='ico-mail'></i>

                                            Send email</a>
                                            
                                            </div></div>
                                           <br><br><br><br>
                                            
                                            
                                        
                                    
                                </div><div class='col-12'>
 

 
 
  <a class='mt-1 btn btn-send' style='float:right' href='message.php?id=".$row3["listing_uid"]."'><font color='#fff'>Message</font>
                                 </a>
                                            
                              
                                    </div>
                                
                           </div>
                       
                    

                
          
            
            
            
             <div class=' container col-12 text-center mb-5 mb-lg-2'>
                            
                            <h3 >Amenities</h3>
                            
                            <ul class='product-amenities__list d-flex flex-wrap mt-3 mb-3'>
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
                
                      
            
            
       
 ";
                       


$conn->close();



include_once 'includes/footer.php';
?>               
