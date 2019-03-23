<?php
include_once 'includes/header.php';
 $referid = $_SESSION['BnBid'];
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
   $listingid = $_GET['id'];
   
   
   $userid = $_SESSION['id'];
  
   $sql4 =  "SELECT * FROM users WHERE idUsers='$userid'";
  
$result4 = $conn->query($sql4);

$row4 = $result4->fetch_assoc();



 $sqlBNB =  "SELECT * FROM bnbs WHERE id='$listingid'";
  
$resultBNB = $conn->query($sqlBNB);

$rowBNB = $resultBNB->fetch_assoc();


$nights = (int)$_POST['nights'];
$guest = (int)$_POST['guests'];


$nightlyPrice = (int)$rowBNB["listing_nightly"];
$int = (int) filter_var($nightlyPrice, FILTER_SANITIZE_NUMBER_INT);
$subTotal = (int)$nights * (int)$guest * (int)$int;
$commission = $subTotal * .04;
$total = $subTotal + $commission;


echo'







<FORM action="includes/book.bnb.inc.php" method=post>
<INPUT name=action type=hidden value=ns_quicksale_cc>
<INPUT maxLength=5 name=acctid size=5 type=hidden value=test0>
<INPUT maxLength=5 name=subid size=5 type=hidden value=tony2>
<INPUT name=Accepturl type=hidden value=http://trans.merchantpartners.com/cgi-bin/showresult.cgi>
<INPUT name=Declineurl type=hidden value=http://trans.merchantpartners.com/cgi-bin/showresult.cgi>
<INPUT name=emailsubject type=hidden value="Transaction Receipt">
<INPUT name="uid" type="hidden" value="'.$rowBNB['listing_uid'].'">
<INPUT name="listingid" type="hidden" value="'.$rowBNB['id'].'">



<input type="hidden" name="emailtext" value="Transaction Receipt for: @CI_NAME@
Customer Email: @CI_EMAIL@
Customer Phone: @CI_PHONE@
IP Address: @CI_IPADDR@
Customer Billing Address: @CI_BILLADDR1@
Billing Address 2: @CI_BILLADDR2@
Billing City: @CI_BILLCITY@
Billing State: @CI_BILLSTATE@
Billing Zip: @CI_BILLZIP@
Billing Country: @CI_BILLCOUNTRY@
Time of Transaction: @TIME@
Authorization Number: @AUTHNO@
Order ID: @ORDERID@
Amount of Purchase: @AMOUNT@">
<p>
<table border="1" width="555" height="319">
  <tr>
    <td width="555" height="313">
  <table width="555" border=1>
   <tr>
   <td bgcolor="#dddddd" width="548" align="center">&nbsp;<b>CREDIT
    CARD TRANSACTION</b></td>
   </tr>
  </table>  
      <table border="1" width="555">
        <tr>
          <td width="37%" bgcolor="#dddddd"><b>First Name:</b></td>
          <td width="63%">&nbsp;<input type="text" name="ssl_first_name" placeholder="Enter First Name" size="27"></td>
        </tr>
          <tr>
          <td width="37%" bgcolor="#dddddd"><b>Last Name:</b></td>
          <td width="63%">&nbsp;<input type="text" name="ssl_last_name" placeholder="Enter Last Name" size="27"></td>
        </tr>
        
        <tr>
          <td width="37%" bgcolor="#dddddd"><b>Card Number:</b></td>
          <td width="63%">&nbsp;<input type="text" name="ccnum" placeholder="Enter Credit Card Number" size="24"></td>
        </tr>
        
        
          <tr>
          <td width="37%" bgcolor="#dddddd"><b>CVV:</b></td>
          <td width="63%">&nbsp;<input type="text" name="cccvv" placeholder="Enter CVV" size="24"></td>
        </tr>
        
        <tr>
          <td width="37%" bgcolor="#dddddd"><b>Charge Amount:</b></td>
          <td width="63%">&nbsp;<input type="text" name=ssl_amount value="'.$total.'"></td>
        </tr>
        <tr>
          <td width="37%" bgcolor="#dddddd"><b>Expiration Date:</b></td>
          <td width="63%">&nbsp;<SELECT name="Expmon" size="1">
    				<OPTION selected value=1>1</OPTION>
        			<OPTION value=2>2</OPTION>
        			<OPTION value=3>3</OPTION>
        			<OPTION value=4>4</OPTION>
        			<OPTION value=5>5</OPTION>
                                <OPTION value=6>6</OPTION>
                                <OPTION value=7>7</OPTION>
                                <OPTION value=8>8</OPTION>
                                <OPTION value=9>9</OPTION>
                                <OPTION value=10>10</OPTION>
                                <OPTION value=11>11</OPTION>
                                <OPTION value=12>12</OPTION>
                                </SELECT>                                Month&nbsp;&nbsp;&nbsp;&nbsp;
                               <SELECT name="Expyear" size="1">
			                   
                               <OPTION value="2019">2019</OPTION>
                               <OPTION selected value="2020">2020</OPTION>
                               <OPTION value="2021">2021</OPTION>
                               <OPTION value="2022">2022</OPTION>
                               <OPTION value="2023">2023</OPTION>
                               </SELECT>Year</TD>
        </tr>
      </table>
  <table width="555" border=1>
   <tr>
   <td bgcolor="#dddddd" width="548">&nbsp;</td>
   </tr>
  </table>
<table border=1 width="556">
 <TR>
    <TD width="195" bgcolor="#dddddd"><b>E-mail Address:</b></TD>
    <TD width="345">&nbsp;<INPUT value="'.$row4["emailUsers"].'" name=ci_email size="28"></TD></TR>
  <TR>
    <TD width="195" bgcolor="#dddddd"><b>Billing Address 1:</b></TD>
    <TD width="345">&nbsp;<INPUT name=ci_billaddr1 size="34"></TD></TR>
  <TR>
    <TD width="195" bgcolor="#dddddd"><b>Billing Address 2:</b></TD>
    <TD width="345">&nbsp;<INPUT name=ci_billaddr2 size="34"></TD></TR>
 <TR>
    <TD width="195" bgcolor="#dddddd"><b>Billing City:</b></TD>
    <TD width="345">&nbsp;<INPUT name=ci_billcity size="34"></TD></TR>
  <TR>
  <TR>
    <TD width="195" bgcolor="#dddddd"><b>Billing State:</b></TD>
    <TD width="345">&nbsp;<INPUT name=ci_billstate size="34"></TD></TR>
    <TR>
    <TD width="195" bgcolor="#dddddd"><b>Billing Zip:</b></TD>
    <TD width="345">&nbsp;<INPUT name=ci_billzip size="34"></TD></TR>
    <TR>
    <TD width="195" bgcolor="#dddddd"><b>Billing Country:</b></TD>
    <TD width="345">&nbsp;<INPUT name=ci_billcountry size="34"></TD></TR>
  
</table>
      <div align="center">
        <center>
   <table>
   <tr>
   <td valign="middle" align="center"><INPUT type=submit value="Submit "></td>
   </tr>
</table>
        </center>
      </div>
</table>



';
include_once 'includes/footer.php';}
?>