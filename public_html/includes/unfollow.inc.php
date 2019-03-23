<?php

 
 
  session_start();
  $id = $_SESSION['id'];
  
  
  $user = $_SESSION['friend_req_id'];
require 'db_connect.php';
if (isset($_POST['unfollow-submit'])) {


$friendid = $_POST['friendid'];
  
 

    $sql = "UPDATE followers SET follower_id='0' WHERE follower_id='$id' AND uid='$friendid'";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
       
       
       $result = mysqli_query($conn, $sql);
       
       
       
         
        
        

          
          header("Location: ../profile.php?id=$friendid");
              
          exit();
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        }
      
    

    
    
