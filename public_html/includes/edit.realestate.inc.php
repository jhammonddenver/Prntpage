<?php
// Here we check whether the user got to this page by clicking the proper signup button.
  session_start();
if (isset($_POST['housing-submit'])) {

  // We include the connection script so we can use it later.
  // We don't have to close the MySQLi connection since it is done automatically, but it is a good habit to do so anyways since this will immediately return resources to PHP and MySQL, which can improve performance.
  require 'db_connect.php';

  // We grab all the data which we passed from the signup form so we can use it later.
  $id = $_SESSION['id'];
  $lid = $_SESSION['lid'];
  $ltype = $_POST['housing_type'];
  $lcat = $_POST['housing_cat'];
  $ltitle = $_POST['housing_title'];
  $ldesc = $_POST['housing_disc'];
  $lnightly = $_POST['housing_nightly'];
  $lweekly = $_POST['housing_weekly'];
  $lmonthly = $_POST['housing_monthly'];
  $lpurchase = $_POST['housing_purchase'];
  $lrules = $_POST['housing_rules'];
  $lbed = $_POST['housing_bedrooms'];
  $lbath = $_POST['housing_bathrooms'];
  $ladd1 = $_POST['housing_add1'];
  $ladd2 = $_POST['housing_add2'];
  $lapt = $_POST['housing_apt'];
  $lcity = $_POST['housing_city'];
  $lstate = $_POST['housing_state'];
  $lzip = $_POST['housing_zip'];
  $llat = $_POST['housing_lat'];
  $llong = $_POST['housing_long'];
  $lcountry = $_POST['housing_country'];
  $lcemail = $_POST['housing_contact_email'];
  $lcphone = $_POST['housing_contact_phone'];
  $cashArrival = isset($_POST['cash-arrival']) ?  1 : 0;
  $creditCardArrival = isset($_POST['credit-card-arrival']) ?  1 : 0;
  $instantBook = isset($_POST['instant-book']) ?  1 : 0;
  $noRefund = isset($_POST['non-refundable']) ?  1 : 0;
  $elevator = isset($_POST['elevator']) ?  1 : 0;
  $internet = isset($_POST['internet']) ?  1 : 0;  
  $wifi = isset($_POST['wifi']) ?  1 : 0;
  $family = isset($_POST['family']) ?  1 : 0;
  $gym = isset($_POST['gym']) ?  1 : 0;
  $freeParking = isset($_POST['free-parking']) ?  1 : 0;
  $hotTub = isset($_POST['hot-tub']) ?  1 : 0;
  $buzzer = isset($_POST['buzzer']) ?  1 : 0;
  $heating = isset($_POST['heating']) ?  1 : 0;
  $hangers = isset($_POST['hangers']) ?  1 : 0;
  $iron = isset($_POST['iron']) ?  1 : 0;
  $laptop = isset($_POST['laptop']) ?  1 : 0;
  $smoking = isset($_POST['smoking']) ?  1 : 0;
  $hairDryer = isset($_POST['hair-dryer']) ?  1 : 0;
  $dryer = isset($_POST['dryer']) ?  1 : 0;
  $fireplace = isset($_POST['fireplace']) ?  1 : 0;
  $kitchen = isset($_POST['kitchen']) ?  1 : 0;
  $essentials = isset($_POST['essentials']) ?  1 : 0;
  $pool = isset($_POST['pool']) ?  1 : 0;
  $tv = isset($_POST['tv']) ?  1 : 0;
  $cable = isset($_POST['cable']) ?  1 : 0;
  $paidParking = isset($_POST['paid_parking']) ?  1 : 0;
  $freeStreetParking = isset($_POST['free_street_parking']) ?  1 : 0;
  $handicap = isset($_POST['handicap']) ?  1 : 0;
  $privateEnterance = isset($_POST['private-enterance']) ?  1 : 0;
  $breakfast = isset($_POST['breakfast']) ?  1 : 0;
  $doorman = isset($_POST['doorman']) ?  1 : 0;
  $ac = isset($_POST['ac']) ?  1 : 0;
  $events = isset($_POST['events']) ?  1 : 0;
  $pets = isset($_POST['pets']) ?  1 : 0;
  $washer = isset($_POST['washer']) ?  1 : 0;
  $laddress = $ladd1." ".$ladd2.", ".$lcity.", ".$lstate.", ".$lcountry.", ".$lzip; 
  $lcancel = $_POST['housing_cancel'];
  
  
  
  
   $lsize = $_POST['housing_size'];
  $lmeasurement = $_POST['housing_measurement'];
 
 
   


     
        // If we got to this point, it means the user didn't make an error! :)

        // Next thing we do is to prepare the SQL statement that will insert the users info into the database. We HAVE to do this using prepared statements to make this process more secure. DON'T JUST SEND THE RAW DATA FROM THE USER DIRECTLY INTO THE DATABASE!

        // Prepared statements works by us sending SQL to the database first, and then later we fill in the placeholders (this is a placeholder -> ?) by sending the users data.
        $sql = "UPDATE homes SET type=?, listing_description=?, name=?, listing_purchase=?, listing_bedrooms=?, listing_bathrooms=?, listing_contact_email=?, listing_contact_phone=?, measurement=?, size=? WHERE id='$lid';";
        
     
      
       $stmt = mysqli_stmt_init($conn);
       
       if (!mysqli_stmt_prepare($stmt, $sql)) {
          // If there is an error we send the user back to the edit profile page.
          
          echo("Error description: " . mysqli_error($conn));
          exit();
        }
        else {


 mysqli_stmt_bind_param($stmt, "ssssiisssi", $ltype, $ldesc, $ltitle, $lpurchase, $lbed, $lbath, $lcemail, $lcphone, $lmeasurement, $lsize);


 mysqli_stmt_execute($stmt);


        	header("Location: ../edit-realestate.php?id=$lid");
             
  // Then we close the prepared statement and the database connection!
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

  exit();
}
}