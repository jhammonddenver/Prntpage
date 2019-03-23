<?php
     include 'topbar.php'; 
?>  

<script>
$(document).ready(function(){
	var $checkboxRemMe = $('input[name="rememberMe"]');
	$checkboxRemMe.change(function(){
		var checked = $(this).prop('checked');
		if (checked == false){
		  var $remember = 0;
		} else {
		    var $remember = 1;
		}
	});
});
</script>



                        <div class="page-header__settings text-lg-right">
                            
                               
                                
                        

                                    <div class="auth-user__item user-header">
                                        <a href="#" class="page-header__trigger dropdown-toggle caret" id="dropdownMenu-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="ico-user">
                                                <img src="images/user-xs.png" alt="">
                                            </span>
                                        </a>

                                        <div class="dropdown-menu auth-user__dropdown" aria-labelledby="dropdownMenu-2">
                                            <div class="user-header__info">
                                                <div class="row align-items-center">
                                                    <div class="col-3 col-md-3">
                                                        <span class="ico-user mt-0">
                                                            <img src="images/user-xs.png" alt="">
                                                        </span>
                                                    </div>
                                                    
                                                    <div class="col-9 col-md-9">
                                                        <div class="user-header__name">
                                                           Hello Guest!
                                                        </div>
                                                        <span class="user-header__email">
                                                            Sign up or login
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="user-header__list">
                                                <ul class="page-header__list">
                                                 <?php
        if (!isset($_SESSION['id'])) {
          echo ' <div class="authorization-body">
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
                                                            <input type="checkbox" name="rememberMe" class="checkbox-input" checked>
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
          <a href="signup.php" class="header-signup ml-5 pl-5">  Create Account</a>';
        }
      
        ?>
                                                </ul>
                                            </div>
                                             
                                    </div>
                                </div>
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>
            </div>
        </header> <!-- Page Header : end -->

  </head>

  <body>