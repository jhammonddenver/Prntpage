 <?php
include_once 'includes/header.php';
    if( !isset($_SESSION['id']) ){
        $_SESSION['friend_req_id'] = $_SESSION['id'];
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
          include_once 'includes/footer.php';
            exit();
    
    } else {
    include_once 'includes/header.php';
   $id = $_GET['id'];
   
   
   $userid = $_SESSION['id'];
  
   $sql4 =  "SELECT * FROM users WHERE idUsers='$id'";
  
$result4 = $conn->query($sql4);

$row4 = $result4->fetch_assoc();


 $sql5 =  "SELECT * FROM friends WHERE uid='$id' AND friend_id='$userid' OR friend_id='$id' AND uid='$userid'";
 $result5 = $conn->query($sql5);


$sql4456DT =  "DELETE FROM friends WHERE friend_id='0'";
 $result4456DT = $conn->query($sql4456DT);
 
 
 
 
 



 $sqlDelPost =  "DELETE FROM post WHERE deleted='1'";
 $resultDelPost = $conn->query($sqlDelPost);


 
 $sqlPostUser = "SELECT * FROM post WHERE uid='$id' ORDER BY created DESC";
 $resultPostUser = $conn->query($sqlPostUser);







 
 
  $_SESSION['refer_id'] = $id ;
 



if ($result5->num_rows > 0) {


$friendCheck = Yes;
}
else {
    $friendCheck = No;
}









 $sql5990 =  "SELECT * FROM friend_req WHERE uid='$id' AND req_uid='$userid'";
 $result5990 = $conn->query($sql5990);
 
 
 
 
 $sql44577T =  "DELETE FROM friend_req WHERE req_uid='0'";
 $result44577T = $conn->query($sql44577T);

if ($result5990->num_rows > 0) {


$friendReqCheck = Yes;
}
else {
    $friendReqCheck = No;
}













 $sql7 =  "SELECT * FROM followers WHERE uid='$id' AND follower_id='$userid' ";
 $result7 = $conn->query($sql7);
 
 $sql445T =  "DELETE FROM followers WHERE follower_id='0'";
 $result445T = $conn->query($sql445T);

if ($result7->num_rows > 0) {


$followCheck = Yes;
}
else {
    $followCheck = No;
}













 $sql72 =  "SELECT * FROM blocked WHERE uid='$id' AND blocked_uid='$userid'";
 $result72 = $conn->query($sql72);
  $sql4456T =  "DELETE FROM blocked WHERE uid='0'";
 $result4456T = $conn->query($sql4456T);

if ($result72->num_rows > 0) {

$row72 = $result72->fetch_assoc();
$blockCheck = Yes;
$blocker = $row72['uid'];
}
else {
    $blockCheck = No;
}





 $sql73 =  "SELECT * FROM blocked WHERE uid='$userid' AND blocked_uid='$id'";
 $result73 = $conn->query($sql73);

if ($result73->num_rows > 0) {

$row73 = $result73->fetch_assoc();
$blockerCheck = Yes;
$blocker = $id;
}
else {
    $blockerCheck = No;
}







$addressDB = $row4["user_address"];
$ladd1 = $row4["user_add1"];
$ladd2 = $row4["user_add2"];
$lcity = $row4["user_city"];
$lstate = $row4["user_state"];
$lcountry = $row4["user_country"];
$lzip = $row4["user_zip"];

if (empty($addressDB)){
    
    
     $laddress = $ladd1." ".$ladd2.", ".$lcity.", ".$lstate.", ".$lcountry.", ".$lzip; 
  
    
    
    $sql65 = "UPDATE users SET user_address='$laddress' WHERE idUsers='$id'";

$updateAdd = $conn->query($sql65);
    
}


$bday = $row4["user_bday"];
$bmonth = $row4["user_bmonth"];
$byear = $row4["user_byear"];


switch ($bmonth) {
    case "January":
        $bNumMonth = 1;
        break;
    case "February":
        $bNumMonth = 2;
        break;
    case "March":
       $bNumMonth = 3;
        break;
        
          case "April":
        $bNumMonth = 4;
        break;
    case "May":
        $bNumMonth = 5;
        break;
    case "June":
       $bNumMonth = 6;
        break;
        
        
           case "July":
        $bNumMonth = 7;
        break;
    case "August":
        $bNumMonth = 8;
        break;
    case "September":
       $bNumMonth = 9;
        break;
        
          case "October":
        $bNumMonth = 10;
        break;
    case "November":
        $bNumMonth =  11;
        break;
    case "December":
       $bNumMonth = 12;
        break;
        
        
}
}










 
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $bNumMonth, $bday, $byear))) > date("md")
    ? ((date("Y") - $byear) - 1)
    : (date("Y") - $byear));
  
$sql6 = "UPDATE users SET user_age='$age' WHERE idUsers='$id'";

$updateAge = $conn->query($sql6);




if ($blockCheck == "Yes"){
    echo '
    <span style="background-color:red; min-height:42rem;width:98%!important" class="text-white text-center container content-justify-center row  ml-3 mt-5 mb-0">
    <h1 class="mt-5 pt-5 col-12 text-center align-middle"><center><br>
    Unfortunately, this user has blocked you.
    </h1></center>
    </span></div>
    ';
    include_once 'includes/footer.php';
            exit();
}



if ($blockerCheck == "Yes"){
    echo '
    <div style="background-color:red;min-height:40rem;" class="page-wrapper">
    <span style="background-color:red; min-height:40rem;width:98%!important" class="text-white text-center container content-justify-center   ml-3 mt-5 mb-0">
    <h1 class="mt-5 pt-5 col-12 text-center "><center><br>
    You have blocked this User.
    </h1></center><br><br>
  
  <form class="row col-12" method="POST" action="includes/unblock.inc.php">
            
             <input type="hidden" class=" field" name="friendid"
        id="friendid" value="'."$id". '"></input>
        
        
        <div class=" col-5"></div>
        
        
<button type="submit" name="unblock-submit" class="ml-4 col-1 btn btn-warning  text-white">Unblock</button>

</form> 
    
    
    
    
    
    
    
    </span></div>
    ';
    include_once 'includes/footer.php';
            exit();
}
 











?>


<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>prntpage</title>
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="styles/main.css">
        <script src="scripts/vendor/modernizr.js"></script>
        </head>
        <body>
            <!--[if IE]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]--> 
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none!important">
                <path id="dropdown" fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M9.717,-0.000 L5.500,4.351 L1.283,-0.000 L-0.000,1.324 L5.500,6.999 L11.000,1.324 L9.717,-0.000 Z"/>
                <path id="dialog" fill-rule="evenodd" fill="rgb(248, 248, 248)" d="M22.000,21.000 L22.016,25.086 C22.016,25.456 21.794,25.789 21.453,25.930 C21.341,25.977 21.222,26.000 21.105,26.000 C20.867,26.000 20.634,25.907 20.460,25.732 L15.000,21.000 L4.000,21.000 C1.486,21.000 -0.000,18.519 -0.000,16.000 L-0.000,4.568 C-0.000,2.049 2.045,-0.000 4.558,-0.000 L21.442,-0.000 C23.955,-0.000 26.000,2.049 26.000,4.568 L26.000,16.005 C26.000,18.329 24.243,20.716 22.000,21.000 ZM24.000,5.000 C24.000,3.488 22.508,2.000 21.000,2.000 L5.000,2.000 C3.492,2.000 2.000,3.488 2.000,5.000 L2.000,16.000 C2.000,17.511 3.492,19.000 5.000,19.000 L15.000,19.000 C15.242,19.000 16.163,18.842 16.334,19.013 L20.000,23.000 L20.000,19.000 L21.000,19.000 C22.508,19.000 24.000,17.511 24.000,16.000 L24.000,5.000 ZM6.000,14.000 L6.000,13.000 L6.000,12.000 L20.000,12.000 L20.000,14.000 C20.000,14.000 18.503,14.000 18.000,14.000 L6.000,14.000 ZM6.000,8.000 L6.000,7.000 L20.000,7.000 L20.000,8.000 L20.000,9.000 L6.000,9.000 L6.000,8.000 Z"/>
                <g id="send-message" width="25px" height="21px"><path fill-rule="evenodd" fill="rgb(238, 242, 245)" d="M0.012,-0.000 L-0.000,8.167 L17.857,10.500 L-0.000,12.833 L0.012,21.000 L25.000,10.500 L0.012,-0.000 Z"/>
                <path d="M0.012,-0.000 L-0.000,8.167 L17.857,10.500 L-0.000,12.833 L0.012,21.000 L25.000,10.500 L0.012,-0.000 Z"/></g>
                <path id="confirm-profile" fill-rule="evenodd" d="M1.814,16.536 C2.244,16.883 2.598,17.319 2.563,17.615 C2.543,17.792 2.532,17.972 2.532,18.155 C2.532,20.850 4.721,23.034 7.420,23.034 C7.753,23.034 8.078,23.000 8.393,22.937 C8.923,22.830 9.549,23.037 9.923,23.441 C10.815,24.400 12.086,25.001 13.500,25.001 C14.993,25.001 16.330,24.332 17.227,23.277 C17.583,22.858 18.186,22.684 18.722,22.840 C19.155,22.966 19.613,23.034 20.087,23.034 C22.786,23.034 24.974,20.849 24.974,18.155 C24.974,17.854 24.946,17.559 24.892,17.273 C24.801,16.791 25.043,16.191 25.447,15.815 C26.402,14.926 27.001,13.661 27.001,12.254 C27.001,10.722 26.292,9.357 25.185,8.463 C24.755,8.116 24.402,7.680 24.436,7.384 C24.456,7.207 24.467,7.027 24.467,6.844 C24.467,4.149 22.279,1.965 19.580,1.965 C19.246,1.965 18.921,1.999 18.606,2.062 C18.077,2.169 17.451,1.962 17.076,1.558 C16.184,0.599 14.914,-0.002 13.500,-0.002 C12.086,-0.002 10.815,0.599 9.923,1.558 C9.549,1.962 8.923,2.169 8.393,2.062 C8.078,1.999 7.753,1.965 7.420,1.965 C4.721,1.965 2.532,4.150 2.532,6.844 C2.532,7.103 2.553,7.358 2.593,7.607 C2.660,8.025 2.357,8.540 1.918,8.876 C0.752,9.766 -0.001,11.167 -0.001,12.745 C-0.001,14.277 0.707,15.642 1.814,16.536 ZM6.965,12.922 C7.073,12.736 7.350,12.733 7.604,12.947 L10.153,14.691 C10.292,14.773 10.424,14.814 10.551,14.814 C10.814,14.814 11.022,14.630 11.223,14.453 L19.382,6.526 C19.892,5.987 20.389,5.798 20.712,6.004 C20.862,6.100 20.959,6.243 20.984,6.409 C21.015,6.606 20.944,6.818 20.785,7.006 L10.974,18.573 C10.832,18.740 10.651,18.833 10.464,18.833 C10.243,18.833 10.042,18.704 9.913,18.478 L7.034,13.440 C6.914,13.252 6.888,13.056 6.965,12.922 Z"/>
                  <path id="smile" fill-rule="evenodd" d="M20.647,3.812 C15.965,-1.064 8.348,-1.064 3.667,3.811 C-1.015,8.686 -1.015,16.619 3.667,21.495 C8.348,26.369 15.965,26.369 20.647,21.494 C25.328,16.619 25.328,8.687 20.647,3.812 ZM19.337,20.130 C15.378,24.253 8.935,24.254 4.976,20.131 C1.016,16.007 1.017,9.298 4.976,5.175 C8.935,1.052 15.377,1.052 19.337,5.175 C23.297,9.298 23.296,16.007 19.337,20.130 ZM7.678,9.269 C7.678,8.462 8.307,7.807 9.081,7.807 C9.856,7.807 10.485,8.462 10.485,9.269 C10.485,10.076 9.856,10.730 9.081,10.730 C8.307,10.730 7.678,10.076 7.678,9.269 ZM14.041,9.269 C14.041,8.462 14.670,7.807 15.445,7.807 C16.220,7.807 16.849,8.462 16.849,9.269 C16.849,10.076 16.220,10.730 15.445,10.730 C14.670,10.730 14.041,10.076 14.041,9.269 ZM17.359,15.254 C16.489,17.349 14.452,18.702 12.170,18.702 C9.839,18.702 7.790,17.342 6.951,15.237 C6.807,14.876 6.971,14.463 7.317,14.313 C7.402,14.276 7.490,14.259 7.577,14.259 C7.843,14.259 8.096,14.423 8.205,14.695 C8.833,16.270 10.389,17.288 12.170,17.288 C13.910,17.288 15.458,16.269 16.113,14.693 C16.262,14.334 16.661,14.169 17.005,14.325 C17.349,14.480 17.508,14.896 17.359,15.254 Z" />
                <path id="photo" fill-rule="evenodd" d="M30.000,25.000 L2.000,25.000 C0.861,25.000 -0.000,24.153 -0.000,23.000 L-0.000,5.000 C-0.000,3.847 0.861,3.000 2.000,3.000 L3.000,3.000 L3.000,2.000 L3.000,1.000 L8.000,1.000 L8.000,2.000 L8.000,3.000 L11.000,3.000 L11.000,-0.000 L21.000,-0.000 L21.000,3.000 L30.000,3.000 C31.139,3.000 32.000,3.847 32.000,5.000 L32.000,23.000 C32.000,24.153 31.139,25.000 30.000,25.000 ZM2.000,19.000 L4.000,19.000 L4.000,10.000 L2.000,10.000 L2.000,19.000 ZM19.000,2.000 L13.000,2.000 L13.000,3.000 L19.000,3.000 L19.000,2.000 ZM30.000,10.000 L28.000,10.000 L28.000,19.000 L30.000,19.000 L30.000,10.000 ZM30.000,22.000 L30.000,21.000 L28.000,21.000 C27.620,21.000 26.000,21.000 26.000,21.000 L26.000,8.000 L30.000,8.000 L30.000,6.000 C30.000,5.616 30.000,5.000 30.000,5.000 L25.000,5.000 C24.998,5.000 21.000,5.000 21.000,5.000 C21.000,5.000 18.002,5.000 18.000,5.000 L2.000,5.000 C2.000,5.000 2.000,5.616 2.000,6.000 L2.000,8.000 L6.000,8.000 L6.000,21.000 L2.000,21.000 L2.000,23.000 L3.000,23.000 L29.000,23.000 C29.380,23.000 30.000,23.000 30.000,23.000 L30.000,22.000 ZM16.000,22.000 C11.468,22.000 8.000,18.587 8.000,14.000 C8.000,9.413 11.468,6.000 16.000,6.000 C20.532,6.000 24.000,9.413 24.000,14.000 C24.000,18.587 20.532,22.000 16.000,22.000 ZM16.000,7.000 C12.189,7.000 9.000,10.143 9.000,14.000 C9.000,17.857 12.189,21.000 16.000,21.000 C19.811,21.000 23.000,17.857 23.000,14.000 C23.000,10.143 19.811,7.000 16.000,7.000 ZM16.000,20.000 C13.172,20.000 10.000,16.862 10.000,14.000 C10.000,11.138 13.172,8.000 16.000,8.000 C18.828,8.000 22.000,11.138 22.000,14.000 C22.000,16.862 18.828,20.000 16.000,20.000 ZM16.000,10.000 C13.856,10.000 12.000,11.830 12.000,14.000 C12.000,16.170 13.856,18.000 16.000,18.000 C18.144,18.000 20.000,16.170 20.000,14.000 C20.000,11.830 18.144,10.000 16.000,10.000 ZM16.000,12.959 C15.286,12.959 14.706,13.547 14.706,14.269 C14.706,14.616 14.428,14.897 14.086,14.897 C13.743,14.897 13.466,14.616 13.466,14.269 C13.466,12.855 14.603,11.705 16.000,11.705 C16.342,11.705 16.620,11.985 16.620,12.332 C16.620,12.678 16.342,12.959 16.000,12.959 Z"/>
                <path id="dots" fill-rule="evenodd" d="M22.500,5.000 C21.119,5.000 20.000,3.881 20.000,2.500 C20.000,1.119 21.119,-0.000 22.500,-0.000 C23.881,-0.000 25.000,1.119 25.000,2.500 C25.000,3.881 23.881,5.000 22.500,5.000 ZM12.500,5.000 C11.119,5.000 10.000,3.881 10.000,2.500 C10.000,1.119 11.119,-0.000 12.500,-0.000 C13.881,-0.000 15.000,1.119 15.000,2.500 C15.000,3.881 13.881,5.000 12.500,5.000 ZM2.500,5.000 C1.119,5.000 -0.000,3.881 -0.000,2.500 C-0.000,1.119 1.119,-0.000 2.500,-0.000 C3.881,-0.000 5.000,1.119 5.000,2.500 C5.000,3.881 3.881,5.000 2.500,5.000 Z"/>
                <path id="like" fill-rule="evenodd" d="M26.311,13.420 C26.739,12.947 27.000,12.322 27.000,11.639 C27.000,10.166 25.489,9.000 24.000,9.000 L19.000,9.000 C19.519,7.441 20.000,5.887 20.000,5.000 L20.000,4.000 C20.000,2.036 18.185,-0.000 16.200,-0.000 L15.300,-0.000 C14.887,-0.000 14.527,0.278 14.427,0.675 L13.937,2.616 C13.250,5.334 11.257,8.455 9.000,9.000 C8.605,8.009 7.140,7.000 6.000,7.000 L1.000,7.000 C0.503,7.000 -0.000,7.584 -0.000,8.076 L-0.000,24.000 C-0.000,24.492 0.503,25.000 1.000,25.000 L6.000,25.000 C7.073,25.000 8.565,24.900 9.000,24.000 L12.000,25.000 C12.000,25.000 13.894,25.000 14.960,25.000 L22.500,25.000 C24.707,25.031 25.000,23.000 25.000,23.000 L25.010,21.343 C25.010,21.343 27.000,19.995 27.000,18.765 C27.000,18.081 26.739,17.457 26.311,16.983 C26.739,16.510 27.000,15.885 27.000,15.202 C27.000,14.518 26.739,13.894 26.311,13.420 ZM7.000,22.000 C7.000,22.491 6.496,23.000 6.000,23.000 L2.000,23.000 L2.000,9.000 L6.000,9.000 C6.496,9.000 7.000,9.509 7.000,10.000 L7.000,22.000 ZM23.500,14.311 L24.300,14.311 C24.796,14.311 25.000,14.509 25.000,15.000 C25.000,15.491 24.796,16.093 24.300,16.093 L23.500,16.093 C23.003,16.093 23.000,16.508 23.000,17.000 C23.000,17.492 23.003,17.874 23.500,17.874 L24.300,17.874 C24.796,17.874 25.000,18.509 25.000,19.000 C25.000,19.491 24.796,19.655 24.300,19.655 L23.500,19.655 C23.003,19.655 22.000,20.508 22.000,21.000 C22.000,21.492 23.003,21.437 23.500,21.437 C23.996,21.437 23.400,21.837 23.400,22.328 C23.400,22.819 22.496,23.000 22.000,23.000 L15.000,23.000 C14.128,23.000 12.827,23.273 12.000,23.000 L9.000,21.686 L9.000,11.000 C10.412,10.734 11.794,9.514 13.041,8.065 C14.259,6.651 15.247,4.776 15.683,3.048 L16.000,2.000 L17.000,2.000 C17.992,2.000 18.000,2.581 18.000,3.563 L18.000,4.453 C18.000,5.649 17.484,7.976 17.000,9.000 L15.000,9.000 L15.000,10.000 L15.000,11.000 L24.000,11.000 C24.496,11.000 25.200,11.148 25.200,11.639 C25.200,12.130 24.796,12.530 24.300,12.530 L23.500,12.530 C23.003,12.530 23.000,12.508 23.000,13.000 C23.000,13.492 23.003,14.311 23.500,14.311 Z"/>
                <path id="comment" fill-rule="evenodd" d="M23.000,-0.000 L4.000,-0.000 C1.953,-0.000 -0.000,1.940 -0.000,4.000 L-0.000,16.000 C-0.000,18.056 1.959,19.993 4.000,20.000 L4.000,25.000 L12.000,20.000 L23.000,20.000 C25.047,20.000 27.000,18.060 27.000,16.000 L27.000,4.000 C27.000,1.940 25.047,-0.000 23.000,-0.000 L23.000,-0.000 ZM25.000,16.000 C25.000,17.182 24.174,18.000 23.000,18.000 L11.000,18.000 L6.000,21.000 L6.000,18.000 L4.000,18.000 C2.825,18.000 2.000,17.182 2.000,16.000 L2.000,4.000 C2.000,2.818 2.825,2.000 4.000,2.000 L23.000,2.000 C24.174,2.000 25.000,2.818 25.000,4.000 L25.000,16.000 Z"/></svg>
               
                                                                                
                                                                                
                                                                                <section class=" container page-content page-content-profile">
                                                                                    <div class="row ">
                                                                                    <div class="col-12">
                                                                                       <img style="width:100%; max-height:300px;" src="images/cover-img.jpg" alt="#"> 
                                                                                    </div>
                                                                                    <div class=" page-content-profile-wrap d-flex">
                                                                                        <aside class="page-content-nav profile-page-content-nav text-center animated-fadeIn">
                                                                                            <div class="profile-img-wrap">
                                                                                                 <img style="background-color:white !important;" height="175" width="175" src="users/photos/<?php echo "{$row4['user_photo']}"; ?> ">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="27px" height="25px">
                                                                                                <use xlink:href="#confirm-profile"/></svg></div>
                                                                                                <p class="profile-name">
                                                                                                <?php echo "{$row4['user_fn']} {$row4['user_ln']}"; ?>
                                                                                                
                                                         </p> <br>                                <p class="col-12">       
                                                                                                 <?php echo "{$row4['user_city']}, {$row4['user_state']}"; ?>
                                                                                               
                                                 </p>                                              
                                                                                               
                                                                                               
                                                                                               
                                                                                               
                                                                                               
                                                                                               
                                                                                               
                                                                                                                                       
<?php
if (($id != $userid)&& ($blockCheck == 'No')){
    echo"
    
    
      <a style='width:50px; !important' class=' float-left   ml-4'  href='message.php?id=
      ".$id."
      '><i style='color:red;' class='far fa-comments'></i></a>
    ";
    }
    
    if ($id == $userid){
         echo" 
      <div class=' row col-12'>
       
       <a class='col-12 btn-info text-white' href='edit-profile.php'>Edit Profile</a>  
       
       "; }
    
    
    
    
    
    if (($friendCheck == 'Yes')&& ($blockCheck == 'No')) {
        
    echo'    
<div style="width:50px !important;" class="ml-4 float-left">
  <form method="POST" action="includes/unfriend.inc.php">
            
             <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$id". '"></input>
<button  style="background:transparent; border-style: hidden !important;" type="submit" name="unfriend-submit" class="float-left"><i class="fas fa-user-minus"></i></button>

</form> </div>
';
    }  
    

           if (($followCheck == 'No')&&($id != $userid) && ($blockCheck == 'No')) 
    
    {
        echo '

<div style="width=50px !important;" class="ml-4 float-left">
  <form method="POST" action="includes/follow.inc.php">
            
             <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$id". '"></input>
<button style="background:transparent; border-style: hidden !important;" type="submit" name="follow-submit" class="float-left" ><i class="fas fa-users"></i></button>

</form> </div>

        ';

    
    }




   if (($followCheck == 'Yes')&&($id != $userid) && ($blockCheck == 'No')) 
  
        {
        echo '

<div style="width="50px !important" class="ml-4 float-left">
  <form method="POST" action="includes/unfollow.inc.php">
            
             <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$id". '"></input>
<button style="background:transparent; border-style: hidden !important;"  type="submit" name="unfollow-submit" class="float-left" ><i style="color:red;" class="fas fa-users"></i></button>

</form> </div>

        ';

    
    }
            
            
            


    
     if ($friendReqCheck == 'Yes')
    
    {
        echo '
        
        <div style="50px !important;" class="ml-4 float-left">
            <form method="POST" action="includes/cancel.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$id". '"></input>
            
<button style="background:transparent; border-style: hidden !important;" type="submit" class="float-left" name="cancel-submit"><i style="color:red !important;" class="fas fa-user-times"></i></button></form></div>



  ';}
 
    
     if (($friendReqCheck == 'No')&&($id != $userid) && ($friendCheck == 'No') && ($blockCheck== 'No')) 
  
        {
        echo '

<div style="width:50px !important;" class=" ml-4 float-left">
  <form method="POST" action="includes/friend.inc.php">
            
             <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$id". '"></input>
<button style="background:transparent; border-style: hidden !important;" type="submit" name="friend-submit" class=" float-left"><i class="fas fa-user-plus"></i></button>

</form> </div>

        ';

    
    }
 
 
 
 
 
 
            
            
            
            
               if (($id != $userid) && ($blockCheck == 'No') && ($blockerCheck = 'No'))
    
    {
                
                                   echo '     
                                        
                                    <div style="width:50px !important;" class="ml-4 float-left">
  <form method="POST" action="includes/block.inc.php">
            
             <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$id". '"></input>
<button style="background:transparent; border-style: hidden !important;" type="submit" name="block-submit" class="float-left"><i class="fas fa-times-circle"></i></button>

</form> </div>  
';}?>

                                                                                               
                                                                                               
                                                                                               </aside>
                                                         </div>                                      <div class=" col-9 float-left page-content-profile-feed animated-fadeIn">
                                                                                                     <div class="form post-form">
                                                                                                            <textarea style="min-width: 90%" name="post-form" placeholder="What's on your mind?"></textarea>
                                                                                                            <a href="#" class="post-form-btn">
                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="26px">
                                                                                                                    <use xlink:href="#smile"/></svg> </a>
                                                                                                                    <a href="#" class="post-form-btn">
                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="25px">
                                                                                                                            <use xlink:href="#photo"/></svg> </a><a href="#" class="post-form-btn">
                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="21px">
                                                                                                                                    <defs><linearGradient id="PSgrad_0" x1="100%" x2="0%" y1="0%" y2="0%"><stop offset="0%" stop-color="rgb(46,204,113)" stop-opacity="1"/>
                                                                                                                                    <stop offset="100%" stop-color="rgb(0,158,162)" stop-opacity="1"/></linearGradient></defs><use xlink:href="#send-message"/></svg>
                                                                                                                                    </a></div>
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                
                                                                               
                        
<?php


        
                         if ($resultPostUser->num_rows > 0) {
    
    
    
    
     

    while($rowPostUser = $resultPostUser->fetch_assoc()) {
        
        
         $poster = $rowPostUser['uid'];
        $deleted = $rowPostUser['deleted'];
        $postid = $rowPostUser['id'];
        
        $postTitle = $rowPostUser['title'];
        $postBody = $rowPostUser['body'];
        
        
        
         $sqlPostReply = "SELECT * FROM post_reply WHERE post_id='$postid' ORDER BY created DESC";
 $resultPostReply = $conn->query($sqlPostReply);
            

            
            echo '             
                                                                
                                                                                                                                    <div class="page-content-profile-post">
                                                                                                                                        <div class="page-content-profile-post-author">
                                                                                                                                            <div class="page-content-profile-post-author-img">
                                                                                                                                               <img style=" border-radius: 50%;" alt="" height="50" width="50" src="/users/photos/'.$row4['user_photo'].'">
                                                                                                                                                </div><span class="page-content-profile-post-author-name">'.$row4['user_fn'].' '.$row4['user_ln'].'</span>
                                                                                                                                                <span class="page-content-profile-post-author-time">
                                                       '.$rowPostUser['created'].'   
                                                                                               </span> 
                                                                                                                                                <button class="page-content-profile-post-dropdown-btn">
                                                                                                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25px" height="5px"><use xlink:href="#dots"/></svg>
                                                                                                                                                    </button></div><div class="page-content-profile-post-content">
                                                                                                                                                        <p>
                                                                                                             '.$rowPostUser['body'].'                                             
                                                                                                                                                        </p>
                                                                                                                                                        
                                                                                                                                                        <div class="page-content-profile-post-controls d-flex ai-c">
                                                                                                                                                            <button class="page-content-profile-post-btn like d-flex ai-c">
                                                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="27px" height="25px">
                                                                                                                                                                    <use xlink:href="#like"/></svg> like</button> <button class="page-content-profile-post-btn comment d-flex ai-c">
                                                                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="27px" height="25px">
                                                                                                                                                                            <use xlink:href="#comment"/></svg> comment</button><div class="counter"><span>  '.$rowPostUser['likes'].'    Like</span>
                                                                                                                                                                            <span>  '.$rowPostUser['replies'].'    Comments</span></div></div></div>                                
                                             ';
        
        
            if ($resultPostReply->num_rows > 0) {
    
    

    while($rowPostReply = $resultPostReply->fetch_assoc()) {
        $postReplierUID = $rowPostReply['uid'];
        $sqlgetreplyuser = "SELECT * from users where idUsers='$postReplierUID'";
        $resultgetreplyuser = $conn->query($sqlgetreplyuser);
        $rowgetreplyuser = $resultgetreplyuser->fetch_assoc();
        
        if ($postReplierUID != $id){
        
echo'




   <div class="messager mb-5">
                <div class="message-author ml-5">
                  <div class="message-author-img">
                    
                      <img style=" border-radius: 50%;" alt="" height="50" width="50" src="/users/photos/'.$rowgetreplyuser['user_photo'].'">
                    
                    
                  </div>
                  <p class="message-author-name"> '.$rowgetreplyuser["user_fn"].' '.$rowgetreplyuser["user_ln"].'</p>
                  <span class="message-author-date "> '.$rowPostReply["created"].'</span>
                </div>
                <div class="message-text mt-2">
                  '.$rowPostReply["reply"].'
                  
                  <div class="message-text-btns ">
                    <a href="#">Like</a>
                    <a href="#">Reply</a>
                  </div>
                </div>

';




        
        
        
    }
         if ($postReplierUID == $id){
        
        
        
        
        echo'
        
        
        
        
          <div class="message-author author-me">
                  <div class="message-author-img">
                   
                     <img style=" border-radius: 50%;" alt="" height="50" width="50" src="/users/photos/'.$rowgetreplyuser['user_photo'].'">
                   
                   
                  </div>
                  <p class="message-author-name">'.$rowgetreplyuser['user_fn'].' '.$rowgetreplyuser['user_ln'].'</p>
                  <span class="message-author-date"> '.$rowPostReply["created"].'</span>
                </div>
                <div class="message-text my-message">
                  '.$rowPostReply["reply"].'
                  <div class="message-text-btns">
                    <a href="#">Like</a>
                    <a href="#">Reply</a>
                  </div>
                </div>
              </div>
        
        
        
        
        ';
        
        
        
    } }  }}}                                               
                                         
        
                                                                                                                                                                                                                                                         
                                                                                echo '</div></div></section>';                                                                                                                                                                          include_once 'includes/footer.php';
                                                                                                                                                                                                                                                          ?>