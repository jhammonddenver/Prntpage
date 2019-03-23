<?php  
session_start();
require 'db_connect.php';
//Uncomment the endpoint desired.    
//Production URL    
$url = 'https://api.convergepay.com/VirtualMerchant/process.do';    
//Demo URL    
//$url = 'https://api.demo.convergepay.com/VirtualMerchantDemo/process.do';    //Configuration parameters.    


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
  $exDate = $emonth.$eyear;
  
   $hostuid =  $_SESSION['hostuid'];


  
  
  
  $status = '0';
  
  
  
  
  $sqlTransaction = "INSERT INTO transactions (uid, payee, type, listing_id) values(?, ?, ?, ?)";
  
  
    $stmt = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          // If there is an error we send the user back to the signup page.
          printf("Errormessage: %s\n", mysqli_error($conn));
          
          
          
          exit();
     
        }
        else {

   
          mysqli_stmt_bind_param($stmt, "iisi", $id, $hostuid, $type, $lid);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly we send the user back to the signup page with a success message!
         
         
         
        

       
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        
      
    $invoice = mysqli_insert_id($conn);
  
  
  
  
  
  


 
   // Provide Converge Credentials
$ssl_merchant_id = '977349';    
$ssl_user_id = 'cart';    
$ssl_pin = 'JYTE07EGQJP5NSCGI9I70T8F9OSJTARTC50JFVNSV5QTLNARKOE04H3TMMYTI6A2';    
$ssl_show_form = 'false';    
$ssl_result_format = 'HTML';    
$ssl_test_mode = 'false';    
$ssl_receipt_link_method = 'REDG';    
$ssl_receipt_link_url = 'https://prntpage.com/receipt.php';    
$ssl_transaction_type = 'CCSALE';    
$ssl_cvv2cvc2_indicator = '1';   


$invoicenumber = '$invoice'; //Capture ssl_invoice_number as POST data

echo "<html><head><base href='" . $url . "'></base></head>";    
//Dynamically builds POST request based on the information being passed into the script.    
$queryString = "";    
foreach($_REQUEST as $key => $value) {        
    if($queryString != "") {            
        $queryString .= "&";        }        
        $queryString .= $key . "=" . urlencode($value);    
    
}    
$ch = curl_init();    
        curl_setopt($ch, CURLOPT_URL, $url);    
        curl_setopt($ch, CURLOPT_POST, 1);    
        curl_setopt($ch, CURLOPT_POSTFIELDS, 
            $queryString . 
            "&ssl_merchant_id=$ssl_merchant_id".         
            "&ssl_user_id=$ssl_user_id". 
            "&ssl_pin=$ssl_pin". 
            "&ssl_transaction_type=$ssl_transaction_type".         
            "&ssl_cvv2cvc2_indicator=$ssl_cvv2cvc2_indicator". 
            "&ssl_result_format=$ssl_result_format".         
            "&ssl_test_mode=$ssl_test_mode". 
            "&ssl_receipt_link_method=$ssl_receipt_link_method".    
            "&ssl_card_number=$number".
            "&ssl_first_name=$cfname".
            "&ssl_last_name=$clname".
            "&ssl_exp_date=$exDate".
            "&ssl_cvv2cvc2=$cvv".
            "&ssl_avs_address=$add1".
            "&ssl_city=$city".
            "&ssl_state=$state".
            "&ssl_avs_zip=$zip".
            "&ssl_country=$country".
            "&ssl_invoice_number=$invoice ".
            "&ssl_test_mode=$ssl_test_mode".
            "&ssl_email=$Temail".
            "&ssl_result_format = HTML".
            "&ssl_description = $listingName".
            "&ssl_transaction_currency = $currency".
            "&ssl_receipt_decl_method = POST".
            "&ssl_receipt_decl_post_url = http://www.prntpage.com/decline.asp".
            "&ssl_receipt_apprvl_method = GET".
            "&ssl_receipt_apprvl_get_url = http://www.prntpage.com/approval.asp".
            "&ssl_receipt_link_text = Continue". 
            "&ssl_receipt_link_url=$ssl_receipt_link_url"
            );
            
            
            
            
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);    
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);    
        curl_setopt($ch, CURLOPT_VERBOSE, true);    
$result = curl_exec($ch);    
curl_close($ch);
  }  ?>