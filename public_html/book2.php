<?php

   // Provide Converge Credentials
  $merchantID = "977349"; //Converge 6-Digit Account ID *Not the 10-Digit Elavon Merchant ID*
  $merchantUserID = "cart"; //Converge User ID *MUST FLAG AS HOSTED API USER IN CONVERGE UI*
  $merchantPIN = "JYTE07EGQJP5NSCGI9I70T8F9OSJTARTC50JFVNSV5QTLNARKOE04H3TMMYTI6A2"; //Converge PIN (64 CHAR A/N)


  //$url = "https://demo.convergepay.com/hosted-payments/transaction_token"; // URL to Converge demo session token server
  $url = "https://www.convergepay.com/hosted-payments/transaction_token"; // URL to Converge production session token server

 // $hppurl = "https://demo.convergepay.com/hosted-payments"; // URL to the demo Hosted Payments Page
  $hppurl = "https://www.convergepay.com/hosted-payments"; // URL to the production Hosted Payments Page


  /*Payment Field Variables*/

  // In this section, we set variables to be captured by the PHP file and passed to Converge in the curl request.

  $amount= '1.00'; //Hard-coded transaction amount for testing.

  //$amount  = $_POST['ssl_amount'];   //Capture ssl_amount as POST data
  $firstname  = 'Jonathan';   //Capture ssl_first_name as POST data
  $lastname  = 'Smith';   //Capture ssl_last_name as POST data
  $merchanttxnid = '232'; //Capture ssl_merchant_txn_id as POST data
  $invoicenumber = '453'; //Capture ssl_invoice_number as POST data

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



   ?>