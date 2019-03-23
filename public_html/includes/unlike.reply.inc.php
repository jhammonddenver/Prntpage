<?php

 
 
  session_start();
  $id = $_SESSION['id'];
  $refer = $_SESSION['refer_id'];
   $postToReplyToID = $_POST['postID'];
   

  
require 'db_connect.php';
if (isset($_POST['unlike-submit'])) {


$friendid = $_POST['friendid'];

  
  $sql =  "SELECT * FROM post_reply WHERE id='$friendid'";
 $result = $conn->query($sql);

$row = $result->fetch_assoc();
$likes = $row['likes'];
$likes = $likes - 1;
$sql2 = "UPDATE post_reply SET likes='$likes' WHERE id='$friendid'";
  $result2 = $conn->query($sql2);
 

    $sql3 = "UPDATE likes_reply SET uid='0' WHERE post_id='$friendid'";
       
        $result3 = $conn->query($sql3);
         
        
        

          
          header("Location: ../profile.php?id=$refer");
              
          exit();
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        }
      


    
    
