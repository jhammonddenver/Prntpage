<?php
    
    include_once 'includes/header.php';
  
   



  
  
  
  $sql = "SELECT * FROM homes WHERE listing_uid='$id';";
   $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
          $_SESSION['listing_id'] = $row['listing_id'];
          $_SESSION['description'] = $row['listing_description'];
          $_SESSION['title'] = $row['listing_title'];
          $_SESSION['weekly'] = $row['listing_weekly'];
          $_SESSION['monthly'] = $row['listing_monthly'];
          $_SESSION['nightly'] = $row['listing_nightly'];
          $_SESSION['purchase'] = $row['listing_purchase'];
          $_SESSION['rules'] = $row['listing_rules'];
          $_SESSION['amenities'] = $row['listing_amenities'];
          $_SESSION['photo'] = $row['listing_main_photo'];
          $_SESSION['bedrooms'] = $row['listing_bedrooms'];
          $_SESSION['bathrooms'] = $row['listing_bathrooms'];
         
          mysqli_stmt_close($stmt);
          mysqli_close($conn);
          
  ?>    
    <!-- Main content  : start -->

            <div class="admin">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page__title text-center">Edit Profile</h2>
                        </div>
                    </div>

                    <div class="profile">
                        <div class="row">
                            
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="profile__info">
                                    
       
       <form action="includes/housing-upload.inc.php" method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <button type="submit" name="submit">Upload</button>
        </form>
      
                                 <div class="profile__info-top text-center">
                                        <div class="profile__img">
      <?php                                      
                                          
if ($photo == 0){
    echo "<img src='users/photos/housing-".$id.".jpg?".mt_rand()."' />";
} else {
    echo '<img src="/images/default-profile.png" />';
}
?>

                                        </div>

                                        <div class="profile__name">
                                            <?php echo "{$_SESSION['fn']} {$_SESSION['ln']}"; ?>
                                        </div>
                                        <span class="profile__address">
                                             <?php echo "{$_SESSION['add1']}  {$_SESSION['add2']}, 
                                             {$_SESSION['city']}, {$_SESSION['state']}, {$_SESSION['zip']}"; ?>
                                        </span>
                                       
                                    </div>

                                                                     
                                </div>

                                <ul class="admin__list">
                                   
                                    <li class="admin__item">
                                        <a href="#" class="admin__link">Photos and Videos</a>
                                    </li>
                                  
                                    <li class="admin__item">
                                        <a href="#" class="admin__link">Reviews</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-8 col-lg-9">
                               
                                <div class="profile__edit">

                                    <form class="form" action="includes/edithousing.inc.php" method="post">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">                                         
                                                    <input type="text"  class="form-control" name="title" required value=" <?php echo "{$_SESSION['title']}"; ?>">

                                                

                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">                    
                                                    <input type="text"   class="form-control" name="discription" required value=" <?php echo "{$_SESSION['description']}"; ?>">


                                                 

                                                    
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="row row_select">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <input type="text"   class="form-control" name="nightly" required value=" <?php echo "{$_SESSION['nightly']}"; ?>">                                       

                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-row ">
                                                    <div class="col-lg-7">
                                                        <div class="form-bday">
                                                            <div class="form-group active">   
                                                                <input type="text" class="form-control" name="weekly"  required value=" <?php echo "{$_SESSION['weekly']}"; ?>">


                                                             
                                                            </div>   

                                                                                                           
                                                        </div> 
                                                    </div>
                                                </div>                                               
                                            </div>
                                        </div> 

                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    
                                                    <input type="email" class="form-control" name="monthly"  required value =" <?php echo "{$_SESSION['monthly']}"; ?>">
                                        
                                                   
                                         
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    
                                                    <input type="text" class="form-control" name="purchase"  required value=" <?php echo "{$_SESSION['purchase']}"; ?>">

                                                  
                                                </div>
                                            </div>
                                        </div>   
                                        
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    
                                                    <input type="text"  class="form-control" name="rules"  required value=" <?php echo "{$_SESSION['rules']}"; ?>">
                                                   
                                                   
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    
                                                    <input type="text"  class="form-control" name="amenities"  required value=" <?php echo "{$_SESSION['amenities']}"; ?>">

                                            
                                                </div>  
                                            
                                        </div> 
                                        
                                             <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    
                                                    <input type="text"  class="form-control" name="bedrooms"  required value=" <?php echo "{$_SESSION['bedrooms']}"; ?>">

                                            
                                                </div>  
                                            
                                        </div> 
                                             <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    
                                                    <input type="text"  class="form-control" name="bathrooms"  required value=" <?php echo "{$_SESSION['bathrooms']}"; ?>">

                                            
                                                </div>  
                                            
                                        </div> 
                                            

                                        <div class="row justify-content-md-end">
                                            <div class="col-12 col-lg-6 text-lg-right">
                                                <button type="submit" name="edithousing-submit">Save</button>
                                                <button type="reset" class="btn btn-reset">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div> 
            </div>  

        </main> <!-- Main content  : end -->


 <?php
       include_once 'includes/footer.php';
    ?>
