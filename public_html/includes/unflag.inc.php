<?php

 
 
  session_start();
  $id = $_SESSION['id'];
  $refer = $_SESSION['refer_id'];
  
   

  
require 'db_connect.php';
if (isset($_POST['unflag-submit'])) {


$friendid = $_POST['friendid'];

  
  $sql =  "SELECT * FROM post WHERE id='$friendid'";
 $result = $conn->query($sql);

$row = $result->fetch_assoc();
$likes = $row['flagged'];
$likes = $likes - 1;
$sql2 = "UPDATE post SET flagged='$likes' WHERE id='$friendid'";
  $result2 = $conn->query($sql2);
 

    $sql3 = "UPDATE flagged_post SET uid='0' WHERE post_id='$friendid' AND uid='$id'";
       
        $result3 = $conn->query($sql3);
         
        
        
 
          
          header("Location: ../profile.php?id=$refer");
              
          exit();
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        }
      


    
    
