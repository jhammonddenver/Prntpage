<?php
// Here we check whether the user got to this page by clicking the proper signup button.
  session_start();
if (isset($_POST['editprofile-submit'])) {

  // We include the connection script so we can use it later.
  // We don't have to close the MySQLi connection since it is done automatically, but it is a good habit to do so anyways since this will immediately return resources to PHP and MySQL, which can improve performance.
  require 'db_connect.php';

  // We grab all the data which we passed from the signup form so we can use it later.
 $id = $_SESSION['id'];
 $title = $_POST['housing_title'];
 $disc = $_POST['housing_disc'];
 $housing_add1 = $_POST['housing_add1'];
 $housing_add2 = $_POST['housing_add2'];
 $nightly = $_POST['housing_nightly'];
 $weekly = $_POST['housing_weekly'];
 $monthly = $_POST['housing_monthly'];
 $purchase = $_POST['housing_purchase'];
 $rules = $_POST['housing_rules'];
 $amenities = $_POST['housing_amenities'];
 $bedrooms = $_POST['housing_bedrooms'];
 $bathrooms = $_POST['housing_bathrooms'];
 
  


     
        // If we got to this point, it means the user didn't make an error! :)

        // Next thing we do is to prepare the SQL statement that will insert the users info into the database. We HAVE to do this using prepared statements to make this process more secure. DON'T JUST SEND THE RAW DATA FROM THE USER DIRECTLY INTO THE DATABASE!

        // Prepared statements works by us sending SQL to the database first, and then later we fill in the placeholders (this is a placeholder -> ?) by sending the users data.
        $sql = "UPDATE homes SET listing_title='$title', listing_description='$description, listing_nightly='$nightly', listing_weekly='$weekly', listing_monthly='$monthly', listing_purchase='$purchase', listing_rules='$rules', listing_amenities='$amenities', listing_bedrooms='$bedrooms', listing_bathrooms='$bathrooms' WHERE listing_uid ='$id';";
        
      $result = mysqli_query($conn, $sql);
       
      


        	header("Location: ../edit-profile.php?savesuccessful");
             
  // Then we close the prepared statement and the database connection!
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

  exit();
}
