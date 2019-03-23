<?php

 
 
  session_start();
  $id = $_SESSION['id'];
  
  

require 'db_connect.php';
if (isset($_POST['unblock-submit'])) {


$friendid = $_POST['friendid'];
  
 

   $sql = "UPDATE blocked SET uid='0' WHERE uid='$id' AND blocked_uid='$friendid'";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $result = mysqli_query($conn, $sql);
       
         
        
        

          
          header("Location: ../profile.php?id=$friendid");
              
          exit();
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        }