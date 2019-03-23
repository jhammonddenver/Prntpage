<?php
    
    include_once 'includes/header.php';
  
   
?>

  <!-- Main content  : start -->
      

            <div class="admin">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page__title text-center">Create Account</h2>
                        </div>
                    </div>

                    <div class="profile">
                        <div class="row">
                            
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="profile__info">
                                    
       
      
      
                                 <div class="profile__info-top text-center">
                                        <div class="profile__img">
                                           
                                          
<img src="images/default-profile.png" />
  



                                        </div>

                                     
                                       
                                    </div>

                                                                     
                                </div>

                               
                            </div>
                            <div class="col-12 col-md-8 col-lg-9">
                               
                                <div class="profile__edit">

                                    <form class="form" action="includes/signup.inc.php" method="post">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">                     <label>First Name</label>                   
                                                    <input type="text"  class="form-control" name="first" required>

                                                

                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">                    <label>Last Name</label>
                                                    <input type="text"   class="form-control" name="last" required>


                                                 

                                                    
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="row row_select">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <input type="text"   class="form-control" name="gender" required>                                       

                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-row ">
                                                    <div class="col-lg-7">
                                                        <div class="form-bday">
                                                            <div class="form-group active">   
                                                            <label>Birthday</label>
                                                                <input type="date" class="form-control" name="bday"  required>


                                                             
                                                            </div>   

                                                                                                           
                                                        </div> 
                                                    </div>
                                                </div>                                               
                                            </div>
                                        </div> 

                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="mailuid"  required>
                                        
                                                   
                                         
                                                    
                                                </div>
                                            </div>
                                            
                                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Password</label>

                                                 
                                                    <input type="password"  class="form-control" name="pwd"  required>

                                            
                                                </div>  
                                         
                                        </div> 
                                                <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Password Repeat</label>

                                                 
                                                    <input type="password"  class="form-control" name="pwd-repeat"  required>

                                            
                                                </div>  
                                            
                                        </div> 
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="text" class="form-control" name="phone"  required>

                                                  
                                                </div>
                                            </div>
                                        </div>   
                                        
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Preferred Language</label>
                                                    <input type="text"  class="form-control" name="lang">
                                                   
                                                   
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Preferred Currency</label>

                                                 
                                                    <input type="text"  class="form-control" name="currency">

                                            
                                                </div>  
                                            </div>
                                        </div> 
                                        
                                        
                                

                                        <div class="row justify-content-md-end">
                                            <div class="col-12 col-lg-6 text-lg-right">
                                                <button type="submit" name="signup-submit">Save</button>
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
