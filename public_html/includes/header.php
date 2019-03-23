<?php
    session_start();
  require 'db_connect.php';
?>
<!DOCTYPE html >
<html itemscope itemtype="http://schema.org/Article">
  <head>
    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
       <title>Prntpage</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    
    
    
    
    <link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet"> 
   
   
   
   
   
   
   
   <link rel="stylesheet" href="styles/main.css"><script src="scripts/vendor/modernizr.js">
   
   
   
    
 <!-- For Google -->
<meta name="description" content="Prntpage is a Global Social Media and Peer to Peer Marketplace!" />
<meta name="keywords" content="prntpage, global social media, social media, peer to peer, peer to peer marketplace" />

<meta name="author" content="Prntpage" />
<meta name="copyright" content="2019" />
<meta name="application-name" content="Prntpage" />

<!-- For Facebook -->
<meta property="og:title" content="Prntpage" />

<meta property="fb:app_id" content="328930347866854" />




<meta property="og:type" content="website" />
<meta property="og:image" content="https://prntpage.com/earth-logo.png" />
<meta property="og:url" content="https://prntpage.com" />
<meta property="og:description" content="Prntpage is a Global Social Media and Peer to Peer Marketplace!" />

<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="Prntpage" />
<meta name="twitter:description" content="Prntpage is a Global Social Media and Peer to Peer Marketplace!" />
<meta name="twitter:image" content="https://prntpage.com/earth-logo.png" />




	<script type="text/javascript" src="js/googlemap.js"></script>



  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: none !important">
    <path id="dropdown" fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M9.717,-0.000 L5.500,4.351 L1.283,-0.000 L-0.000,1.324 L5.500,6.999 L11.000,1.324 L9.717,-0.000 Z" />
    <path id="dialog" fill-rule="evenodd" fill="rgb(248, 248, 248)" d="M22.000,21.000 L22.016,25.086 C22.016,25.456 21.794,25.789 21.453,25.930 C21.341,25.977 21.222,26.000 21.105,26.000 C20.867,26.000 20.634,25.907 20.460,25.732 L15.000,21.000 L4.000,21.000 C1.486,21.000 -0.000,18.519 -0.000,16.000 L-0.000,4.568 C-0.000,2.049 2.045,-0.000 4.558,-0.000 L21.442,-0.000 C23.955,-0.000 26.000,2.049 26.000,4.568 L26.000,16.005 C26.000,18.329 24.243,20.716 22.000,21.000 ZM24.000,5.000 C24.000,3.488 22.508,2.000 21.000,2.000 L5.000,2.000 C3.492,2.000 2.000,3.488 2.000,5.000 L2.000,16.000 C2.000,17.511 3.492,19.000 5.000,19.000 L15.000,19.000 C15.242,19.000 16.163,18.842 16.334,19.013 L20.000,23.000 L20.000,19.000 L21.000,19.000 C22.508,19.000 24.000,17.511 24.000,16.000 L24.000,5.000 ZM6.000,14.000 L6.000,13.000 L6.000,12.000 L20.000,12.000 L20.000,14.000 C20.000,14.000 18.503,14.000 18.000,14.000 L6.000,14.000 ZM6.000,8.000 L6.000,7.000 L20.000,7.000 L20.000,8.000 L20.000,9.000 L6.000,9.000 L6.000,8.000 Z" />
    <g id="send-message" width="25px" height="21px">
      <path fill-rule="evenodd" fill="rgb(238, 242, 245)" d="M0.012,-0.000 L-0.000,8.167 L17.857,10.500 L-0.000,12.833 L0.012,21.000 L25.000,10.500 L0.012,-0.000 Z" />
      <path fill="url(#PSgrad_0)" d="M0.012,-0.000 L-0.000,8.167 L17.857,10.500 L-0.000,12.833 L0.012,21.000 L25.000,10.500 L0.012,-0.000 Z" />
    </g>
  </svg>


 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none!important">
            <path id="dropdown" fill-rule="evenodd" d="M9.717,-0.000 L5.500,4.351 L1.283,-0.000 L-0.000,1.324 L5.500,6.999 L11.000,1.324 L9.717,-0.000 Z"/>
            <path id="dialog" fill-rule="evenodd" fill="rgb(248, 248, 248)" d="M22.000,21.000 L22.016,25.086 C22.016,25.456 21.794,25.789 21.453,25.930 C21.341,25.977 21.222,26.000 21.105,26.000 C20.867,26.000 20.634,25.907 20.460,25.732 L15.000,21.000 L4.000,21.000 C1.486,21.000 -0.000,18.519 -0.000,16.000 L-0.000,4.568 C-0.000,2.049 2.045,-0.000 4.558,-0.000 L21.442,-0.000 C23.955,-0.000 26.000,2.049 26.000,4.568 L26.000,16.005 C26.000,18.329 24.243,20.716 22.000,21.000 ZM24.000,5.000 C24.000,3.488 22.508,2.000 21.000,2.000 L5.000,2.000 C3.492,2.000 2.000,3.488 2.000,5.000 L2.000,16.000 C2.000,17.511 3.492,19.000 5.000,19.000 L15.000,19.000 C15.242,19.000 16.163,18.842 16.334,19.013 L20.000,23.000 L20.000,19.000 L21.000,19.000 C22.508,19.000 24.000,17.511 24.000,16.000 L24.000,5.000 ZM6.000,14.000 L6.000,13.000 L6.000,12.000 L20.000,12.000 L20.000,14.000 C20.000,14.000 18.503,14.000 18.000,14.000 L6.000,14.000 ZM6.000,8.000 L6.000,7.000 L20.000,7.000 L20.000,8.000 L20.000,9.000 L6.000,9.000 L6.000,8.000 Z"/>
            <path id="checkmark" fill-rule="evenodd" d="M5 16.577l2.194-2.195 5.486 5.484L24.804 7.743 27 9.937l-14.32 14.32 Z" />
        </svg>




<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>




    <script type="text/javascript" src="../libs/jquery/jquery-2.1.3.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" type="text/css" media="all" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
    <link href="../libs/font-awesome/css/all.css" rel="stylesheet">
 
    
    
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#2dad36">
<meta name="apple-mobile-web-app-title" content="Prntpage">
<meta name="application-name" content="Prntpage">
<meta name="msapplication-TileColor" content="#2dad36">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="theme-color" content="#2dad36">


    
    
	
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
         <script>
  

    
    
        </script>
   
 

<br><br>
         
 <?php
  $id = $_SESSION['id']; 
  $uid = $_SESSION['uid'];
  $fn = $_SESSION['fn'];
  $ln = $_SESSION['ln'];
  $email = $_SESSION['email'];
  $mailuid = $_SESSION['mailuid'];
  $phone = $_SESSION['phone'];
  $photo = $_SESSION['photo'];
  $add1 = $_SESSION['add1'];
  $add2 = $_SESSION['add2'];
  $city = $_SESSION['city'];
  $state = $_SESSION['state'];
  $zip = $_SESSION['zip'];
  $country = $_SESSION['country'];
  $userLevel = $_SESSION['ul'];
  $bd = $_SESSION['bd'];
  $user_from = $_SESSION['user_from'];
  $user_lives = $_SESSION['user_lives'];
  $sex = $_SESSION['sex'];
  $pref = $_SESSION['pref'];
  $currency = $_SESSION['currency'];
  $lang = $_SESSION['lang'];
  $lid = $_SESSION['lid'];
  $lmainphoto = $_SESSION['lmainphoto'];
  $lphoto1 = $_SESSION['lphoto1'];
  $lphoto2 = $_SESSION['lphoto2'];
  $lphoto3 = $_SESSION['lphoto3'];
  $lphoto4 = $_SESSION['lphoto4'];
  $lphoto5 = $_SESSION['lphoto5'];
  $lphoto6 = $_SESSION['lphoto6'];
  $lphoto7 = $_SESSION['lphoto7'];
  $lphoto8 = $_SESSION['lphoto8'];
  $lphoto9 = $_SESSION['lphoto9'];
  $lphoto10 = $_SESSION['lphoto10'];
  $lphoto11 = $_SESSION['lphoto11'];
  $lphoto12 = $_SESSION['lphoto12'];
  $lphoto13 = $_SESSION['lphoto13'];
  $lphoto14 = $_SESSION['lphoto14'];
  $lphoto15 = $_SESSION['lphoto15'];
  $lphoto16 = $_SESSION['lphoto16'];
  $lphoto17 = $_SESSION['lphoto17'];
  $lphoto18 = $_SESSION['lphoto18'];
  $lphoto19 = $_SESSION['lphoto19'];
  $lphoto20 = $_SESSION['lphoto20'];
  
  
  switch($userLevel)
 {
    case '0':
        include_once 'adminnav.php';
        break;
    case '1':
        include_once 'usernav.php';
        break;
    case '2';
        include_once 'managernav.php';
        break;
    case '3':
        include_once 'advertisenav.php';
        break;
    default:
        include_once 'guestnav.php';
        break;
 }
     
      include_once 'navbar-none.php';
   
   ?>

</nav>
</head>