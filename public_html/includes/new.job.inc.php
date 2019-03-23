<?php
$pic = 'default.gif';
  session_start();
require 'db_connect.php';
if (isset($_POST['job-submit'])) {

  $id = $_SESSION['id'];
  $mailuid = $_SESSION['email'];
  $ltype = $_POST['job_type'];
   $ltitle = $_POST['job_title'];
  $ldesc = $_POST['job_disc'];
  $lqualifications = $_POST['job_qualifications'];
  $leducation = $_POST['job_education'];
  $lcertifications = $_POST['job_certifications'];
  $llevel = $_POST['job_level'];
  $lposTitle = $_POST['job_pos_title'];
  $lpayrate = $_POST['job_payrate'];
  $ltype = $_POST['job_type'];
  $ladd1 = $_POST['job_add1'];
  $ladd2 = $_POST['job_add2'];
  $lcity = $_POST['job_city'];
  $lstate = $_POST['job_state'];
  $lzip = $_POST['job_zip'];
  $llat = $_POST['job_lat'];
  $llong = $_POST['job_long'];
  $lcountry = $_POST['job_country'];
  $lcemail = $_POST['job_contact_email'];
  $lcphone = $_POST['job_contact_phone'];

$payrate = $_POST['job_payrate'];
 
 $address = $ladd1." ".$ladd2.", ".$lcity.", ".$lstate.", ".$lcountry.", ".$lzip; 
  


    $sql2 = "INSERT INTO jobs (uid, type, name, disc, payrate, qualifications, education, certifications, level, position_title, add1, add2, city, state, zip, country, lat, lng, address, contact_phone, contact_email, main_pic) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $stmt2 = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt2, $sql2)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../add-job.php?error=sqlerror");
          exit();
     
        }
        else {

   
          mysqli_stmt_bind_param($stmt2, "isssssssssssssssddssss", $id, $ltype, $ltitle, $ldesc, $payrate, $lqualifications, $leducation, $lcertifications, $llevel, $lposTitle,  $ladd1, $ladd2, $lcity, $lstate, $lzip, $lcountry, $llat, $llong, $address, $lcphone, $lcemail, $pic);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt2);
          // Lastly we send the user back to the signup page with a success message!
          
         $_SESSION['lid'] = mysqli_insert_id($conn);
          
          header("Location: ../add-job-location.php");
          exit();
    mysqli_stmt_close($stmt2);
    mysqli_close($conn);
        }

   
  
    
    
}