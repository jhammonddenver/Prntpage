<?php
session_start();
if (isset($_POST['step-4-btn'])) {
  
  
  
  
  
   $_SESSION['cardholders-name'] = $_POST['cardholders-name'];
   $_SESSION['ccnumber'] = $_POST['ccnumber'];
    $_SESSION['emonth'] = $_POST['emonth'];
     $_SESSION['eyear'] = $_POST['eyear'];
      $_SESSION['cvv'] = $_POST['cvv']; 
  


   header("Location: ../check-out-bnb-step4.php");
  
 
}





?>