<?php
    
    include_once 'includes/header.php';
  
   
?>


  <div class="admin">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page__title text-center">Enter Location</h2>
                        </div>
                    </div>

                    <div class="profile">
                        <div class="row">
                            
                            <div class="col-12 col-md-4 col-lg-3">
                               
                         
  

                                                                     
                                </div> </div>
                                <div class="col-12 col-md-8 col-lg-9">
                               
                                <div class="profile__edit">

                                    <form class="form" action="includes/enterlocation.inc.php" method="post">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">                     <label>Address 1</label>                   
                                                    <input type="text"  class="form-control" name="add1" required>

                                                

                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">                    <label>Address 2</label>
                                                    <input type="text"   class="form-control" name="add2">


                                                 

                                                    
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="row row_select">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text"   class="form-control" name="city" required >                                       

                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-row ">
                                                    <div class="col-lg-7">
                                                        <div class="form-bday">
                                                            <div class="form-group active">   
                                                            <label>State</label>
                                                                <input type="text" class="form-control" name="state"  required>


                                                             
                                                            </div>   

                                                                                                           
                                                        </div> 
                                                    </div>
                                                </div>                                               
                                            </div>
                                        </div> 

                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Zip</label>
                                                    <input type="text" class="form-control" name="zip"  required>
                                        
                                                   
                                         
                                                    
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" name="country"  required >

                                                  
                                                </div>
                                            </div>
                                        </div>   
                                        

                                        <div class="row justify-content-md-end">
                                            <div class="col-12 col-lg-6 text-lg-right">
                                                <button type="submit" class="btn btn-send" name="enterlocation-submit">Save</button>
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
