<?php
include_once 'includes/header.php';


if (isset($_POST['ftype-submit'])) {

 $id = $_SESSION['id'];
 $friendid = $_POST['friendid'];
 $type = $_POST['type'];
 $sqlUpdateFriend = "UPDATE friends SET type=? WHERE uid='$id' AND friend_id='$friendid'";
 $stmt = mysqli_stmt_init($conn);
       
       if (!mysqli_stmt_prepare($stmt, $sqlUpdateFriend)) {
          // If there is an error we send the user back to the edit profile page.
         
          exit();
        }
        else {


 mysqli_stmt_bind_param($stmt, "s", $type);


 mysqli_stmt_execute($stmt);


}
}



if (isset($_POST['new-message-submit'])) {

 $id = $_SESSION['id'];
 $friendid = $_POST['sendTo'];
 
 
 $type = $_POST['type'];
  $title = $_POST['title'];
   $body = $_POST['body'];
   $read = '0';
$sqlNewMessageFriendsAM = "INSERT INTO messages (msg_from, msg_to, msg_body, msg_read, type) 
    VALUES (?, ?, ?, ?, ?);";
    
     $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sqlNewMessageFriendsAM)) {
    
   
    
        }
        else {

   
          mysqli_stmt_bind_param($stmt, "iissis", $id, $friendid, $body, $read, $type);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);


   
    
   
        }
      

}

?>









<section class="page-tab">
    <div class="container">
      <h2 class="page-tab-header animated-fadeIn">Account Management</h2>
      <ul class="page-tab-list d-flex jc-c">
        <li class="animated-fadeInUp"><a href="payment-history.php">Payment</a></li>
        <li class="animated-fadeInUp"><a href="messages-am.php">Messages</a></li>
        <li class="animated-fadeInUp"><a href="email-am.php">Email</a></li>
        <li class="animated-fadeInUp"><a href="purchases-am.php">Purchases</a></li>
        <li class="active animated-fadeInUp"><a href="friends-am.php">Friends</a></li>
        <li class="animated-fadeInUp"><a href="mydetails-am.php">My Details</a></li>
      </ul>
    </div>
  </section>
  <section class="page-content page-content-message">
    <div class="container">
      
   <ul class="list-unstyled">
    
    
    
    
  
        <?php
         $id = $_SESSION['id'];
     $sql5TT = "SELECT * FROM friends WHERE uid='$id'";

$result5TT = $conn->query($sql5TT);









 if ($result5TT->num_rows > 0) {
    // output data of each row
    while($row5TT = $result5TT->fetch_assoc()) {
        $friendid = $row5TT["friend_id"];
        
        if ($friendid == $id){
            $otherid = $row5TT["uid"];
        }else {
             $otherid = $row5TT["friend_id"];
        }
        
        $sql6TT = "SELECT * FROM users WHERE idUsers='$otherid'";
        $result6TT = $conn->query($sql6TT);
        $row6TT = $result6TT->fetch_assoc();
        $sendTo = $otherid;
        echo "
                      
                         <div class='d-md-none row'>

//mobile view
                        
                        </div>
                        
                        
                        
                        
                        
                          <div class='d-none d-md-block'> 
                      
                      
                      <li style='border-style: solid; border-width: 1px; color:#e0e0e0;' class='m-2 p-1 mx-5 notification-box b-1'>
                        <div class='row'>
                          <div class='col-lg-1 col-sm-3 col-4 text-center float-left'><a href='profile.php?id=" . $row5TT['friend_id']. "'>
                            <img  class='mt-2 rounded-circle' height='40' width='40' src='users/photos/" . $row6TT['user_photo']. "'>
                          </div>    
                          <div class='col-lg-2 col-sm-8 col-8 float-left'>
                            <strong class='text-dark'>" . $row6TT['user_fn']. " " . $row6TT['user_ln']. "</strong></a>
                            
                           
                             
                        </div>
                        
                        
                    <form class='form col-sm-12 col-md-12 col-lg-7 col-xl-3 float-left' action='friends-am.php' method='post'>
                    
                    
                    
                     <input type='hidden' class='field' name='friendid'
        id='friendid' value='".$friendid. "'></input>
                    
                    
                    
                    
                         <label class='label'>Type:</label>
                         <select style='width:10rem; min-width:15rem;  ' class='col-sm-6  col-md-12 mb-1 col-lg-6 float-left form-control custom-select required' name='type'  aria-describedby='mutedField1'>  
                         
                          
                         <option  value='".$row5TT['type']."' selected>".$row5TT['type']."</option>
                         
                         
                         <option value='Boss'>Boss</option>
                       
                          <option value='Close Family'>Close Family</option>
                         <option value='Close Friend'>Close Friend</option>
                         <option value='Co-Worker'>Co-Worker</option>
                        <option value='Family'>Family</option>   
                         
                         <option value='Friend'>Friend</option>
                          <option value='Student'>Student</option>
                           <option value='Spouse'>Spouse</option>
                         <option value='Teacher'>Teacher</option>
                          <option value='Your Children'>Your Children</option>
                         <option value='Your Parents'>Your Parents</option>
                        
                        
                        </select>
                     
                        
                        
                         <button  type='submit' class='btn col-sm-6 col-md-5 col-lg-6  col-xl-1 float-left' name='ftype-submit'><i style='color:gray' class='fas fa-save'></i></button>
                        </form>
                        
                        
                        
                        
                        
                         <form style='margin-left:-40px' class='form col-sm-6 col-md-6 col-lg-6 col-xl-1 float-left my-0 ml-1' method='POST' action='includes/block2.inc.php'>
            
             <input type='hidden' class='field' name='friendid'
        id='friendid' value='".$friendid. "'></input>
        <label class='label'>Block:</label>
<button style='margin-left:-40px' type='submit' name='block-submit' class=' float-left btn'><i style='color:red' class='fas fa-user-times'></i></button>

</form> 
                        
                        
                        
                        
                        
                        
 <form class='form col-sm-6 col-md-6 col-lg-6 col-xl-1 float-left my-0 ml-1' method='POST' action='friends-am.php'>
            
             <input type='hidden' class='field' name='friendid'
        id='friendid' value='".$friendid. "'></input>
        <label class='label'>Message:</label>
        
        
        
        
        
<button style='margin-left:-30px' data-toggle='modal' type='button' data-target='#messageModal1a' name='send-mail' class=' float-left btn'><i style='color:navy' class='fas fa-envelope'></i></button>

</form>

";

if (isset($_POST['send-mail'])) {
    $sendToUser = $_POST['friendid'];

echo"
<div class='modal ' id='messageModal1a' tabindex='-1' role='document' aria-labelledby='exampleModalLabel' >
  
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>New Message</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
      <form class='form' method='POST' action='includes/new-message-friends.inc.php' >
      
          <div class='form-group'>

           <input type='hidden' name='type' value='Personal'> </input>
            <input type='hidden' name='sendToUserID' value='".$sendToUser."'> </input>
          </div>

          <div class='form-group'>
            <label for='message-text' class='col-form-label'>Message:</label>
            <textarea class='form-control' name='body' id='message-text'></textarea>
          </div>
        </form>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        <button type='submit' class='btn btn-primary' name='new-message-submit'>Send message</button>
        </form>
      </div>
    </div>
  </div>
</div>










</form>                         
                        
                        
       ";}                 
                        
                        
                        
                        
                        
                        
   echo"                     
                        
                        
                      
  <form class='form col-sm-6 col-md-6 col-lg-6 col-xl-1 float-left my-0 ml-1' method='POST' action='includes/unfriend2.inc.php'>
            
             <input type='hidden' class='field' name='friendid'
        id='friendid' value='".$friendid. "'></input>
        <label class='label'>Unfriend:</label>
<button style='margin-left:-30px' type='submit' name='unfriend-submit' class=' float-left btn'><i style='color:orange' class='fas fa-user-minus'></i></button>

</form> 

















</div>
                         
                      </li>
                      </div>
                      
                      " ;}} ?>

      
     
    
          
          
          
        
    </div>
  </section>


<?php
include_once 'includes/footer.php';

?>