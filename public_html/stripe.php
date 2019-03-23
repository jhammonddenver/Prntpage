<?php
  session_start();
  
  include 'includes/db_connect.php';
  $id =  $_SESSION['id'];
  
  $sqlUser =  "SELECT * FROM users WHERE idUsers='$id'";
  $resultUser =  $conn->query($sqlUser);
  $rowUser = $resultUser->fetch_assoc();
  
  $userAdd = $rowUser['user_add1']. " " .$rowUser['user_add2'];  
  $userCity = $rowUser['user_city'];
  $userState = $rowUser['user_state'];
  $userZip = $rowUser['user_zip'];
  $userCountry = $rowUser['user_country'];
  
  
  
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
  
   $userLevel = $_SESSION['ul'];
  
  $saleTotal = str_replace(".", "", $total);
  
  
  
  
  
  
  
  
  

   
   ?>







<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Prntpage Payment Form</title>
<link rel="stylesheet" href="css/bootstrap-min.css">
<link rel="stylesheet" href="css/bootstrap-formhelpers-min.css" media="screen">
<link rel="stylesheet" href="css/bootstrapValidator-min.css"/>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
<link rel="stylesheet" href="css/bootstrap-side-notes.css" />
<link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet"> 
<link rel="stylesheet" href="styles/main.css"><script src="scripts/vendor/modernizr.js">
   
   
   
    
 <!-- For Google -->
<meta name="description" content="Prntpage is a Global Social Media and Peer to Peer Marketplace!" />
<meta name="keywords" content="prntpage, global social media, social media, peer to peer, peer to peer marketplace" />

<meta name="author" content="Prntpage" />
<meta name="copyright" content="2019" />
<meta name="application-name" content="Prntpage" />

<!-- For Facebook -->
<meta property="og:title" content="Prntpage" />

<meta property="fb:app_id" content="328930347866854" />




<meta property="og:type" content="website" />
<meta property="og:image" content="https://prntpage.com/earth-logo.png" />
<meta property="og:url" content="https://prntpage.com" />
<meta property="og:description" content="Prntpage is a Global Social Media and Peer to Peer Marketplace!" />

<!-- For Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="Prntpage" />
<meta name="twitter:description" content="Prntpage is a Global Social Media and Peer to Peer Marketplace!" />
<meta name="twitter:image" content="https://prntpage.com/earth-logo.png" />



<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: none !important">
    <path id="dropdown" fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M9.717,-0.000 L5.500,4.351 L1.283,-0.000 L-0.000,1.324 L5.500,6.999 L11.000,1.324 L9.717,-0.000 Z" />
    <path id="dialog" fill-rule="evenodd" fill="rgb(248, 248, 248)" d="M22.000,21.000 L22.016,25.086 C22.016,25.456 21.794,25.789 21.453,25.930 C21.341,25.977 21.222,26.000 21.105,26.000 C20.867,26.000 20.634,25.907 20.460,25.732 L15.000,21.000 L4.000,21.000 C1.486,21.000 -0.000,18.519 -0.000,16.000 L-0.000,4.568 C-0.000,2.049 2.045,-0.000 4.558,-0.000 L21.442,-0.000 C23.955,-0.000 26.000,2.049 26.000,4.568 L26.000,16.005 C26.000,18.329 24.243,20.716 22.000,21.000 ZM24.000,5.000 C24.000,3.488 22.508,2.000 21.000,2.000 L5.000,2.000 C3.492,2.000 2.000,3.488 2.000,5.000 L2.000,16.000 C2.000,17.511 3.492,19.000 5.000,19.000 L15.000,19.000 C15.242,19.000 16.163,18.842 16.334,19.013 L20.000,23.000 L20.000,19.000 L21.000,19.000 C22.508,19.000 24.000,17.511 24.000,16.000 L24.000,5.000 ZM6.000,14.000 L6.000,13.000 L6.000,12.000 L20.000,12.000 L20.000,14.000 C20.000,14.000 18.503,14.000 18.000,14.000 L6.000,14.000 ZM6.000,8.000 L6.000,7.000 L20.000,7.000 L20.000,8.000 L20.000,9.000 L6.000,9.000 L6.000,8.000 Z" />
    <g id="send-message" width="25px" height="21px">
      <path fill-rule="evenodd" fill="rgb(238, 242, 245)" d="M0.012,-0.000 L-0.000,8.167 L17.857,10.500 L-0.000,12.833 L0.012,21.000 L25.000,10.500 L0.012,-0.000 Z" />
      <path fill="url(#PSgrad_0)" d="M0.012,-0.000 L-0.000,8.167 L17.857,10.500 L-0.000,12.833 L0.012,21.000 L25.000,10.500 L0.012,-0.000 Z" />
    </g>
  </svg>


 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none!important">
            <path id="dropdown" fill-rule="evenodd" d="M9.717,-0.000 L5.500,4.351 L1.283,-0.000 L-0.000,1.324 L5.500,6.999 L11.000,1.324 L9.717,-0.000 Z"/>
            <path id="dialog" fill-rule="evenodd" fill="rgb(248, 248, 248)" d="M22.000,21.000 L22.016,25.086 C22.016,25.456 21.794,25.789 21.453,25.930 C21.341,25.977 21.222,26.000 21.105,26.000 C20.867,26.000 20.634,25.907 20.460,25.732 L15.000,21.000 L4.000,21.000 C1.486,21.000 -0.000,18.519 -0.000,16.000 L-0.000,4.568 C-0.000,2.049 2.045,-0.000 4.558,-0.000 L21.442,-0.000 C23.955,-0.000 26.000,2.049 26.000,4.568 L26.000,16.005 C26.000,18.329 24.243,20.716 22.000,21.000 ZM24.000,5.000 C24.000,3.488 22.508,2.000 21.000,2.000 L5.000,2.000 C3.492,2.000 2.000,3.488 2.000,5.000 L2.000,16.000 C2.000,17.511 3.492,19.000 5.000,19.000 L15.000,19.000 C15.242,19.000 16.163,18.842 16.334,19.013 L20.000,23.000 L20.000,19.000 L21.000,19.000 C22.508,19.000 24.000,17.511 24.000,16.000 L24.000,5.000 ZM6.000,14.000 L6.000,13.000 L6.000,12.000 L20.000,12.000 L20.000,14.000 C20.000,14.000 18.503,14.000 18.000,14.000 L6.000,14.000 ZM6.000,8.000 L6.000,7.000 L20.000,7.000 L20.000,8.000 L20.000,9.000 L6.000,9.000 L6.000,8.000 Z"/>
            <path id="checkmark" fill-rule="evenodd" d="M5 16.577l2.194-2.195 5.486 5.484L24.804 7.743 27 9.937l-14.32 14.32 Z" />
        </svg>




<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>




 <link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" type="text/css" media="all" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
    <link href="../libs/font-awesome/css/all.css" rel="stylesheet">
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap-min.js"></script>
<script src="js/bootstrap-formhelpers-min.js"></script>
<script type="text/javascript" src="js/bootstrapValidator-min.js"></script>

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#2dad36">
<meta name="apple-mobile-web-app-title" content="Prntpage">
<meta name="application-name" content="Prntpage">
<meta name="msapplication-TileColor" content="#2dad36">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="theme-color" content="#2dad36">



<script type="text/javascript">
$(document).ready(function() {
    $('#payment-form').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
		submitHandler: function(validator, form, submitButton) {
                    // createToken returns immediately - the supplied callback submits the form if there are no errors
                    Stripe.card.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val(),
			name: $('.card-holder-name').val(),
			address_line1: $('.address').val(),
			address_city: $('.city').val(),
			address_zip: $('.zip').val(),
			address_state: $('.state').val(),
			address_country: $('.country').val()
                    }, stripeResponseHandler);
                    return false; // submit from callback
        },
        fields: {
            street: {
                validators: {
                    notEmpty: {
                        message: 'The street is required and cannot be empty'
                    },
					stringLength: {
                        min: 6,
                        max: 96,
                        message: 'The street must be more than 6 and less than 96 characters long'
                    }
                }
            },
            city: {
                validators: {
                    notEmpty: {
                        message: 'The city is required and cannot be empty'
                    }
                }
            },
			zip: {
                validators: {
                    notEmpty: {
                        message: 'The zip is required and cannot be empty'
                    },
					stringLength: {
                        min: 3,
                        max: 9,
                        message: 'The zip must be more than 3 and less than 9 characters long'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    },
					stringLength: {
                        min: 6,
                        max: 65,
                        message: 'The email must be more than 6 and less than 65 characters long'
                    }
                }
            },
			cardholdername: {
                validators: {
                    notEmpty: {
                        message: 'The card holder name is required and can\'t be empty'
                    },
					stringLength: {
                        min: 6,
                        max: 70,
                        message: 'The card holder name must be more than 6 and less than 70 characters long'
                    }
                }
            },
			cardnumber: {
		selector: '#cardnumber',
                validators: {
                    notEmpty: {
                        message: 'The credit card number is required and can\'t be empty'
                    },
					creditCard: {
						message: 'The credit card number is invalid'
					},
                }
            },
			expMonth: {
                selector: '[data-stripe="exp-month"]',
                validators: {
                    notEmpty: {
                        message: 'The expiration month is required'
                    },
                    digits: {
                        message: 'The expiration month can contain digits only'
                    },
                    callback: {
                        message: 'Expired',
                        callback: function(value, validator) {
                            value = parseInt(value, 10);
                            var year         = validator.getFieldElements('expYear').val(),
                                currentMonth = new Date().getMonth() + 1,
                                currentYear  = new Date().getFullYear();
                            if (value < 0 || value > 12) {
                                return false;
                            }
                            if (year == '') {
                                return true;
                            }
                            year = parseInt(year, 10);
                            if (year > currentYear || (year == currentYear && value > currentMonth)) {
                                validator.updateStatus('expYear', 'VALID');
                                return true;
                            } else {
                                return false;
                            }
                        }
                    }
                }
            },
            expYear: {
                selector: '[data-stripe="exp-year"]',
                validators: {
                    notEmpty: {
                        message: 'The expiration year is required'
                    },
                    digits: {
                        message: 'The expiration year can contain digits only'
                    },
                    callback: {
                        message: 'Expired',
                        callback: function(value, validator) {
                            value = parseInt(value, 10);
                            var month        = validator.getFieldElements('expMonth').val(),
                                currentMonth = new Date().getMonth() + 1,
                                currentYear  = new Date().getFullYear();
                            if (value < currentYear || value > currentYear + 100) {
                                return false;
                            }
                            if (month == '') {
                                return false;
                            }
                            month = parseInt(month, 10);
                            if (value > currentYear || (value == currentYear && month > currentMonth)) {
                                validator.updateStatus('expMonth', 'VALID');
                                return true;
                            } else {
                                return false;
                            }
                        }
                    }
                }
            },
			cvv: {
		selector: '#cvv',
                validators: {
                    notEmpty: {
                        message: 'The cvv is required and can\'t be empty'
                    },
					cvv: {
                        message: 'The value is not a valid CVV',
                        creditCardField: 'cardnumber'
                    }
                }
            },
        }
    });
});
</script>
<script type="text/javascript">
            // this identifies your website in the createToken call below
            Stripe.setPublishableKey('pk_live_                             ');
 
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    // re-enable the submit button
                    $('.submit-button').removeAttr("disabled");
					// show hidden div
					document.getElementById('a_x200').style.display = 'block';
                    // show the errors on the form
                    $(".payment-errors").html(response.error.message);
                } else {
                    var form$ = $("#payment-form");
                    // token contains id, last4, and card type
                    var token = response['id'];
                    // insert the token into the form so it gets submitted to the server
                    form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
                    // and submit
                    form$.get(0).submit();
                }
            }
 

</script>




</head>
<body>
<form action="" method="POST" id="payment-form" class="form-horizontal">
  <div class="row row-centered">
  <div class="col-md-10 col-md-offset-1">
  <div class="page-header">
    <h2 class="gdfg col-12 text-white text-center">Prntpage Payment Form</h2>
  </div>
  <h1>
    Set the expiration date and once all details are correct, press the pay now button.
      </h1>
  <noscript>
  <div class="bs-callout bs-callout-danger">
    <h4>JavaScript is not enabled!</h4>
    <p>This payment form requires your browser to have JavaScript enabled. Please activate JavaScript and reload this page. Check <a href="http://enable-javascript.com" target="_blank">enable-javascript.com</a> for more informations.</p>
  </div>
  </noscript>
  <?php
require 'lib/Stripe.php';

$error = '';
$success = '';
	  
if ($_POST) {
  Stripe::setApiKey("sk_live_          ");

  try {
	if (empty($_POST['street']) || empty($_POST['city']) || empty($_POST['zip']))
      throw new Exception("Fill out all required fields.");
    if (!isset($_POST['stripeToken']))
      throw new Exception("The Stripe Token was not generated correctly");
    Stripe_Charge::create(array("amount" => "$saleTotal",
                                "currency" => "usd",
                                "card" => $_POST['stripeToken'],
								"description" => $_POST['email']));
    $success = '<div class="alert alert-success">
                <strong>Success!</strong> Your payment was successful.
				</div>';
  }
  catch (Exception $e) {
	$error = '<div class="alert alert-danger">
			  <strong>Error!</strong> '.$e->getMessage().'
			  </div>';
  }
}
?>
  <div class="alert alert-danger" id="a_x200" style="display: none;"> <strong>Error!</strong> <span class="payment-errors"></span> </div>
  <span class="payment-success">
  <?= $success ?>
  <?= $error ?>
  </span>
  <fieldset>
  
  <!-- Form Name -->
  <legend>Billing Details</legend>
  
  <!-- Street -->
  <div class="form-group">
    <label class="col-sm-4 control-label" for="textinput">Street</label>
    <div class="col-sm-6">
      <input type="text" name="street" placeholder="Street" value="<?php echo (isset($userAdd)) ? $userAdd: ''?>" class="address form-control">
    </div>
  </div>
  
  <!-- City -->
  <div class="form-group">
    <label class="col-sm-4 control-label" for="textinput">City</label>
    <div class="col-sm-6">
      <input type="text" name="city" placeholder="City" value="<?php echo (isset($userCity)) ? $userCity: ''?>" class="city form-control">
    </div>
  </div>
  
  <!-- State -->
  <div class="form-group">
    <label class="col-sm-4 control-label" for="textinput">State</label>
    <div class="col-sm-6">
      <input type="text" name="state" maxlength="65" placeholder="State" value="<?php echo (isset($userState)) ? $userState: ''?>" class="state form-control">
    </div>
  </div>
  
  <!-- Postcal Code -->
  <div class="form-group">
    <label class="col-sm-4 control-label" for="textinput">Postal Code</label>
    <div class="col-sm-6">
      <input type="text" name="zip" maxlength="9" placeholder="Postal Code" value="<?php echo (isset($userZip)) ? $userZip: ''?>" class="zip form-control">
    </div>
  </div>
  
  <!-- Country -->
  <div class="form-group">
    <label class="col-sm-4 control-label" for="textinput">Country</label>
    <div class="col-sm-6"> 
      <!--input type="text" name="country" placeholder="Country" class="country form-control"-->
      <input type="text" class=" form-control" name="country" placeholder="Select Country" value="<?php echo (isset($userCountry)) ? $userCountry: ''?>" data-flags="true" data-filter="true"> 
    </div>
  </div>
  
  <!-- Email -->
  <div class="form-group">
    <label class="col-sm-4 control-label" for="textinput">Email</label>
    <div class="col-sm-6">
      <input type="text" name="email" maxlength="65" placeholder="Email" value="<?php echo (isset($Temail)) ? $Temail: ''?>" class="email form-control">
    </div>
  </div>
  </fieldset>
  <fieldset>
    <legend>Card Details</legend>
    
    <!-- Card Holder Name -->
    <div class="form-group">
      <label class="col-sm-4 control-label"  for="textinput">Card Holder's Name</label>
      <div class="col-sm-6">
        <input type="text" name="cardholdername" maxlength="70" placeholder="Card Holder Name" value="<?php echo (isset($cardName)) ? $cardName: ''?>" class="card-holder-name form-control">
      </div>
    </div>
    
    <!-- Card Number -->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="textinput">Card Number</label>
      <div class="col-sm-6">
        <input type="text" id="cardnumber" maxlength="19" placeholder="Card Number"  value="<?php echo (isset($number)) ? $number: ''?>" class="card-number form-control">
      </div>
    </div>
    
    <!-- Expiry-->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="textinput">Card Expiry Date</label>
      <div class="col-sm-6">
        <div class="form-inline">
                    <select name="select2" data-stripe="exp-month" class="card-expiry-month stripe-sensitive required form-control">
            <option value="01" selected="selected">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          <span> / </span>
          <select name="select2" data-stripe="exp-year" class="card-expiry-year stripe-sensitive required form-control">
          </select>
          <script type="text/javascript">
            var select = $(".card-expiry-year"),
            year = new Date().getFullYear();
 
            for (var i = 0; i < 12; i++) {
                select.append($("<option value='"+(i + year)+"' "+(i === 0 ? "selected" : "")+">"+(i + year)+"</option>"))
            }
        </script> 
        </div>
      </div>
    </div>
    
    <!-- CVV -->
    <div class="form-group">
      <label class="col-sm-4 control-label" for="textinput">CVV/CVV2</label>
      <div class="col-sm-3">
        <input type="text" id="cvv" placeholder="CVV" value="<?php echo (isset($cvv)) ? $cvv: ''?>" maxlength="4" class="card-cvc form-control">
      </div>
    </div>
    
    <!-- Important notice -->
    <div class="form-group">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Important notice</h3>
      </div>
      <div class="panel-body">
        <p>Your card will be charged $<?php echo (isset($total)) ? $total: ''?> after submit.</p>
        <p>Card expiration date needs to be put in again.</p>
      </div>
    </div>
    
    <!-- Submit -->
    <div class="control-group">
      <div class="controls">
        <center>
          <button class="btn btn-success" type="submit">Pay Now</button>
        </center>
      </div>
    </div>
  </fieldset>
</form>
</body>
</html>
