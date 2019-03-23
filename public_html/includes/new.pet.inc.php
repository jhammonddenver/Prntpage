<?php
$pic = 'default.gif';
  session_start();
require 'db_connect.php';
if (isset($_POST['pets-submit'])) {

  $id = $_SESSION['id'];
  $mailuid = $_SESSION['email'];
  $ltype = $_POST['pet_type'];
   $ltitle = $_POST['pet_title'];
  $ldesc = $_POST['pet_disc'];
  $lprice = $_POST['pet_price'];
  $ltype = $_POST['pet_type'];
  $ladd1 = $_POST['pet_add1'];
  $ladd2 = $_POST['pet_add2'];
  $lcity = $_POST['pet_city'];
  $lstate = $_POST['pet_state'];
  $lzip = $_POST['pet_zip'];
  $llat = $_POST['pet_lat'];
  $llong = $_POST['pet_long'];
  $lcountry = $_POST['pet_country'];
  $lcemail = $_POST['pet_contact_email'];
  $lcphone = $_POST['pet_contact_phone'];
$lsize = $_POST['pet_size'];
$lprice = $_POST['pet_price'];
 $lweight = $_POST['pet_weight'];
$lage = $_POST['pet_age'];
$lpedigree = $_POST['pet_pedigree'];
$lbreed = $_POST['pet_breed'];
 $address = $ladd1." ".$ladd2.", ".$lcity.", ".$lstate.", ".$lcountry.", ".$lzip; 
  $shipping = $_POST['pet_shipping'];
$seller = $_POST['pet_seller'];


    $sql2 = "INSERT INTO pets (uid, name, type, breed, disc, seller, age, price, contact_phone, contact_email, add1, add2, city, state, zip, country, address, shipping, lat, lng, main_pic, pedigree) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $stmt2 = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt2, $sql2)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../add-pets.php?error=sqlerror");
          exit();
     
        }
        else {

   
          mysqli_stmt_bind_param($stmt2, "isssssssssssssssssddss", $id, $ltitle, $ltype, $lbreed, $ldesc, $seller, $lage, $lprice, $lcphone, $lcemail, $ladd1, $ladd2, $lcity, $lstate, $lzip, $lcountry, $address, $shipping, $llat, $llong, $pic, $lpedigree);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt2);
          // Lastly we send the user back to the signup page with a success message!
          
         $_SESSION['lid'] = mysqli_insert_id($conn);
          
          header("Location: ../add-pets-pics.php");
          exit();
    mysqli_stmt_close($stmt2);
    mysqli_close($conn);
        }

   
  
    
    
}