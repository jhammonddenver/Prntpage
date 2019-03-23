<?php
     include 'topbar.php'; 
?>  

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
                                                        <span class="ico-user">
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
                                                </ul>
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

