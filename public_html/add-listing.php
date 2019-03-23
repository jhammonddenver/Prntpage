<?php
   
    include_once 'includes/header.php';
     include_once 'includes/navbar-map.php';
 if( !isset($_SESSION['id']) ){
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
                                    <form class="form authorization-form" action="includes/login.inc.php" method="post">
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
            
 
    
} else {
echo '

 <!-- Main content  : start -->
        <main class="page-content"> 

            <div class="add-listing">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page__title text-center">Add Listing</h2>
                        </div>
                    </div>
                    
                    <div class="tabs steps">
                        
                            <div class="row mt-4 mb-5">
                                <div class="col-3 col-sm-2 col-md-4 col-lg-4">
                                    <ul class="nav nav-tabs flex-column" id="myTabSteps" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center active save" id="step-1-tab" data-toggle="tab" href="#step-1" role="tab" aria-controls="step-1" aria-selected="true">
                                                <span class="steps-num">01</span>

                                                <span class="steps-name">Main Category</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center" id="step-2-tab" data-toggle="tab" href="#step-2" role="tab" aria-controls="step-2" aria-selected="false">
                                                <span class="steps-num">02</span>

                                                <span class="steps-name">Add Information</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center " id="step-3-tab" data-toggle="tab" href="#step-3" role="tab" aria-controls="step-3" aria-selected="false">
                                                <span class="steps-num">03</span>

                                                <span class="steps-name">Add Pics</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link d-flex align-items-center" id="step-4-tab" data-toggle="tab" href="#step-4" role="tab" aria-controls="step-4" aria-selected="false">
                                                <span class="steps-num"><i class="ico-step"></i></span>

                                                <span class="steps-name">Finished</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-9 col-sm-8 col-md-8 col-lg-8 ">
                                    <div class="tab-content" id="myTabContentSteps">

                                        <div class="tab-pane fade show active" id="step-1" role="tabpanel" aria-labelledby="step-1-tab">





                                            <div class="row add-listing__list pt-5">
                                                
                                                
                                                <div class="add-listing__item col-12 col-sm-6 col-md-3">
                                                    <a href="add-bnb.php" class="add-listing__link">
                                                        <div class="add-listing__ico">
                                                            <i class="fas fa-bed" syle="color:#fff;font-weight: 700;"></i>

                                                        </div>

                                                        <div class="add-listing__name">
                                                            BnBs
                                                        </div>
                                                    </a>
                                                </div>
                                                
                                                
                                                          <div class="add-listing__item col-12 col-sm-6 col-md-3">
                                                    <a href="add-food.php" class="add-listing__link">
                                                        <div class="add-listing__ico">
                                                            <i class="fa fa-utensils"></i>
                                                        </div>

                                                        <div class="add-listing__name">
                                                           Food
                                                        </div>
                                                    </a>
                                                </div>
                                                
                                                        <div class="add-listing__item col-12 col-sm-6 col-md-3">
                                                    <a href="add-hotel.php" class="add-listing__link">
                                                        <div class="add-listing__ico">
                                                            <i class="fas fa-hotel"></i>

                                                        </div>

                                                        <div class="add-listing__name">
                                                           Hotels
                                                        </div>
                                                    </a>
                                                </div>
                                                
                                                         <div class="add-listing__item col-12 col-sm-6 col-md-3">
                                                    <a href="add-items.php" class="add-listing__link">
                                                        <div class="add-listing__ico">
                                                           <i class="fa fa-shopping-cart"></i>
                                                        </div>

                                                        <div class="add-listing__name">
                                                            Items
                                                        </div>
                                                    </a>
                                                </div>
                                                
                                                    <div class="add-listing__item col-12 col-sm-6 col-md-3">
                                                    <a href="add-job.php" class="add-listing__link">
                                                        <div class="add-listing__ico">
                                                          <i class="fa fa-briefcase"></i>
                                                        </div>

                                                        <div class="add-listing__name">
                                                            Jobs
                                                        </div>
                                                    </a>
                                                </div>
                                                
                                                <div class="add-listing__item col-12 col-sm-6 col-md-3">
                                                    <a href="add-property.php" class="add-listing__link">
                                                        <div class="add-listing__ico">
                                                             <i class="fa fa-building"></i>
                                                        </div>

                                                        <div class="add-listing__name">
                                                            Properties
                                                        </div>
                                                    </a>
                                                </div>
                                                      <div class="add-listing__item col-12 col-sm-6 col-md-3">
                                                    <a href="add-service.php" class="add-listing__link">
                                                        <div class="add-listing__ico">
                                                         <i class="fa fa-diagnoses"></i>
                                                        </div>

                                                        <div class="add-listing__name">
                                                            Services
                                                        </div>
                                                    </a>
                                                </div>

         <div class="add-listing__item col-12 col-sm-6 col-md-3">
                                                    <a href="add-pets.php" class="add-listing__link">
                                                        <div class="add-listing__ico">
                                                            <i class="fa fa-paw"></i>
                                                        </div>

                                                        <div class="add-listing__name">
                                                            Pets & Livestock
                                                        </div>
                                                    </a>
                                                </div>
                                                
                                                
                                                <div class="add-listing__item col-12 col-sm-6 col-md-3">
                                                    <a href="add-social.php" class="add-listing__link">
                                                        <div class="add-listing__ico">
                                                            <i class="fa fa-globe-americas"></i>
                                                        </div>

                                                        <div class="add-listing__name">
                                                            Social
                                                        </div>
                                                    </a>
                                                </div>
                                                

                                                <div class="add-listing__item col-12 col-sm-6 col-md-3">
                                                    <a href="add-transportation.php" class="add-listing__link">
                                                        <div class="add-listing__ico">
                                                         <i class="fa fa-car"></i>
                                                        </div>

                                                        <div class="add-listing__name">
                                                            Transportation
                                                        </div>
                                                    </a>
                                                </div>

                                       

                                                

                                            

                                       
                                      

                                          

                                        


                                                <div class="add-listing__item col-12 col-sm-6 col-md-3">
                                                    <a href="add-video.php" class="add-listing__link">
                                                        <div class="add-listing__ico">
                                                          <i class="fa fa-play-circle"></i>
                                                        </div>

                                                        <div class="add-listing__name">
                                                            Videos
                                                        </div>
                                                    </a>
                                                </div>

                                            
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                            </div>

                                           
                                        </div>





<div class="tab-pane fade" id="step-2" role="tabpanel" aria-labelledby="step-2-tab">

                                            <div class="add-listing__information">
                                                <form class="form">

                                                    <div class="form-group">
                                                        <label class="label">Sub Category</label>

                                                        <select class="form-control custom-select " aria-describedby="mutedField1">
                                                            <option selected>-- choose one --</option>
                                                            <option value="value1">Category 1</option>
                                                            <option value="value2">Category 2</option>
                                                        </select>  

                                                        <small id="mutedField1" class="form-text text-muted">
                                                            Your public profile only shows your first name. When you request a booking, your host will see your first and last name.
                                                        </small>  

                                                        <div class="invalid-feedback">
                                                            Some Error Message
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="label" for="field-2">Title</label>

                                                        <input type="text" class="form-control" id="ield-2" required placeholder="Your title .." aria-describedby="mutedField2"> 

                                                        <small id="mutedField2" class="form-text text-muted">
                                                            Use English. Be descriptive and detailed as much as possible but use less than 80 characters. 
                                                        </small>  

                                                        <div class="invalid-feedback">
                                                            Some Error Message
                                                        </div>
                                                    </div>

                                                    <div class="form-group">        

                                                        <input type="text" class="form-control" required aria-describedby="mutedField3" id="field-3"> 

                                                        <label class="form-label" for="field-3">Price</label>

                                                        <small id="mutedField3" class="form-text text-muted">
                                                            Type 0 for price on request (P.O.R.) 
                                                        </small>  

                                                        <div class="invalid-feedback">
                                                            Some Error Message
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="label mb-2" >Wanted</label>

                                                        <div class="checkbox">
                                                            <label class="checkbox-label">
                                                                <input type="checkbox" class="checkbox-input">
                                                                <span class="checkbox-indicator"></span>
                                                                <span class="checkbox-description checkbox-description_light">Mark this listing as wanted. </span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="label">Area</label>

                                                        <select class="form-control custom-select " aria-describedby="mutedField4">
                                                            <option selected>-- choose one --</option>
                                                            <option value="value1">Category 1</option>
                                                            <option value="value2">Category 2</option>
                                                        </select>  

                                                        <small id="mutedField4" class="form-text text-muted">
                                                            Your public profile only shows your first name. When you request a booking, your host will see your first and last name.
                                                        </small>  

                                                        <div class="invalid-feedback">
                                                            Some Error Message
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="label">Island</label>

                                                        <select class="form-control custom-select " aria-describedby="mutedField5">
                                                            <option selected>-- choose one --</option>
                                                            <option value="value1">Category 1</option>
                                                            <option value="value2">Category 2</option>
                                                        </select>  

                                                        <small id="mutedField5" class="form-text text-muted">
                                                            Your public profile only shows your first name. When you request a booking, your host will see your first and last name.
                                                        </small>  

                                                        <div class="invalid-feedback">
                                                            Some Error Message
                                                        </div>
                                                    </div>

                                                    <div class="form-group">        

                                                        <input type="text" class="form-control" required aria-describedby="mutedField6" id="field-6"> 

                                                        <label class="form-label" for="field-6">Number of Bathrooms</label>

                                                        <small id="mutedField6" class="form-text text-muted">
                                                            Your public profile only shows your first name. When you request a booking, your host will see your first and last name. 
                                                        </small>  

                                                        <div class="invalid-feedback">
                                                            Some Error Message
                                                        </div>
                                                    </div>

                                                    <div class="form-group">        

                                                        <input type="text" class="form-control" required aria-describedby="mutedField7" id="field-7"> 

                                                        <label class="form-label" for="field-7">Number of Bedrooms</label>

                                                        <small id="mutedField7" class="form-text text-muted">
                                                            Your public profile only shows your first name. When you request a booking, your host will see your first and last name.
                                                        </small>  

                                                        <div class="invalid-feedback">
                                                            Some Error Message
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="label">Type</label>

                                                        <select class="form-control custom-select " aria-describedby="mutedField8">
                                                            <option selected>-- choose one --</option>
                                                            <option value="value1">Category 1</option>
                                                            <option value="value2">Category 2</option>
                                                        </select>  

                                                        <small id="mutedField8" class="form-text text-muted">
                                                            Your public profile only shows your first name. When you request a booking, your host will see your first and last name.
                                                        </small>  

                                                        <div class="invalid-feedback">
                                                            Some Error Message
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="field-9" class="label">Description</label>

                                                        <textarea class="form-control" id="field-9" placeholder="Description"></textarea>                               
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="row pt-1">
                                                <div class="col-6">
                                                    <a href="#" class="btn btn-back">Back</a>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <a href="#" class="btn btn-send">Next</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade " id="step-3" role="tabpanel" aria-labelledby="step-3-tab">

                                            <div class="add-listing__photo-editor mb-5">

                                                <div class="file-drop mb-5">
                                                    <div class="file-upload">
                                                        <input type="file" class="file-upload__input" id="photo-image" name="image" accept="image/jpg, image/jpeg, image/png, image/gif" multiple="">
                                                        
                                                        <label class="file-upload__label" for="photo-image">
                                                            <div class="d-flex photos-frame empty justify-content-center align-items-center text-center">
                                                                <div class="col-12">
                                                                    <div class="photos-frame__title">
                                                                        <span>Upload Photos</span>
                                                                        or drag them in
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>                                        

                                                <div class="file-container">
                                                    <div class="add-listing__photo-list">
                                                        <div class="file-container__top row no-gutters mb-4">
                                                            <div class="col-12 col-lg-6 mb-2 mb-lg-0">
                                                                <div class="add-listing__photo-item add-listing__photo-item_main">
                                                                    <img src="images/img-1.png" alt="" class="img-fluid">
                                                                </div>
                                                            </div>                      

                                                            <div class="col-12 col-lg-6">
                                                                <textarea class="add-listing__photo-description" placeholder="Добавьте подпись"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="file-container__body row">
                                                            <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                                <div class="add-listing__photo-item">
                                                                    <div class="media-file">
                                                                        <img src="images/img-1.png" alt="" class="img-fluid">

                                                                        <span class="media-file__view">Cover foto</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-4 mb-3 mb-md-0">
                                                                <div class="add-listing__photo-item">
                                                                    <div class="media-file">
                                                                        <img src="images/img-1.png" alt="" class="img-fluid">

                                                                        <span class="media-file__view">Cover foto</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-4">
                                                                <div class="file-upload h-100">
                                                                    <input type="file" class="file-upload__input" id="photo-image" name="image" accept="image/jpg, image/jpeg, image/png, image/gif" multiple="">
                                                                    
                                                                    <label class="file-upload__label h-100" for="photo-image">
                                                                        <div class="add-listing__photo-add d-flex justify-content-center align-items-center text-center h-100">
                                                                            <div class="file-upload__add">
                                                                                <span class="ico-plus"></span>

                                                                                Add foto
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </div>     
                                                </div>                                          
                                            </div>

                                            <div class="row">
                                                <div class="col-12 text-center text-md-right">
                                                    <a href="#" class="btn btn-send">Continue</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="step-4" role="tabpanel" aria-labelledby="step-4-tab">
                                            FINISH!
                                        </div>
                                                    
                </div> 
            </div>                          </div>

                                                    
                </div> 
            </div>
          ';
            
 
    
}  ?>
        </main> <!-- Main content  : end -->
        

 <?php 
       include_once 'includes/footer.php';
    ?>

