<?php

 
 
  session_start();
  $id = $_SESSION['id'];
  $refer = $_SESSION['refer_id'];
  
   

  
require 'db_connect.php';
if (isset($_POST['unlove-submit'])) {


$friendid = $_POST['friendid'];

  
  $sql =  "SELECT * FROM post_reply WHERE id='$friendid'";
 $result = $conn->query($sql);

$row = $result->fetch_assoc();
$likes = $row['loves'];
$likes = $likes - 1;
$sql2 = "UPDATE post_reply SET loves='$likes' WHERE id='$friendid'";
  $result2 = $conn->query($sql2);
 

    $sql3 = "UPDATE loves_reply SET uid='0' WHERE post_id='$friendid' AND uid='$id'";
       
        $result3 = $conn->query($sql3);
         
        
        
 
          
          header("Location: ../profile.php?id=$refer");
              
          exit();
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        }
      


    
    
