<?php

  session_start();
require 'db_connect.php';
if (isset($_POST['hotel-submit'])) {
$pic = 'default.gif';
  $id = $_SESSION['id'];
  $mailuid = $_SESSION['email'];
  $ltype = $_POST['hotel_type'];
  $ltitle = $_POST['hotel_title'];
  $ldesc = $_POST['hotel_disc'];
  $lnightly = $_POST['hotel_nightly'];
  $lweekly = $_POST['hotel_weekly'];
  $lmonthly = $_POST['hotel_monthly'];
  $lrules = $_POST['hotel_rules'];
  $lamenities = $_POST['hotel_amenities'];
  $ltype = $_POST['hotel_type'];
  $lbed = $_POST['hotel_bedrooms'];
  $lbath = $_POST['hotel_bathrooms'];
  $ladd1 = $_POST['hotel_add1'];
  $ladd2 = $_POST['hotel_add2'];
  $lapt = $_POST['hotel_apt'];
  $lcity = $_POST['hotel_city'];
  $lstate = $_POST['hotel_state'];
  $lzip = $_POST['hotel_zip'];
  $llat = $_POST['hotel_lat'];
  $llong = $_POST['hotel_long'];
  $lcountry = $_POST['hotel_country'];
  $lcemail = $_POST['hotel_contact_email'];
  $lcphone = $_POST['hotel_contact_phone'];
 $lbtype1 = $_POST['hotel_bedType1'];
 $bed_type1_num = $_POST['hotel_bedTypeNum1'];



 
  $laddress = $ladd1." ".$ladd2.", ".$lcity.", ".$lstate.", ".$lcountry.", ".$lzip; 
  

    $sql = "INSERT INTO hotels (uid, type, disc, title, nightly, weekly, monthly, rules, amenities, beds, baths, add1, add2, city, state, zip, lat, lng, country, contact_email, contact_phone, bed_type1, bed_type1_num, main_pic) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $stmt = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../add-hotel.php?error=sqlerror");
          exit();
     
        }
        else {

   
          mysqli_stmt_bind_param($stmt, "isssdddssiisssssddssssis", $id, $ltype, $ldesc, $ltitle, $lnightly, $lweekly, $lmonthly, $lrules, $lamenities, $lbed, $lbath, $ladd1, $ladd2,  $lcity, $lstate, $lzip, $llat, $llong, $lcountry, $lcemail, $lcphone, $lbtype1, $bed_type1_num, $pic);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly we send the user back to the signup page with a success message!
          
         $_SESSION['lid'] = mysqli_insert_id($conn);
          header("Location: ../add-hotel-pics.php");
          exit();
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        }

   
}
