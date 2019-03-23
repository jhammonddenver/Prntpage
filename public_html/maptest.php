
<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
       <title>Prntpage</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    
    <meta name="description" content="">   

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 500px;
        width: 100%;
      }
    
    </style>
    <div class="project">   
        <!-- Page Header : start -->
        <header class="page-header">            
            <div class="navbar navbar-expand-lg align-items-center">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img src="images/logo.png" alt="Printpage">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 18c1.657 0 3 1.343 3 3s-1.343 3-3 3-3-1.343-3-3 1.343-3 3-3zm0-9c1.657 0 3 1.343 3 3s-1.343 3-3 3-3-1.343-3-3 1.343-3 3-3zm0-9c1.657 0 3 1.343 3 3s-1.343 3-3 3-3-1.343-3-3 1.343-3 3-3z"/></svg>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTop">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="properties.php">Properties</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle caret" href="#"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Other Services</a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="items.php">Items</a>
                                    <a class="dropdown-item" href="vehicles.php">Vehicles</a>
                                    <a class="dropdown-item" href="other.php">Other</a>
                                </div>
                            </li>
                        </ul>
                        
                        <div class="search">
                            <form class="form search-form">
                                <label for="page-search" class="search-label">
                                    <input class="form-control search-control" type="search" placeholder="Search" aria-label="Search" id="page-search">                                    
                                </label>  
                                <button class="search-btn" type="submit"></button>
                            </form>
                        </div>   

                        <div class="page-header__settings text-lg-right">
                            <div class="auth-user">
                                <div class="auth-user__entrance">
                                    <ul class=" nav">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="/login.php">Log In</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="signup.php">Sign Up</a>
                                        </li>
                                    </ul>
                                </div>
                                
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
                                                            Taras Petriichuk
                                                        </div>
                                                        <span class="user-header__email">
                                                            petriichuk@gmail.com
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="user-header__list">
                                                <ul class="page-header__list">
                                                    <li class="page-header__item">
                                                        <a href="#" class="page-header__link">
                                                            Create a team
                                                        </a>
                                                    </li>
                                                    <li class="page-header__item">
                                                        <a href="#" class="page-header__link">
                                                            Setting
                                                        </a>
                                                    </li>
                                                    <li class="page-header__item">
                                                        <a href="#" class="page-header__link">
                                                            Notifications
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
    <div id="map"></div>

    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-33.863276, 151.207977),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;
        
         if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    
  


    <!-- Page Footer : start -->
        <footer class="page-footer page-footer_dark">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright text-center">
                            2017 © Prntpage. All rights reserved
                        </div>
                    </div>
                </div>
            </div>
        </footer> <!-- Page Footer : end -->
    </div>

    <!--[if lt IE 9]>
        <script src="libs/html5shiv/es5-shim.min.js"></script>
        <script src="libs/html5shiv/html5shiv.min.js"></script>
        <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
        <script src="libs/respond/respond.min.js"></script>
    <![endif]-->

    <!-- build:css js/vendor.js --> 
      <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFt-aPTyRNNhRmcczr344JpDllcSXffLk&callback=initMap">
    </script>
        <script src="libs/jquery/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="libs/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- endbuild -->   

</body>
</html>