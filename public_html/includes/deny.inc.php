<?php

 
 
  session_start();
  
  
  $id = $_SESSION['id'];
  
  
  $user = $_SESSION['friend_req_id'];

require 'db_connect.php';

if (isset($_POST['accept-submit'])) {


$friendid = $_POST['accept'];
 
 

    $sql2 = "INSERT INTO friends (uid, friend_id) VALUES (?, ?);";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $stmt = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt, $sql2)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../profile.php?id=<?php echo '$friendid'>&error=sqlerror");
          exit();
     
        }
        else {

   
          mysqli_stmt_bind_param($stmt, "ii", $id, $friendid);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly we send the user back to the signup page with a success message!
         
         
    $sql3 = "UPDATE friend_req SET req_uid='0' WHERE req_uid='$friendid' AND uid='$id'";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
       
       
       $result = mysqli_query($conn, $sql3);
       
       
        
        

          
          header("Location: ../profile.php?id=$friendid");
               $message = "Friend Request Sent";
echo "<script type='text/javascript'>alert('$message');</script>";
          exit();
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        }
      
    

    
    
}