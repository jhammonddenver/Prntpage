<?php

 
 
  session_start();
 
  
require 'db_connect.php';
if (isset($_POST['new-post-submit'])) {
 $id = $_SESSION['id'];
 $visibility = $_POST['visibility'];  
 
  $title = $_POST['title'];
  $body = $_POST['post'];
  
  $read = '0';
 

  
 

    $sql5 = "INSERT INTO post (uid, visibility, title, body) 
    VALUES (?, ?, ?, ?);";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $stmt = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt, $sql5)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../profile.php?id=$id-error=sqlerror");
          exit();
     
        }
        else {

   
          mysqli_stmt_bind_param($stmt, "isss", $id, $visibility, $title, $body);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly we send the user back to the signup page with a success message!
         
         
         
        

          
          header("Location: ../profile.php?id=$id");
          exit();
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        }
      
    

    
    
}