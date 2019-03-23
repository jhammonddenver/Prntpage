<?php
$pic = 'default.gif';
  session_start();
require 'db_connect.php';
if (isset($_POST['services-submit'])) {

  $id = $_SESSION['id'];
  $mailuid = $_SESSION['email'];
  $ltype = $_POST['services_type'];
   $ltitle = $_POST['services_title'];
  $ldesc = $_POST['services_disc'];
  $ltype = $_POST['services_type'];
  $ladd1 = $_POST['services_add1'];
  $ladd2 = $_POST['services_add2'];
  $lcity = $_POST['services_city'];
  $lstate = $_POST['services_state'];
  $lzip = $_POST['services_zip'];
  $llat = $_POST['services_lat'];
  $llong = $_POST['services_long'];
  $lcountry = $_POST['services_country'];

$price = $_POST['services_price'];
 
 $address = $ladd1." ".$ladd2.", ".$lcity.", ".$lstate.", ".$lcountry.", ".$lzip; 
  


    $sql2 = "INSERT INTO services (uid, type, name, disc, price, add1, add2, city, state, zip, country, lat, lng, address, main_pic) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $stmt2 = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt2, $sql2)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../add-service.php?error=sqlerror");
          exit();
     
        }
        else {

   
          mysqli_stmt_bind_param($stmt2, "issssssssssddss", $id, $ltype, $ltitle, $ldesc, $price, $ladd1, $ladd2, $lcity, $lstate, $lzip, $lcountry, $llat, $llong, $address, $pic);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt2);
          // Lastly we send the user back to the signup page with a success message!
          
         $_SESSION['lid'] = mysqli_insert_id($conn);
          
          header("Location: ../add-service-location.php");
          exit();
    mysqli_stmt_close($stmt2);
    mysqli_close($conn);
        }

   
  
    
    
}