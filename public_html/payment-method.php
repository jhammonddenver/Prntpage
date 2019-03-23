<?php
include 'includes/header.php';
$id = $_SESSION['id'];
if(isset($_POST['del-card-submit'])){
$cardid = $_POST['uid'];
$sqlDelCard = "DELETE from user_cc WHERE uid='$id'";
$resultDelCard =  $conn->query($sqlDelCard);

}

if( !isset($_SESSION['id']) ){
      
   echo '
    <div class="container ">
    <div class="row mt-3 justify-content-center">
    <center><h3>You must log in to continue.</h3> </center></div>
   <div class=" d-flex flex-column justify-content-center">
               
                    <div class="login row justify-content-center">
                   
                        <div class="col-12">
                        <p class="text-center">Thank you for stopping by.</p>
                            <div class="authorization-inner mx-auto">
                                <div class="col-12">                        
                                    <ul class="nav  ">
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-light " href="#">Sign In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-light" href="signup.php">Register</a>
                                        </li>
                                    </ul>                        
                                </div>

                                <div class="authorization-body">
                                    <form class="form authorization-form" action="includes/login.inc.php" method="post">
                                        <div class="authorization-form__top">
                                            <div class="form-group active">
                                                
                                                <input type="text" class="form-control"  name="mailuid" required>

                                                <label for="loginEmail" class="form-label">Email</label>

                                               

                                                
                                            </div>

                                            
                                            <div class="form-group">  
                                             <label  class="label">Password</label>
                                                <input type="password" class="form-control" name="pwd"  required>

                                                 

                                                

                                                      
                                            </div>                                    

                                            <div class="row justify-content-between align-items-center form-group no-gutters">
                                                <div class="col-12 col-md-6 mb-2 mb-md-0">                  
                                                    <div class="checkbox">
                                                        <label class="checkbox-label">
                                                            <input type="checkbox" class="checkbox-input" checked>
                                                            <span class="checkbox-indicator"></span>
                                                            <span class="checkbox-description">
                                                                Remember Me
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6 text-md-right">
                                                    <a href="#" class="form-link">
                                                        Forgot password?
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row justify-content-md-end">
                                                <div class="col-12 col-md-6 text-md-right">
                                                    <button type="submit" class="btn btn-send text-white" name="login-submit" >Sign In</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                    </form>
                                </div></div></div></div>
          ';
          include_once 'includes/footer.php';
            exit();
    
    } else {
    include_once 'includes/header.php';

 
 $sqlCCGet = "SELECT * FROM user_cc WHERE uid='$id'";
$resultCCGet = $conn->query($sqlCCGet);

$rowCCGet = $resultCCGet->fetch_assoc();
  
echo'

<section class="page-tab">
    <div class="container col-1 ">
      <h2 class="page-tab-header animated-fadeIn">Account Management</h2>
      <ul class="page-tab-list d-flex jc-c">
        <li class="active animated-fadeInUp"><a href="payment-method.php">Payment</a></li>
        <li class="animated-fadeInUp"><a href="messages-am.php">Messages</a></li>
       <li class="animated-fadeInUp"><a href="email-am.php">Email</a></li>
        <li class="animated-fadeInUp"><a href="purchases-am.php">Purchases</a></li>
        <li class="animated-fadeInUp"><a href="friends-am.php">Friends</a></li>
        <li class="animated-fadeInUp"><a href="mydetails-am.php">My Details</a></li>
      </ul></div>
                   ';
          
          
          if ($rowCCGet["uid"] != null){
              echo'
          <form style="margin-left:10px" class="row form content-justify-right text-right" action="payment-method.php" method="POST">
          <h4 class="col-3 float-right content-justify-right text-right mt-3 ml-5">
          Your Credit Card      
         </h4><br>
         <div  style=" background-color:#efefef; height:50px"  class="col-2 text-left float-left">
         <label class="label col-12 float-left"> Cardholders Name:  </label>  <p class="col-12 float-left">'.$rowCCGet["fname"].' '.$rowCCGet["lname"].'</p>
          </div>
           <div  style=" background-color:#efefef; height:50px"  class="col-2 text-left float-left">
         <label style="margin-left:-25px" class="label col-12 float-left">  CC Last 4:    </label>
          
          
          '.$rowCCGet["last_four"].'</div>
           <div  style=" background-color:#efefef; height:50px"  class="col-2 text-left float-left">
         <label style="margin-left:-30px" class="label col-12 float-left"> Expiration Date:    </label>
          
           '.$rowCCGet["emonth"].'/'.$rowCCGet["eyear"].'
          
          </div> 
          
          <input type="hidden" name="uid" value="'.$cardid.'">
           <button class="btn col-1 float-left" style="margin-left:-5px ;background-color:#efefef; height:50px" type="submit" name="del-card-submit">
          <i class="fas fa-trash-alt"></i>
          </button>
          </form></div>
          
         
          
          ';}
        
        
     
          
          echo'
    </div>
  </section>
  <section class="page-content page-content-payment">
    <div class="container">
      <div class="d-flex">
        <aside class="page-content-nav payment-page-content-nav animated-fadeInLeft">
          <ul class="vertical-tab">
            <li class="active"><a href="payment-method.php">Payment Method</a></li>
            <li><a href="payment-history.php">Payment History</a></li>
            
            <li><a href="payout-method.php">Payout Method</a></li>
            <li><a href="payouts.php">Payouts</a></li>
          </ul>
        </aside>
        <div class="row col-12 page-content-view payment-page-content-view has-header animated-fadeIn ">
          <h4 class="page-content-header">Payment Method</h4>
          
          
          
        
          
          
          
          
          <div class="content-view col-8 float-left">
            <p>To update your payment method, use the form below.</p> 
            <img height="50" src="images/major-Credit-Card-Logos.png" alt="">
            <form style="margin-left:60px" action="includes/new-payment-method.php" method="POST" class="form col-12 ">
                
                <div class="col-6 float-left">
            <label class="label">First Name</label>
            <input type="text" name="fname" class="form-control col-12">
            <label class="label">Last Name</label>
            <input type="text" name="lname" class="form-control col-12">
             <label class="label">Card Number</label>
            <input type="password" name="number" class="form-control col-12">
             <label class="label">Repeat Last 4 of CC</label>
            <input type="text" name="last_nums" class="form-control col-6" maxlength="4">
             
             <div style="margin-left:-15px" class="form-group col-12 float-left">
             <label class="label">Expiration Date</label>
           
            
            <select style="width:75px" class="form-control custom-select  " name="emonth">
            <option selected>Month</option>
            <option value="01">01</option>
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
            
            
           
             <select style="width:75px" class="form-control custom-select " name="eyear">
            <option selected>Year</option>
            <option value="19">2019</option>
            <option value="20">2020</option>
            <option value="21">2021</option>
            <option value="22">2022</option>
            <option value="23">2023</option>
            <option value="24">2024</option>
            <option value="25">2025</option>
            <option value="26">2026</option>
            <option value="27">2027</option>
            <option value="28">2028</option>
            <option value="29">2029</option>
            <option value="30">2030</option>
            </select>
            </div>
           <label class="label">CVV </label>
            <input type="password" class="form-control col-6" name="cvv">
            
            
            
             <input type="hidden" name="uid" value="'.$_SESSION['id'].'">
            </div>
            
            <div class="col-6 float-left">
              <label class="label">Billing Address 1 </label>
            <input type="text" class="form-control col-12" name="add1">
            <label class="label">Billing Address 2 </label>
            <input type="text" class="form-control col-12" name="add2">
             <label class="label">Billing City </label>
            <input type="text" class="form-control col-12" name="city">
            <label class="label">Billing State </label>
            <input type="text" class="form-control col-12" name="state">
            <label class="label">Billing Zip </label>
            <input type="text" class="form-control col-12" name="zip">
            <label class="label">Billing Country </label>
            <input type="text" class="form-control col-12" name="country">
            
            
            
            
             </div>
             <button style=" margin-top:30px; margin-bottom:20px;" type="submit" class="btn btn-send  text-white float-left ml-0" name="payment-method-submit">Save</button>
            </form>

          </div>
           </div>
          
        </div>
      </div>
    </div>
  </section>

';}
include_once 'includes/footer.php';

?>