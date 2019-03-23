<?php
include_once 'includes/header.php';

$id = $_SESSION['id'];
if(isset($_POST['del-bank-submit'])){
$cardid = $_POST['uid'];
$sqlDelBank = "DELETE from user_payout WHERE uid='$id'";
$resultDelBank =  $conn->query($sqlDelBank);

}





$sqlGetPayout = "SELECT * FROM user_payout WHERE uid='$id'";
$resultGetPayout = $conn->query($sqlGetPayout);

$rowGetPayout = $resultGetPayout->fetch_assoc();







if(isset($_POST['payout-method-submit'])){
    $id = $_SESSION['id'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $name = $_POST['name'];
    $type = $_POST['btype'];
    $account = $_POST['baccount'];
    $accountcon = $_POST['baccountcon'];
    $routing = $_POST['brouting'];
    $lastFour = $_POST['last-four'];
    
    
    $hashedaccount = password_hash($account, PASSWORD_DEFAULT);
    $hashedrouting = password_hash($routing, PASSWORD_DEFAULT);
    
    
    
    $sqlNewPayout = "INSERT INTO user_payout (uid, name, type, add1, add2, city, state, zip, country, account, last_four, routing) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmtNewPayout = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmtNewPayout, $sqlNewPayout)) {
          // If there is an error we send the user back to the signup page.
         echo("Error description: " . mysqli_error($conn)); 
          exit();
      
        }
        else if($account == $accountcon){

   
          mysqli_stmt_bind_param($stmtNewPayout, "isssssssssis", $id, $name, $type, $add1, $add2, $city, $state, $zip, $country, $hashedaccount, $lastFour, $hashedrouting);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmtNewPayout);
          // Lastly we send the user back to the signup page with a success message!
         
         
         
        

          
         
    mysqli_stmt_close($stmtNewPayout);
    header("Refresh:0");
   
        }
    
    
    
    
    
    
    
}







?>

<section class="page-tab">
    <div class="container">
      <h2 class="page-tab-header animated-fadeIn">Account Management</h2>
      <ul class="page-tab-list d-flex jc-c">
        <li class="active animated-fadeInUp"><a href="payment-method.php">Payment</a></li>
        <li class="animated-fadeInUp"><a href="messages-am.php">Messages</a></li>
       <li class="animated-fadeInUp"><a href="email-am.php">Email</a></li>
        <li class="animated-fadeInUp"><a href="purchases-am.php">Purchases</a></li>
        <li class="animated-fadeInUp"><a href="friends-am.php">Friends</a></li>
        <li class="animated-fadeInUp"><a href="mydetails-am.php">My Details</a></li>
      </ul>
      
       <?php
          if ($rowGetPayout["uid"] != null){
              echo'
          <form style="margin-left:10px" class="row form content-justify-right text-right" action="payout-method.php" method="POST">
          <h4 class="col-3 float-right content-justify-right text-right mt-3 ml-5">
          Your Payout Method      
         </h4><br>
         <div  style=" background-color:#efefef; height:50px"  class="col-2 text-left float-left">
         <label class="label col-12 float-left"> Name:  </label>  <p class="col-12 float-left">'.$rowGetPayout["name"].'</p>
          </div>
           
           
           
           <div  style=" background-color:#efefef; height:50px"  class="col-2 text-left float-left">
         <label style="margin-left:-30px" class="label col-12 float-left"> Type:    </label>
          
           '.$rowGetPayout["type"].'
          
          </div> 
          
          
            <div  style=" background-color:#efefef; height:50px"  class="col-2 text-left float-left">
         <label style="margin-left:-30px" class="label col-12 float-left"> Last 4 or Account:    </label>
          
           '.$rowGetPayout["last_four"].'
          
          </div> 
          
          <input type="hidden" name="uid" value="'.$id.'">
           <button class="btn col-1 float-left" style="margin-left:-5px ;background-color:#efefef; height:50px" type="submit" name="del-bank-submit">
          <i class="fas fa-trash-alt"></i>
          </button>
          </form></div>
          
         
          
          ';}
        
         ?>
      
    </div>
  </section>
  <section class="page-content page-content-payment">
    <div class="container">
      <div class="d-flex">
        <aside class="page-content-nav payment-page-content-nav animated-fadeInLeft">
          <ul class="vertical-tab">
            <li><a href="payment-method.php">Payment Method</a></li>
            <li><a href="payment-history.php">Payment History</a></li>
             <li  class="active"><a href="payout-method.php">Payout Method</a></li>
            <li><a href="payout.php">Payouts</a></li>
          </ul>
        </aside>
        <div class="page-content-view payment-page-content-view has-header animated-fadeIn ">
          <h4 class="page-content-header">Payout Method</h4>
          <div class="content-view row col-12">
           
           <img  class="float-left" height="50px"src="images/blank_check.png"><h5 class="float-left ml-3">
               Enter your payout method
               </h5>
               
               <form class="form row col-12" action="payout-method.php" method="POST">
                      <div class="col-6 float-left">
               <label class="label">Address 1</label>
           <input type="text" name="add1" class="col-12 form-control float-left">
           <label class="label">Address 2</label>
           <input type="text" name="add2" class="col-12 form-control float-left">
           <label class="label">City</label>
           <input type="text" name="city" class="col-12 form-control float-left">
           <label class="label">State</label>
           <input type="text" name="state" class="col-12 form-control float-left">
           <label class="label">Zip</label>
           <input type="text" name="zip" class="col-12 form-control float-left">
           
           <label class="label">Country</label>
           <input type="text" name="country" class="col-12 form-control float-left"> </div>
           <div class="col-6 float-left">
           <label class="label">Name</label>
           <input type="text" name="name" class="col-12 form-control float-left">
           
           <label class="label">Account Type</label>
           <select class="form-control custom-select" name="btype">
           <option value="Checking" selected>Checking</option>
           <option value="Savings">Savings</option>
           </select>
           
           
           
           
           
           <label class="label">Bank Account</label>
           <input type="password" name="baccount" class="col-12 form-control float-left">
            <label class="label">Confirm Bank Account</label>
           <input type="password" name="baccountcon" class="col-12 form-control float-left">
           <label class="label">Last 4 numbers of the Account</label>
           <input type="text" name="last-four" class="col-12 form-control float-left">
           
           <label class="label">Routing Number</label>
           <input type="password" name="brouting" class="col-12 form-control float-left">
           </div>
        
             <button style="col-5 margin-bottom:20px;" type="submit" class="btn btn-send  text-white float-right mr-0 mt-3" name="payout-method-submit">Save</button>
          
           </form>
           
           
           </div>
           
        
           
           
           
           
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
include_once 'includes/footer.php';

?>