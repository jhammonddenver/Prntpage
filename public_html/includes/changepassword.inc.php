<?php
// Here we check whether the user got to this page by clicking the proper signup button.
  session_start();
if (isset($_POST['changepassword-submit'])) {

  // We include the connection script so we can use it later.
  // We don't have to close the MySQLi connection since it is done automatically, but it is a good habit to do so anyways since this will immediately return resources to PHP and MySQL, which can improve performance.
  require 'db_connect.php';

  // We grab all the data which we passed from the signup form so we can use it later.
  $id = $_SESSION['id'];
  $mailuid = $_SESSION['email'];
  $oldPassword = $_POST['oldPassword'];
  $newPassword = $_POST['newPassword'];
  $newPasswordRepeat = $_POST['newPasswordRepeat'];
  $hashedPwd = password_hash($newPassword, PASSWORD_DEFAULT); 
 
 
 if (empty($oldPassword) || empty($newPassword) || empty($newPasswordRepeat)) 
 {
    header("Location: ../change-password.php?error=emptyfields");
    exit();

  }
else { 
     $sql = "SELECT * FROM users WHERE emailUsers=?;";
    // We create a prepared statement.
    $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)) {
      // If there is an error we send the user back to the signup page.
      header("Location: ../change-password.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $mailuid);
      // Then we execute the prepared statement and send it to the database!
      mysqli_stmt_execute($stmt);
      // Then we store the result from the statement.
     
      $result = mysqli_stmt_get_result($stmt);
      // Then we store the result into a variable.
      if ($row = mysqli_fetch_assoc($result)) {
        // Then we match the password from the database with the password the user submitted. The result is returned as a boolean.
        $pwdCheck = password_verify($oldPassword, $row['pwdUsers']);
        // If they don't match then we create an error message!
        if ($pwdCheck == false) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../change-password.php?error=wrongpwd");
          exit();
        }
        // Then if they DO match, then we know it is the correct user that is trying to log in!
        else if ($pwdCheck == true) {
            if ($newPassword !== $newPasswordRepeat) {
            header("Location: ../change-password.php?error=password-not-equal");
            exit();
        }
        else {
       $sql = "UPDATE users SET pwdUsers='$hashedPwd' WHERE idUsers='$id';";
         $resultchange = mysqli_query($conn, $sql);
        header("Location: ../change-password.php?savesuccessful");
        }  
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
  exit();
  }}}}}