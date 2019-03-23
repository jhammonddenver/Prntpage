<?php

  session_start();
require 'db_connect.php';
if (isset($_POST['delete-submit'])) {
    
      $id = $_SESSION['id'];
         $lid = $_SESSION['lid'];
      $messageToDelete = $_SESSION['messageToDelete'];
      $delete = 1;
       $deleted = $_POST['delete'];
      
    $sql = "UPDATE homes SET deleted = '1' WHERE id='$lid';";
    // Here we initialize a new statement using the connection from the dbh.inc.php file.
    $stmt = mysqli_stmt_init($conn);
       
      if (!mysqli_stmt_prepare($stmt, $sql)) {
          // If there is an error we send the user back to the edit profile page.
         printf("Errormessage: %s\n", mysqli_error($conn));
          exit();
        }
        else {





 mysqli_stmt_execute($stmt);


        	header("Location: ../edit-realestate.php?id=$lid");
             
  // Then we close the prepared statement and the database connection!
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

  exit();
}}