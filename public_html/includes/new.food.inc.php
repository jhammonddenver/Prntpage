<?php
$pic = 'default.gif';
  session_start();
require 'db_connect.php';
if (isset($_POST['food-submit'])) {

  $id = $_SESSION['id'];
  $mailuid = $_SESSION['email'];
  $ltype = $_POST['food_type'];
   $ltitle = $_POST['food_title'];
   $lcat = $_POST['food_cat'];
  $ldesc = $_POST['food_disc'];
  $lprice = $_POST['food_price'];
  $ltype = $_POST['food_type'];
  $ladd1 = $_POST['food_add1'];
  $ladd2 = $_POST['food_add2'];
  $lcity = $_POST['food_city'];
  $lstate = $_POST['food_state'];
  $lzip = $_POST['food_zip'];
  $llat = $_POST['food_lat'];
  $llong = $_POST['food_long'];
  $lcountry = $_POST['food_country'];
  $lcemail = $_POST['food_contact_email'];
  $lcphone = $_POST['food_contact_phone'];
$ldelivery = $_POST['food_delivery'];
$ldelFee = $_POST['food_del_fee'];
  $lradius = $_POST['food_radius'];
$lpriceRange = $_POST['food_price_range'];
$lprice = $_POST['food_price'];


$lhours = $_POST['food_hours'];
$lmenu = $_POST['food_menu'];
$lcuisine = $_POST['food_cuisine'];
$laddInfo = $_POST['food_add_info'];
 $address = $ladd1." ".$ladd2.", ".$lcity.", ".$lstate.", ".$lcountry.", ".$lzip; 
 
 


    $sql2 = "INSERT INTO food (uid, name, add1, add2, city, state, zip, country, lat, lng, address, disc, main_pic, cat, type, delivery, del_fee, price_range, menu, add_info, food_delivery_area) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $stmt2 = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt2, $sql2)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../add-food.php?error=sqlerror");
          exit();
     
        }
        else {

   
          mysqli_stmt_bind_param($stmt2, "isssssssddsssssssssss", $id, $ltitle, $ladd1, $ladd2, $lcity, $lstate, $lzip, $lcountry, $llat, $llong,  $address, $ldesc, $pic, $lcat, $ltype, $ldelivery, $ldelFee, $lpriceRange, $lmenu, $laddInfo, $lradius);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt2);
          // Lastly we send the user back to the signup page with a success message!
          
         $_SESSION['lid'] = mysqli_insert_id($conn);
          
          header("Location: ../add-food-pics.php");
          exit();
    mysqli_stmt_close($stmt2);
    mysqli_close($conn);
        }

   
  
    
    
}