<?php
// Here we check whether the user got to this page by clicking the proper signup button.
  session_start();
if (isset($_POST['signup-submit'])) {

  // We include the connection script so we can use it later.
  // We don't have to close the MySQLi connection since it is done automatically, but it is a good habit to do so anyways since this will immediately return resources to PHP and MySQL, which can improve performance.
  require 'db_connect.php';

  // We grab all the data which we passed from the signup form so we can use it later.
 $username = $_POST['uid'];
  $email = $_POST['mailuid'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];
  $firstname = $_POST['first'];
  $lastname = $_POST['last'];
  $bday = $_POST['bday'];
  $bmonth = $_POST['bmonth'];
  $byear = $_POST['byear'];
  $phone = $_POST['phone'];
  $sex = $_POST['gender'];
  $pref = $_POST['pref'];
  $currency = $_POST['currency'];
  $lang = $_POST['lang'];

  $add1 = $_POST['add1'];
  $add2 = $_POST['add2'];
  $apt = $_POST['apt'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $zip = $_POST['zip'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];
   $user_from = $_POST['user_from'];
    $address = $add1." ".$add2.", ".$city.", ".$state.", ".$country.", ".$zip; 
  
   
   
   
   
   
   
  
  if ($sex == 'Female'){
      $photo = 'avatar_female.png';
  } else {
    $photo = 'avatar_male.png';  
  }
  
  $level = 1;
  $ip = $_SERVER['REMOTE_ADDR'];
  
  
  

  if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
    header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
    exit();
  }
  // We check for an invalid username AND invalid e-mail.
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invaliduidmail");
    exit();
  }
  // We check for an invalid username. In this case ONLY letters and numbers.
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invaliduid&mail=".$email);
    exit();
  }
  // We check for an invalid e-mail.
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidmail&uid=".$username);
    exit();
  }
  // We check if the repeated password is NOT the same.
  else if ($password !== $passwordRepeat) {
    header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
    exit();
  }
  else {

    // We also need to include another error handler here that checks whether or the username is already taken. We HAVE to do this using prepared statements because it is safer!

    // First we create the statement that searches our database table to check for any identical usernames.
    $sql = "SELECT uidUsers FROM users WHERE uidUsers=? || emailUsers=?;";
    // We create a prepared statement.
    $stmt = mysqli_stmt_init($conn);
    // Then we prepare our SQL statement AND check if there are any errors with it.
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      // If there is an error we send the user back to the signup page.
      header("Location: ../signup.php?error=sqlerror");
      exit();
    }
    else {
      // Next we need to bind the type of parameters we expect to pass into the statement, and bind the data from the user.
      // In case you need to know, "s" means "string", "i" means "integer", "b" means "blob", "d" means "double".
      mysqli_stmt_bind_param($stmt, "ss", $username, $email);
      // Then we execute the prepared statement and send it to the database!
      mysqli_stmt_execute($stmt);
      // Then we store the result from the statement.
      mysqli_stmt_store_result($stmt);
      // Then we get the number of result we received from our statement. This tells us whether the username already exists or not!
      $resultCount = mysqli_stmt_num_rows($stmt);
      // Then we close the prepared statement!
      mysqli_stmt_close($stmt);
      // Here we check if the username exists.
      if ($resultCount > 0) {
        header("Location: ../signup.php?error=usertaken&mail=".$email);
        exit();
      }
      else {
        // If we got to this point, it means the user didn't make an error! :)

        // Next thing we do is to prepare the SQL statement that will insert the users info into the database. We HAVE to do this using prepared statements to make this process more secure. DON'T JUST SEND THE RAW DATA FROM THE USER DIRECTLY INTO THE DATABASE!

        // Prepared statements works by us sending SQL to the database first, and then later we fill in the placeholders (this is a placeholder -> ?) by sending the users data.
        $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers, user_fn, user_ln, user_gender, user_bday, user_bmonth, user_byear, user_phone, user_currency, user_lang, user_add1, user_add2, user_apt, user_city, user_state, user_zip, user_country, user_latitude, user_longitude, user_from, user_ip, user_photo, user_address, user_level) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1);";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $stmt = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../signup.php?error=sqlerror");
          exit();
        }
        else {

          // If there is no error then we continue the script!

          // Before we send ANYTHING to the database we HAVE to hash the users password to make it un-readable in case anyone gets access to our database without permission!
          // The hashing method I am going to show here, is the LATEST version and will always will be since it updates automatically. DON'T use md5 or sha256 to hash, these are old and outdated!
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

          // Next we need to bind the type of parameters we expect to pass into the statement, and bind the data from the user.
          mysqli_stmt_bind_param($stmt, "sssssssssssssssssssddssss", $username, $email, $hashedPwd, $firstname, $lastname, $sex, $bday, $bmonth, $byear, $phone, $currency, $lang, $add1, $add2, $apt, $city, $state, $zip, $country, $latitude, $longitude, $user_from, $ip, $photo, $address);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly we send the user back to the signup page with a success message!
          
          $userIDnew = mysqli_insert_id($conn);
          $type = "Friend";
          
          
           $sql3 = "INSERT INTO friends (uid, friend_id) 
    VALUES ($userIDnew, 1);";
        
          $result3 = $conn->query($sql3);
          
          
          $sql3op = "INSERT INTO friends (uid, friend_id) 
    VALUES (1, $userIDnew);";
        
          $result3op = $conn->query($sql3op);
 
          
          
          $sql4 = "INSERT INTO friends (uid, friend_id) 
    VALUES ($userIDnew, 2);";
        
          $result4 = $conn->query($sql4);
          
          
           $sql4op = "INSERT INTO friends (uid, friend_id) 
    VALUES (2, $userIDnew);";
        
          $result4op = $conn->query($sql4op); 
          
          
          
          
          
            $sql5 = "INSERT INTO followers (uid, follower_id) 
    VALUES (1, $userIDnew);";
        
          $result5 = $conn->query($sql5);
 
          
          
          $sql6 = "INSERT INTO followers (uid, follower_id) 
    VALUES (2, $userIDnew);";
        
          $result6 = $conn->query($sql6);
          
          
          
          
          
          
          
          
          header("Location: ../index.php");
          alert("Please sign in with the account you just created.");
          exit();

        }
      }
    }
  }
  // Then we close the prepared statement and the database connection!
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  // If the user tries to access this page an inproper way, we send them back to the signup page.
  header("Location: ../signup.php");
  exit();
}
