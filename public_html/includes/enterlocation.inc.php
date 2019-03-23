<?php
// Here we check whether the user got to this page by clicking the proper signup button.
  session_start();
if (isset($_POST['enterlocation-submit'])) {

  // We include the connection script so we can use it later.
  // We don't have to close the MySQLi connection since it is done automatically, but it is a good habit to do so anyways since this will immediately return resources to PHP and MySQL, which can improve performance.
  require 'db_connect.php';

  // We grab all the data which we passed from the signup form so we can use it later.
 $id = $_SESSION['id'];

 $apt = $_POST['apt'];
  $add1 = $_POST['add1'];
  $add2 = $_POST['add2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $zip = $_POST['zip'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];
  
    
  
  $address = $add1." ".$add2.", ".$city.", ".$state.", ".$country.", ".$zip; 
  
  
  


     
        // If we got to this point, it means the user didn't make an error! :)

        // Next thing we do is to prepare the SQL statement that will insert the users info into the database. We HAVE to do this using prepared statements to make this process more secure. DON'T JUST SEND THE RAW DATA FROM THE USER DIRECTLY INTO THE DATABASE!

        // Prepared statements works by us sending SQL to the database first, and then later we fill in the placeholders (this is a placeholder -> ?) by sending the users data.
        $sql = "UPDATE users SET user_add1=?, user_add2=?, user_apt=?, user_city=?, user_state=?, user_zip=?, user_country=?, user_latitude=?, user_longitude=?, user_address=?  WHERE idUsers='$id';";
        
        
         $stmt = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../enter-location.php?error=sqlerror");
          exit();
        }
        else {

          // Next we need to bind the type of parameters we expect to pass into the statement, and bind the data from the user.
          mysqli_stmt_bind_param($stmt, "sssssssdds", $add1, $add2, $apt, $city, $state, $zip, $country, $latitude, $longitude, $address);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly we send the user back to the 
        

         

        	header("Location: ../edit-profile.php");
             
  // Then we close the prepared statement and the database connection!
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

  exit();
}
}