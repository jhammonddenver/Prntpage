 <?php
  session_start();
require 'db_connect.php';
   // Provide Converge Credentials
  $merchantID = "977349"; //Converge 6-Digit Account ID *Not the 10-Digit Elavon Merchant ID*
  $merchantUserID = "cart"; //Converge User ID *MUST FLAG AS HOSTED API USER IN CONVERGE UI*
  $merchantPIN = "JYTE07EGQJP5NSCGI9I70T8F9OSJTARTC50JFVNSV5QTLNARKOE04H3TMMYTI6A2"; //Converge PIN (64 CHAR A/N)


  //$url = "https://demo.convergepay.com/hosted-payments/transaction_token"; // URL to Converge demo session token server
  $url = "https://www.convergepay.com/hosted-payments/transaction_token"; // URL to Converge production session token server

  //$hppurl = "https://demo.convergepay.com/hosted-payments"; // URL to the demo Hosted Payments Page
  $hppurl = "https://www.convergepay.com/hosted-payments"; // URL to the production Hosted Payments Page


  /*Payment Field Variables*/

  // In this section, we set variables to be captured by the PHP file and passed to Converge in the curl request.

 // $amount= '1.00'; //Hard-coded transaction amount for testing.

  $amount  = $_POST['ssl_amount'];   //Capture ssl_amount as POST data
  $firstname  = $_POST['ssl_first_name'];   //Capture ssl_first_name as POST data
  $lastname  = $_POST['ssl_last_name'];   //Capture ssl_last_name as POST data
 
  $id = $_SESSION['id'];
  $uid = $_POST['uid'];
  $email = $_POST['ci_email'];
  $ccnum = $_POST['ccnum'];
  $cccvv = $_POST['cccvv'];
 $exM = $_POST['Expmon'];
 $exY = $_POST['Expyear'];
 $add1 = $_POST['ci_billaddr1'];
 $add2 = $_POST['ci_billaddr2'];
 $city = $_POST['ci_billcity'];
 $state= $_POST['ci_billstate'];
 $zip= $_POST['ci_billzip'];
 $country= $_POST['ci_billcountry'];
 $type = "BnB";
  $exDate = $exM.$exY;
  $status = "0";
  $lid = $_SESSION['BnBid'];
  
  
 
  $invoice = mysqli_insert_id($conn); 

  //Follow the above pattern to add additional fields to be sent in curl request below.


  $ch = curl_init();    // initialize curl handle
  curl_setopt($ch, CURLOPT_URL,$url); // set POST target URL
  curl_setopt($ch,CURLOPT_POST, true); // set POST method
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  //Build the request for the session id. Make sure all payment field variables created above get included in the CURLOPT_POSTFIELDS section below.

  curl_setopt($ch,CURLOPT_POSTFIELDS,
  "ssl_merchant_id=$merchantID".
  "&ssl_user_id=$merchantUserID".
  "&ssl_exp_date=$exDate".
  "&ssl_cvv2cvc2_indicator=1".
  "&ssl_cvv2cvc2=$cccvv".
  "&ssl_avs_address=$add1".
  "&ssl_city=$city".
  "&ssl_state=$state".
  "&ssl_avs_zip=$zip".
  "&ssl_country=$country".
  "&ssl_invoice_number=$invoice ".
  "&ssl_email=$email".
  "&ssl_pin=$merchantPIN".
  "&ssl_transaction_type=ccsale".
  "&ssl_card_number=$ccnum".
    "&ssl_result_format = HTML".        
    "&ssl_receipt_decl_method = POST".        
    "&ssl_receipt_decl_post_url = http://www.prntpage.com/decline.php".      "&ssl_receipt_apprvl_method = GET".        
    "&ssl_receipt_apprvl_get_url = http://www.prntpage.com/approval.php".        "&ssl_receipt_link_text = Continue". 
  
  
  "&ssl_amount=$amount"
  );



  $result = curl_exec($ch); // run the curl to post to Converge
  curl_close($ch); // Close cURL

  $sessiontoken= urlencode($result);


  /* Now we redirect to the HPP */

  //header("Location: https://demo.convergepay.com/hosted-payments?ssl_txn_auth_token=$sessiontoken");  //Demo Redirect
  header("Location: https://www.convergepay.com/hosted-payments?ssl_txn_auth_token=$sessiontoken"); //Prod Redirect


  exit;



   ?>