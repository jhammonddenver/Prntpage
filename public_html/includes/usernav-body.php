<?php
     include 'topbar.php'; 
?>
                        <div class="page-header__settings text-lg-right">
                            <div class="auth-user">
                                <!-- <div class="auth-user__entrance">
                                    <ul class=" nav">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="/users/login">Log In</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="/users/signup">Sign Up</a>
                                        </li>
                                    </ul>
                                </div> -->
                                
                                <div class="auth-user__list">
                                    <div class="auth-user__item page-notif">
                                        <a href="#" class="page-header__trigger dropdown-toggle" id="dropdownMenu-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ico-notif"></i>
                                        </a>

                                        <div class="dropdown-menu auth-user__dropdown" aria-labelledby="dropdownMenu-0">
                                            <ul class="page-header__list">
                                                <li class="page-header__item">
                                                    <a href="#" class="page-header__link">
                                                        Lorem ipsum.
                                                    </a>
                                                </li>
                                                <li class="page-header__item">
                                                    <a href="#" class="page-header__link">
                                                        Lorem ipsum dolor.
                                                    </a>
                                                </li>
                                                <li class="page-header__item">
                                                    <a href="#" class="page-header__link">
                                                        Lorem.
                                                    </a>
                                                </li>
                                                <li class="page-header__item">
                                                    <a href="#" class="page-header__link">
                                                        Logout
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="auth-user__item page-note">
                                        <a href="#" class="page-header__trigger dropdown-toggle" id="dropdownMenu-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ico-note"></i>
                                        </a>

                                        <div class="dropdown-menu auth-user__dropdown" aria-labelledby="dropdownMenu-1">                                    
                                            <ul class="page-header__list">
                                                <li class="page-header__item">
                                                    <a href="#" class="page-header__link">
                                                        Lorem ipsum.
                                                    </a>
                                                </li>
                                                <li class="page-header__item">
                                                    <a href="#" class="page-header__link">
                                                        Lorem ipsum dolor.
                                                    </a>
                                                </li>
                                                <li class="page-header__item">
                                                    <a href="#" class="page-header__link">
                                                        Lorem.
                                                    </a>
                                                </li>
                                                <li class="page-header__item">
                                                    <a href="#" class="page-header__link">
                                                        Logout
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

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
                                                   <?php echo "Welcome {$_SESSION['fn']}!"; ?>
                                                        </div>
                                                        <span class="user-header__email">
                                                            Have a Great Day!
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="user-header__list">
                                                <ul class="page-header__list">
                                                     <li class="page-header__item">
                                                        <a href="change-password.php" class="page-header__link">
                                                           Change Password
                                                        </a>
                                                    </li>
                                                    <li class="page-header__item">
                                                        <a href="add-listing.php" class="page-header__link">
                                                            Create a Listing
                                                        </a>
                                                    </li>
                                                    <li class="page-header__item">
                                                        <a href="edit-profile.php" class="page-header__link">
                                                            Edit Profile
                                                        </a>
                                                    </li>
                                                     <li class="page-header__item">
                                                        <a href="enter-location.php" class="page-header__link">
                                                        Edit Location
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="page-header__item">
                                                        <a href="notifications.php" class="page-header__link">
                                                            Notifications
                                                        </a>
                                                    </li>
                                                    <li class="page-header__item">
                                                        <a href="/includes/logout.inc.php" class="page-header__link">
                                                            Logout
                                                        </a>
                                                    </li>
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
        </header> 
        