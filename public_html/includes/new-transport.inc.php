<?php
 $lid = "";
 $laddress = "";
 $pic = 'default.gif';
  session_start();
  $id = $_SESSION['id'];
require 'db_connect.php';
if (isset($_POST['transport-submit'])) {

  
  $mailuid = $_SESSION['email'];
  $ltype = $_POST['transport_type'];
  $lcat = $_POST['transport_cat'];
  $ltitle = $_POST['transport_title'];
  $ldesc = $_POST['transport_disc'];
  $ldistance = $_POST['transport_distance'];
  $ldep = $_POST['transport_deposit'];
  
  $lfuel = $_POST['transport_fuel'];
   $lmake = $_POST['transport_make'];
   $lmodel = $_POST['transport_model'];
   $lyear = $_POST['transport_year'];
  $ldaily = $_POST['transport_daily'];
  $lprice = $_POST['transport_price'];
  $ladd1 = $_POST['transport_add1'];
  $ladd2 = $_POST['transport_add2'];
  $lapt = $_POST['transport_apt'];
  $lcity = $_POST['transport_city'];
  $lstate = $_POST['transport_state'];
  $lzip = $_POST['transport_zip'];
  $llat = $_POST['transport_lat'];
  $llong = $_POST['transport_long'];
  $lcountry = $_POST['transport_country'];
  
  
  

  
  
  
  
  
  
  
  
  $laddress = $ladd1." ".$ladd2.", ".$lcity.", ".$lstate.", ".$lcountry.", ".$lzip; 
  
  
  
  
  
  
 

    $sql = "INSERT INTO transport (uid, cat, type, name, distance, disc, add1, add2, apt, city, state, zip, country, address, lat, lng, price, daily, make, model, year, fuel, main_pic) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $stmt = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../add-transport.php?error=sqlerror");
          exit();
     
        }
        else {
 
   
          mysqli_stmt_bind_param($stmt, "isssssssssssssddsssssss", $id, $lcat, $ltype, $ltitle, $ldistance, $ldesc, $ladd1, $ladd2, $lapt, $lcity, $lstate, $lzip,  $lcountry, $laddress, $llat, $llong, $lprice, $ldaily, $lmake, $lmodel, $lyear, $lfuel, $pic);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly we send the user back to the signup page with a success message!
         
         
         
          $_SESSION['lat'] = $llat;
           $_SESSION['long'] = $llong;
          $_SESSION['address'] = $laddress;
         
         $_SESSION['lid'] = mysqli_insert_id($conn);

          
          header("Location: ../add-transport-location.php");
          exit();
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        }
      
    

    
    
}