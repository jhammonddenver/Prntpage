
<?php
session_start();
include_once 'db_connect.php';
if (isset($_POST['step-5-btn'])) {
$id = $_SESSION['id']; 
  $uid = $_SESSION['uid'];
  $fn = $_SESSION['fn'];
  $ln = $_SESSION['ln'];
  $email = $_SESSION['email'];
  $mailuid = $_SESSION['mailuid'];
  $phone = $_SESSION['phone'];
  $photo = $_SESSION['photo'];
  $add1 = $_SESSION['add1'];
  $add2 = $_SESSION['add2'];
  $city = $_SESSION['city'];
  $state = $_SESSION['state'];
  $zip = $_SESSION['zip'];
  $country = $_SESSION['country'];
  $userLevel = $_SESSION['ul'];
  $bd = $_SESSION['bd'];
  $user_from = $_SESSION['user_from'];
  $user_lives = $_SESSION['user_lives'];
  $sex = $_SESSION['sex'];
  $pref = $_SESSION['pref'];
  $currency = $_SESSION['currency'];
  $lang = $_SESSION['lang'];
  
  $lmainphoto = $_SESSION['lmainphoto'];
 
$listingName =$_SESSION['listingName'];
$lid =  $_SESSION['lid'];
$nights =  $_SESSION['nights'];
$commission =  $_SESSION['commission'];
$total =  $_SESSION['total'];
$int =  $_SESSION['int'];
 $subTotal = $_SESSION['subTotal'];
 $add1 = $_SESSION['add1'];
$add2 = $_SESSION['add2'];
 $city = $_SESSION['city'];
$state =  $_SESSION['state'];
$zip =  $_SESSION['zip'];
$type =  $_SESSION['type'];
$cat =  $_SESSION['cat'];
  $name = $_SESSION['name'];
  $guests = $_SESSION['guests'];
   $tel = $_SESSION['tel'];
    $Temail = $_SESSION['this-email'];
    $message =  $_SESSION['message']; 
  $cardName = $_SESSION['cardholders-name'];
  $number = $_SESSION['ccnumber'];
   $emonth =  $_SESSION['emonth'];
   $eyear =   $_SESSION['eyear'];
    $cvv =  $_SESSION['cvv'];  
  
  
   $hostuid =  $_SESSION['hostuid'];
  
  
  
  
  
  
  
  
  
  $status = '0';
  
  
  
  
  
  
  
   $merchantID = "977349"; //Converge 6-Digit Account ID *Not the 10-Digit Elavon Merchant ID*
  $merchantUserID = "cart"; //Converge User ID *MUST FLAG AS HOSTED API USER IN CONVERGE UI*
  $merchantPIN = "JYTE07EGQJP5NSCGI9I70T8F9OSJTARTC50JFVNSV5QTLNARKOE04H3TMMYTI6A2"; //Converge PIN (64 CHAR A/N)


  //$url = "https://demo.convergepay.com/hosted-payments/transaction_token"; // URL to Converge demo session token server
  $url = "https://www.convergepay.com/hosted-payments/transaction_token"; // URL to Converge production session token server

 // $hppurl = "https://demo.convergepay.com/hosted-payments"; // URL to the demo Hosted Payments Page
  $hppurl = "https://www.convergepay.com/hosted-payments"; // URL to the production Hosted Payments Page


  /*Payment Field Variables*/

  // In this section, we set variables to be captured by the PHP file and passed to Converge in the curl request.

  $amount= $total;

  //$amount  = $_POST['ssl_amount'];   //Capture ssl_amount as POST data
  $firstname  = $fname;   //Capture ssl_first_name as POST data
  $lastname  = $lname;   //Capture ssl_last_name as POST data
  $merchanttxnid = '$invoice'; //Capture ssl_merchant_txn_id as POST data
  $invoicenumber = '$invoice'; //Capture ssl_invoice_number as POST data

  //Follow the above pattern to add additional fields to be sent in curl request below.


  $ch = curl_init();    // initialize curl handle
  curl_setopt($ch, CURLOPT_URL,$url); // set POST target URL
  curl_setopt($ch, CURLOPT_POST, true); // set POST method
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  //Build the request for the session id. Make sure all payment field variables created above get included in the CURLOPT_POSTFIELDS section below.

  curl_setopt($ch,CURLOPT_POSTFIELDS,
  "ssl_merchant_id=$merchantID".
  "&ssl_user_id=$merchantUserID".
  "&ssl_pin=$merchantPIN".
  "&ssl_transaction_type=ccsale".
  "&ssl_amount=$amount"
  );



  $result = curl_exec($ch); // run the curl to post to Converge
  curl_close($ch); // Close cURL

  $sessiontoken= urlencode($result);


  /* Now we redirect to the HPP */

  //header("Location: https://demo.convergepay.com/hosted-payments?ssl_txn_auth_token=$sessiontoken");  //Demo Redirect
  header("Location: https://www.convergepay.com/hosted-payments?ssl_txn_auth_token=$sessiontoken"); //Prod Redirect


  exit;

}}

   ?>