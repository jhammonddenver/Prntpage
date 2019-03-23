<?php
    
    include_once 'includes/header.php';
  
   
?>


  <div class="admin">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page__title text-center">Update Password</h2>
                        </div>
                    </div>

                    <div class="profile">
                        <div class="row">
                            
                            <div class="col-12 col-md-4 col-lg-3">
                               
                         
  

                                                                     
                                </div> </div>
                                <div class="col-12 col-md-8 col-lg-9">
                               
                                <div class="profile__edit">

                                    <form class="form" action="includes/changepassword.inc.php" method="post">
                                      
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">                     <label>Old Password</label>                   
                                                    <input type="password"  class="form-control" name="oldPassword" required>

                                                

                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">                    <label>New Password</label>
                                                    <input type="password"   class="form-control" name="newPassword" required>


                                                 

                                                    
                                                
                                            </div>
                                        </div> 

                                        <div class="row row_select">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Repeat Password</label>
                                                    <input type="password"   class="form-control" name="newPasswordRepeat" required >                                       

                                                </div>
                                            </div>
                                          
                                        </div> 

                                        </div>   
                                        

                                        <div class="row justify-content-md-end">
                                            <div class="col-12 col-lg-6 text-lg-right">
                                                <button type="submit" class="btn btn-send" name="changepassword-submit">Save</button>
                                                <button type="reset" class="btn btn-reset">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                                  
             
           
        </main> <!-- Main content  : end -->





 <?php
       include_once 'includes/footer.php';
    ?>
