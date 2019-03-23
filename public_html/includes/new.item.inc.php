<?php

  session_start();
require 'db_connect.php';
if (isset($_POST['item-submit'])) {
$pic = 'default.gif';
  $id = $_SESSION['id'];
  
  $ltype = $_POST['item_type'];
  $ltitle = $_POST['item_title'];
  $ldesc = $_POST['item_disc'];
  $lnightly = $_POST['item_daily'];
  $lweekly = $_POST['item_weekly'];
  $lmonthly = $_POST['item_monthly'];
  $lprice = $_POST['item_price'];
  $ltype = $_POST['item_type'];
  $ladd1 = $_POST['item_add1'];
  $lapt = $_POST['item_apt'];
  $ladd2 = $_POST['item_add2'];
  $lcity = $_POST['item_city'];
  $lstate = $_POST['item_state'];
  $lzip = $_POST['item_zip'];
  $llat = $_POST['item_lat'];
  $llong = $_POST['item_long'];
  $lcountry = $_POST['item_country'];
  $lcemail = $_POST['item_contact_email'];
  $lcphone = $_POST['item_contact_phone'];
 $lsalerent = $_POST['item_sale_rent'];
 $lhourly = $_POST['item_hourly'];

  $lpickup_delivery = $_POST['item_pickup_delivery'];
 $lisbn = $_POST['item_isbn'];
 $ldelivery = $_POST['item_delivery'];
 $ldeliveryFee = $_POST['item_delivery_fee'];
 $ldeliveryRadius = $_POST['item_del_radius'];
 $lshipping = $_POST['item_shipping'];
 $lshippingDetails = $_POST['item_shipping_details']; 
  $lshippingIntCost = $_POST['item_shipping_internationally'];
   $lshippingNatCost = $_POST['item_shipping_nationally'];
    
 
 $lAddInfo = $_POST['item_additional_info'];
 
 
  $laddress = $ladd1." ".$ladd2.", ".$lcity.", ".$lstate.", ".$lcountry.", ".$lzip; 
  

    $sql2 = "INSERT INTO items (uid, type, name, disc, add1, add2, apt, city, state, zip, country, price, lat, lng, address, sale_rent, hourly, daily, weekly, monthly, delivery, del_fee, del_radius, shipping, shipping_details, shipping_int_cost, shipping_nat_cost, add_info, contact_phone, contact_email, main_pic) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $stmt2 = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt2, $sql2)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../add-items.php?error=sqlerror");
          exit();
     
        }
        else {

   
          mysqli_stmt_bind_param($stmt2, "isssssssssssddsssssssssssssssss", $id, $ltype, $ltitle, $ldesc, $ladd1, $ladd2, $lapt, $lcity, $lstate, $lzip, $lcountry, $lprice, $llat, $llong, $laddress, $lsalerent, $lhourly, $lnightly, $lweekly, $lmonthly, $ldelivery, $ldeliveryFee, $ldeliveryRadius, $lshipping, $lshippingDetails, $lshippingIntCost, $lshippingNatCost, $lAddInfo, $lcphone, $lcemail, $pic);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt2);
          // Lastly we send the user back to the signup page with a success message!
          
           $_SESSION['lid'] = mysqli_insert_id($conn);
          
          
          
          header("Location: ../add-item-pics.php");
          exit();
    mysqli_stmt_close($stmt2);
    mysqli_close($conn);
        }

 
    
    
}