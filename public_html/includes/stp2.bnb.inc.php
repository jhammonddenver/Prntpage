<?php
session_start();
if (isset($_POST['step-2-btn'])) {
  $id = $_SESSION['id'];
  $_SESSION['lid'] = $_GET['id'];
  $_SESSION['nights'] = $_POST['nights'];
  $_SESSION['guests'] = $_POST['guests'];
  $_SESSION['total'] = $_POST['total'];
  $_SESSION['int'] = $_POST['int'];
  $_SESSION['commission'] = $_POST['commission'];
  $_SESSION['subTotal'] = $_POST['subTotal'];
  $_SESSION['add1'] = $_POST['add1'];
  $_SESSION['add2'] = $_POST['add2'];
  $_SESSION['city'] = $_POST['city'];
  $_SESSION['state'] = $_POST['state'];
  $_SESSION['zip'] = $_POST['zip'];
  $_SESSION['type'] = $_POST['type'];
  $_SESSION['cat'] = $_POST['cat'];
   $_SESSION['listingName'] = $_POST['listingName'];
  
  
  

   header("Location: ../check-out-bnb-step2.php");
  
 
}





?>