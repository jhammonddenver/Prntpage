<?php

 
 
  session_start();
  
  
  $id = $_SESSION['id'];
  $type ="friend";
  
  $user = $_SESSION['friend_req_id'];

require 'db_connect.php';

if (isset($_POST['accept-submit'])) {


$friendid = $_POST['accept'];
 
 

    $sql2 = "INSERT INTO friends (uid, friend_id, type) VALUES (?, ?, ?);";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $stmt = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt, $sql2)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../profile.php?id=<?php echo '$friendid'>&error=sqlerror");
          exit();
     
        }
        else {

   
          mysqli_stmt_bind_param($stmt, "iis", $id, $friendid, $type);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly we send the user back to the signup page with a success message!
         
         
         
         
         
         
         
         
    $sql2op = "INSERT INTO friends (uid, friend_id, type) VALUES (?, ?, ?);";
         mysqli_stmt_prepare($stmt, $sql2op);
           mysqli_stmt_bind_param($stmt, "iis", $friendid, $id, $type);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
         
         
         
         
         
         
         
         
         
    $sql3 = "UPDATE friend_req SET req_uid='0' WHERE req_uid='$friendid' AND uid='$id'";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
       
       
       $result3 = mysqli_query($conn, $sql3);
       
       
                 
    $sql4 = "INSERT INTO followers (uid, follower_id) VALUES (?, ?);";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
       
       
       if (!mysqli_stmt_prepare($stmt, $sql4)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../profile.php?id=<?php echo '$friendid'>&error=sqlerror");
          exit();
     
        }
        else {

   
          mysqli_stmt_bind_param($stmt, "ii", $friendid, $id);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly we send the user back to the signup page with a success message!
         
        

          
          header("Location: ../profile.php?id=$friendid");
              
          exit();
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        }
      
    

    
    
}}