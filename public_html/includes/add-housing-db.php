  
    $sql = "SELECT * FROM users WHERE emailUsers=?;";
    // Here we initialize a new statement using the connection from the dbh.inc.php file.
    $stmt = mysqli_stmt_init($conn);
    // Then we prepare our SQL statement AND check if there are any errors with it.
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      // If there is an error we send the user back to the signup page.
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else {

      // If there is no error then we continue the script!

      // Next we need to bind the type of parameters we expect to pass into the statement, and bind the data from the user.
      mysqli_stmt_bind_param($stmt, "s", $mailuid);
      // Then we execute the prepared statement and send it to the database!
      mysqli_stmt_execute($stmt);
      // And we get the result from the statement.
      $result = mysqli_stmt_get_result($stmt);
      // Then we store the result into a variable.
      if ($row = mysqli_fetch_assoc($result)) {
      
          $_SESSION['id'] = $row['idUsers'];
          $_SESSION['email'] = $row['emailUsers'];
          $_SESSION['phone'] = $row['user_phone'];
          $_SESSION['photo'] = $row['user_photo'];
          $_SESSION['add1'] = $row['user_add1'];
          $_SESSION['add2'] = $row['user_add2'];
          $_SESSION['city'] = $row['user_city'];
          $_SESSION['state'] = $row['user_state'];
          $_SESSION['zip'] = $row['user_zip'];
          $_SESSION['country'] = $row['user_country'];
          $_SESSION['fn'] = $row['user_fn'];
          $_SESSION['ln'] = $row['user_ln'];
          $_SESSION['bd'] = $row['user_bday'];
          $_SESSION['sex'] = $row['user_gender']; 
          $_SESSION['pref'] = $row['user_pref'];
          $_SESSION['ul'] = $row['user_level'];
          $_SESSION['currency'] = $row['user_currency'];
          $_SESSION['lang'] = $row['user_lang'];
          $id = $_SESSION['id'];
          mysqli_stmt_close($stmt);
          
          $sql = "SELECT * FROM homes WHERE listing_uid='$id';";
    
    $stmt2 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt2, $sql)) {
      
      header("Location: ../add-property.php?error=sqlerror");
      exit();
    }
    else {
         $row = mysqli_fetch_assoc($result2);
          $_SESSION['lid'] = $row['listing_id'];
          $_SESSION['ltitle'] = $row['listing_title'];
          $_SESSION['ldisc'] = $row['listing_description'];
          $_SESSION['lnightly'] = $row['listing_nightly'];
          $_SESSION['lweekly'] = $row['listing_weekly'];
          $_SESSION['lmonthly'] = $row['listing_monthly'];
          $_SESSION['lpurchase'] = $row['listing_puchase'];
          $_SESSION['lrules'] = $row['listing_rules'];
          $_SESSION['lamenities'] = $row['listing_amenities'];
          $_SESSION['lmainphoto'] = $row['listing_main_photo'];
          $_SESSION['lbedrooms'] = $row['listing_bedrooms'];
          $_SESSION['lbathrooms'] = $row['listing_bathrooms'];
          $_SESSION['ladd1'] = $row['listing_add1'];
          $_SESSION['ladd2'] = $row['listing_add2']; 
          $_SESSION['lcity'] = $row['listing_city'];
          $_SESSION['lstate'] = $row['listing_state'];
          $_SESSION['lzip'] = $row['listing_zip'];
          $_SESSION['lcountry'] = $row['listing_country'];
          $_SESSION['lcemail'] = $row['listing_contact_email'];
          $_SESSION['lcphone'] = $row['listing_contact_phone'];
          $_SESSION['lsalerent'] = $row['listing_sale_or_rent'];
          $_SESSION['lmainphoto'] = $row['listing_main_photo'];
          $_SESSION['lphoto1'] = $row['listing_photo1'];
          $_SESSION['lphoto2'] = $row['listing_photo2'];
          $_SESSION['lphoto3'] = $row['listing_photo3'];
          $_SESSION['lphoto4'] = $row['listing_photo4'];
          $_SESSION['lphoto5'] = $row['listing_photo5'];
          $_SESSION['lphoto6'] = $row['listing_photo6'];
          $_SESSION['lphoto7'] = $row['listing_photo7'];
          $_SESSION['lphoto8'] = $row['listing_photo8'];
          $_SESSION['lphoto9'] = $row['listing_photo9'];
          $_SESSION['lphoto10'] = $row['listing_photo10'];
          $_SESSION['lphoto11'] = $row['listing_photo11'];
          $_SESSION['lphoto12'] = $row['listing_photo12'];
          $_SESSION['lphoto13'] = $row['listing_photo13'];
          $_SESSION['lphoto14'] = $row['listing_photo14'];
          $_SESSION['lphoto15'] = $row['listing_photo15'];
          $_SESSION['lphoto16'] = $row['listing_photo16'];
          $_SESSION['lphoto17'] = $row['listing_photo17'];
          $_SESSION['lphoto18'] = $row['listing_photo18'];
          $_SESSION['lphoto19'] = $row['listing_photo19'];
          $_SESSION['lphoto20'] = $row['listing_photo20'];
          
          header("Location: ../edit-profile.php");
          exit();
    }
      
   
  
  
  mysqli_stmt_close($stmt2);
  mysqli_close($conn);
}
else {
  // If the user tries to access this page an inproper way, we send them back to the signup page.
  header("Location: ../signup.php");
  exit();
}}