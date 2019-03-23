<?php
session_start();
if (isset($_POST['step-3-btn'])) {
  
  
  $_SESSION['name'] = $_POST['name'];
  
    $_SESSION['tel'] = $_POST['tel'];
     $_SESSION['this-email'] = $_POST['email'];
      $_SESSION['message'] = $_POST['message']; 
    
  
  
  
  
  
  
  
  
  
  
  
  
  
  
           
  
  
  
  
  
  
  
  
  

   header("Location: ../check-out-bnb-step3.php");
  
 
}





?>