<?php  
include_once 'db_connect.php';
 $id = $_SESSION['id']; 
 $lid = $_SESSION['lid'];
 
 $sql = "DELETE FROM bnbs WHERE id = '" . $row['lid'] . "'";  
 if(mysqli_query($conn, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>