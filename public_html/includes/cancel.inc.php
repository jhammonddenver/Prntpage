<?php

 
 
  session_start();
  $id = $_SESSION['id'];
  
  
  $user = $_SESSION['friend_req_id'];
require 'db_connect.php';
if (isset($_POST['cancel-submit'])) {


$friendid = $_POST['friendid'];
  
 

    $sql = "UPDATE friend_req SET req_uid='0' WHERE req_uid='$id' AND uid='$friendid'";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
       
       
       $result = mysqli_query($conn, $sql);
       
       
       
         
        
        

          
          header("Location: ../profile.php?id=$friendid");
              
          exit();
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        }
      
    

    
    
