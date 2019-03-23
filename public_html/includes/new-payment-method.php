<?php

 
 
  session_start();
 
  
require 'db_connect.php';
if (isset($_POST['payment-method-submit'])) {
 $id = $_SESSION['id'];
   
  $uid = $_POST['uid'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $emonth = $_POST['emonth'];
  $eyear = $_POST['eyear'];
  $add1 = $_POST['add1'];
  $add2 = $_POST['add2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $country = $_POST['country'];
  $number = $_POST['number'];
  $lastNums = $_POST['last_nums'];
  $cvv = $_POST['cvv'];
 
 
 $hashedNumber = password_hash($number, PASSWORD_DEFAULT);
  $hashedcvv = password_hash($cvv, PASSWORD_DEFAULT);
 
 

    $sql990 = "INSERT INTO user_cc (uid, fname, lname, emonth, eyear, add1, add2, city, state, zip, country, number, last_four, cvv) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $stmt990 = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt990, $sql990)) {
          // If there is an error we send the user back to the signup page.
         echo("Error description: " . mysqli_error($conn)); 
          exit();
     
        }
        else {

   
          mysqli_stmt_bind_param($stmt990, "issiisssssssis", $id, $fname, $lname, $emonth, $eyear, $add1, $add2, $city, $state, $zip, $country, $hashedNumber, $lastNums, $hashedcvv);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt990);
          // Lastly we send the user back to the signup page with a success message!
         
         
         
        

          
          header("Location: ../payment-method.php");
          exit();
    mysqli_stmt_close($stmt990);
    mysqli_close($conn);
        }
      
    

    
    
}