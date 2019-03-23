<?php

 
 
  session_start();
  $id = $_SESSION['id'];
  
  
  $user = $_SESSION['friend_req_id'];
require 'db_connect.php';
if (isset($_POST['unfriend-submit'])) {


$friendid = $_POST['friendid'];
  
 

    $sql = "UPDATE friends SET friend_id='0' WHERE friend_id='$id' AND uid='$friendid' OR friend_id='$friendid' AND uid='$id'";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
       
       
       $result = mysqli_query($conn, $sql);
       
       
       
         
        
        

          
          header("Location: ../profile.php?id=$friendid");
              
          exit();
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        }
      
    

    
    
