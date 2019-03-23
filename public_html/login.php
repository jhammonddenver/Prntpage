<?php
   
    include_once 'includes/header.php';
   
?>

       
        <!-- Main content  : start -->
        <main class="page-content"> 

            <div class="authorization d-flex flex-column justify-content-center">
                <div class="container">
                    <div class="login row justify-content-center">
                        <div class="col-12">
                            <div class="authorization-inner mx-auto">
                                <div class="authorization-menu">                        
                                    <ul class="nav  ">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="login.php">Sign In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="signup.php">Register</a>
                                        </li>
                                    </ul>                        
                                </div>

                                <div class="authorization-body">
                                    <form class="form authorization-form">
                                        <div class="authorization-form__top">
                                          

                                            
                                                       <?php
        if (!isset($_SESSION['id'])) {
          echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="signup.php" class="header-signup">Create Account</a>';
        }
        else if (isset($_SESSION['id'])) {
          echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form>';
        }
        ?>                     

                                                     
                                               </div>                               

                                            <div class="row justify-content-between align-items-center form-group no-gutters">
                                              
<br>
                                                <div class="col-12 col-md-6 text-md-left">
                                                    <a href="fpassword.php" class="form-link">
                                                        Forgot your password?
                                                    </a>
                                                </div>
                                            </div>  </div>

                                            <div class="row justify-content-md-end">
                                                <div class="col-12 col-md-6 text-md-right">
                                                    
                                                </div>
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
