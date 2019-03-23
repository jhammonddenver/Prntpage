<?php  
 session_start();
include_once 'db_connect.php';
 $id = $_SESSION['id']; 
  $lid = $_SESSION['lid'];
 
 
 $sql = "UPDATE bnbs SET deleted='1' WHERE id='$lid'"; 
 if(mysqli_query($conn, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>