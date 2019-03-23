<?php
// Here we check whether the user got to this page by clicking the proper signup button.
  session_start();
if (isset($_POST['editprofile-submit'])) {

  // We include the connection script so we can use it later.
  // We don't have to close the MySQLi connection since it is done automatically, but it is a good habit to do so anyways since this will immediately return resources to PHP and MySQL, which can improve performance.
  require 'db_connect.php';

  // We grab all the data which we passed from the signup form so we can use it later.
 $id = $_SESSION['id'];
  $email = $_POST['email'];
  $firstname = $_POST['first'];
  $lastname = $_POST['last'];
  $bday = $_POST['bday'];
  $bmonth = $_POST['bmonth'];
  $byear = $_POST['byear'];
  $phone = $_POST['phone'];
  $sex = $_POST['gender'];
  $currency = $_POST['currency'];
  $lang = $_POST['lang'];
  


     
        // If we got to this point, it means the user didn't make an error! :)

        // Next thing we do is to prepare the SQL statement that will insert the users info into the database. We HAVE to do this using prepared statements to make this process more secure. DON'T JUST SEND THE RAW DATA FROM THE USER DIRECTLY INTO THE DATABASE!

        // Prepared statements works by us sending SQL to the database first, and then later we fill in the placeholders (this is a placeholder -> ?) by sending the users data.
        $sql = "UPDATE users SET emailUsers=?, user_fn=?, user_ln=?, user_gender=?, user_bday=?, user_bmonth=?, user_byear=?, user_phone=?, user_currency=?, user_lang=? WHERE idUsers='$id';";
        
     
      
       $stmt = mysqli_stmt_init($conn);
       
       if (!mysqli_stmt_prepare($stmt, $sql)) {
          // If there is an error we send the user back to the edit profile page.
          header("Location: ../mydetails-am.php.php?error=sqlerror");
          exit();
        }
        else {


 mysqli_stmt_bind_param($stmt, "ssssssssss", $email, $firstname, $lastname, $sex, $bday, $bmonth, $byear, $phone, $currency, $lang);


 mysqli_stmt_execute($stmt);


        	header("Location: ../mydetails-am.php?savesuccessful");
             
  // Then we close the prepared statement and the database connection!
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

  exit();
}
}