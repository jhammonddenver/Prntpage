<?php

include_once 'includes/header.php';

$id = $_GET['id'];

$sql3 = "SELECT * FROM videos WHERE id='$id'";

$result3 = $conn->query($sql3);
$row3 = $result3->fetch_assoc();
$luid = $row3['uid'];

$sql4 =  "SELECT * FROM users WHERE idUsers='$luid'";
$result4 = $conn->query($sql4);
$row4 = $result4->fetch_assoc();
?>


<div class="page-wrapper">
                     
                       
<?php

        echo "  
                    <div class='row'>
                        <div class='col-md-12 col-lg-12'>
                            <div class='product-prev'>
                                
                                                            <video width='1920' height='1080'  loop controls>
  <source src='videos/".$row3["file"]."' >
 
Your browser does not support the video tag.
</video> 
                                          </div> </div></div>
                        
<div class='row'>
                        <div class='col-sm-12 col-md-9 col-lg-9 ml-5 pl-5'>
                            <div class='product-body'>
                            
                              <h2 class='page__title  text-center  mb-2 mt-0'>
                            "                                         . $row3["vid_title"] . " </h2>
                                                    
        </div></br>
        
        
        
        
          <div class=' col-6'>
          
          <i> ". $row3["vid_category_main"]. "</i><br>
                                       <strong>  ". $row3["vid_description"]. "</strong><br>
                                                    
     
      
      
      
      </div>
      
       
            
            
         

                    
                       
            
            
           
                       
                           </div>                   
        
      
                 
           
                
                   <div class='contact-badge  col-sm-12 col-md-2 col-lg-2 float-right'>
                                                                       
         <div class='agent-body '>
             
             
             
     
                                    <div class='col-12'>
                                        <img alt='' class='rounded img col-6' src='users/photos/" . $row4["user_photo"] . "'>
                                    </div>
                                    <div class='col-3>
                                        <div class='agent-name'>
                                          " . $row4["user_fn"] . "
                                        </div>
                                        <div class='agent-address'>
                                            " . $row4["user_ln"] . "
                                        </div>
                                   
                         
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
 <a class='btn btn-send' style='float:right' href='profile.php?id=".$row3["uid"]."'><font color='#fff'>Profile</font></a>
                                            
                              
                                    </div>
                                
                           </div>
                       
                    

                
          
              </div>
            
         

                    </div>
                
                      
            
            
       
 ";
                       


$conn->close();




?>               
