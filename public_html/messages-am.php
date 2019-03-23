<?php
include_once 'includes/header.php';
if (isset($_POST['sender-submit'])) {
$selectedUser = $_POST['senderID'];
}



if (isset($_POST['reply-submit'])) {
    $id = $_SESSION['id'];
   $reply = $_POST['reply'];
   $replyTo = $_POST['recieverID'];
     $read = '0';
   

   
    $type = $_POST['type'];
   
   
   
   $sqlReplyMessage = "INSERT INTO messages (msg_from, msg_to, msg_body, msg_read, type) 
    VALUES (?, ?, ?, ?, ?);";



$stmt = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt, $sqlReplyMessage)) {
          // If there is an error we send the user back to the signup page.
         
       
     
        }
        else {

   
          mysqli_stmt_bind_param($stmt, "iisis", $id, $replyTo, $reply, $read, $type);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly we send the user back to the signup page with a success message!
         
         $selectedUser = $_POST['recieverID'];
     
   
        }



}



?>
<section class="page-tab">
    <div class="container">
      <h2 class="page-tab-header ">Account Management</h2>
      <ul class="page-tab-list d-flex jc-c">
        <li class="Up"><a href="payment-history.php">Payment</a></li>
        <li class="active Up"><a href="messages-am.php">Messages</a></li>
        <li class="Up"><a href="email-am.php">Email</a></li>
        <li class="Up"><a href="purchases-am.php">Purchases</a></li>
        <li class="Up"><a href="friends-am.php">Friends</a></li>
        <li class="Up"><a href="mydetails-am.php">My Details</a></li>
      </ul>
    </div>
  </section>
  <section class="page-content page-content-message">
    <div class="container">
      <div class="d-flex">
        <aside class="page-content-nav message-page-content-nav Left">
          <ul class="d-flex horizontal-tab tab">
            <li class="active"><a href="#" data-tab="personal-tab">Personal</a></li>
            <li><a href="#" data-tab="business-tab">Business</a></li>
          </ul>
          <div class="horizontal-tab-wrap horizontal-message-tab-wrap">
           <ul class="message-tab-content tab-content active" id="personal-tab">
      <?php
     $sql5 = "SELECT DISTINCT msg_from FROM messages WHERE msg_to='$id' OR msg_from='$id' AND type='Personal'  ORDER BY msg_from ASC ";
    $result5 = $conn->query($sql5);

    if ($result5->num_rows > 0) {
    // output data of each row
    while($row5 = $result5->fetch_assoc()) {
        $senderid = $row5["msg_from"];
        $selected = 'no';
       
        $sql6 = "SELECT * FROM users WHERE idUsers='$senderid' ORDER BY user_ln ASC";
        $result6 = $conn->query($sql6);
        $row6 = $result6->fetch_assoc();

     if ($row5["msg_from"] != $id){
    echo"

              
                      
                      
                      
                      
                      <li class='messager'>
                       <form class='m-0 p-0 form' action='messages-am.php' method='post'>
                       <input type='hidden' name='senderID' id='senderID' value='".$row6['idUsers']."'>
                       
                        <button type='submit' class='pb-5 m-0 btn' name='sender-submit'>
   
                       
                       
                       
                       
                       
                       
                       
                       
                        <span class='col-1 float-left'>
                            <img  class=' rounded-circle' height='40' width='40' src='users/photos/" . $row6['user_photo']. "'>
                         </span>
                            <span class='ml-2 message-tab-name'>" . $row6['user_fn']. " " . $row6['user_ln']. "</span></button>
                          
                          
                          
                          
                          
                          
                      </form>
                      </li>
                      
                      " ;}}}
                      
                      else{
                        
                        
    $sql5self = "SELECT DISTINCT msg_to FROM messages WHERE msg_from='$id' AND type='Personal'  ORDER BY msg_from ASC ";
    $result5self = $conn->query($sql5self);

    if ($result5self->num_rows > 0) {
    // output data of each row
    while($row5self = $result5self->fetch_assoc()) {
        $recieverid = $row5self["msg_to"];
        $selected = 'no';
       
        $sql6self = "SELECT * FROM users WHERE idUsers='$recieverid' ORDER BY user_ln ASC";
        $result6self = $conn->query($sql6self);
        $row6self = $result6self->fetch_assoc();

                        
                        
                        
                        
                        
                          
                      echo"     
                          
                          
                          
                          
                          
                                 
                      <li class='messager'>
                       <form class='m-0 p-0 form' action='messages-am.php' method='post'>
                       <input type='hidden' name='senderID' id='senderID' value='".$row6self['idUsers']."'>
                       
                        <button type='submit' class='pb-5 m-0 btn' name='sender-submit'>
   
                       
                       
                       
                       
                       
                       
                       
                       
                        <span class='col-1 float-left'>
                            <img  class=' rounded-circle' height='40' width='40' src='users/photos/" . $row6self['user_photo']. "'>
                         </span>
                            <span class='ml-2 message-tab-name'>" . $row6self['user_fn']. " " . $row6self['user_ln']. "</span></button>
                          
                          
                          
                          
                          
                          
                      </form>
                      </li>
                      
                      " ;
                          
                          
                          
                          
                          
                          
    }}
                          
                          
                          
                      }
                      
                      
                      ?>
    </ul>                  
            <ul class="message-tab-content tab-content " id="business-tab">
            
              
              
             
             
             
             
                   <?php
     $sql7 = "SELECT DISTINCT msg_from FROM messages WHERE msg_to='$id'  AND type='Business' ORDER BY msg_from ASC ";
    $result7 = $conn->query($sql7);

    if ($result7->num_rows > 0) {
    // output data of each row
    while($row7 = $result7->fetch_assoc()) {
        $senderid = $row7["msg_from"];
        $sql8 = "SELECT * FROM users WHERE idUsers='$senderid'  ORDER BY user_ln ASC";
        $result8 = $conn->query($sql8);
        $row8 = $result8->fetch_assoc();

        echo "
                      
                      
                      
                      <li class='messager'>
                       <form class='m-0 p-0 form' action='messages-am.php' method='post'>
                       <input type='hidden' name='senderID' id='senderID' value='".$row8['idUsers']."'>
                       
                        <button type='submit' class='pb-5 m-0 btn' name='sender-submit'>
   
                       
                       
                       
                       
                       
                       
                       
                       
                        <span class='col-1 float-left'>
                            <img  class=' rounded-circle' height='40' width='40' src='users/photos/" . $row8['user_photo']. "'>
                         </span>
                            <span class='ml-2 message-tab-name'>" . $row8['user_fn']. " " . $row8['user_ln']. "</span></button>
                          
                          
                          
                          
                          
                          
                      </form>
                      </li>
                           
                            
                       
                        </a>
                      </li>
                      
                      " ;}} ?>
              
              
              
              
              
              
              
            </ul>
          </div>
        </aside>
        <div class="page-content-view message-page-content-view  ">
          <div style="overflow:auto; height:600px;" class="messager">
           
           
           <?php 
           if ($selectedUser == null){
            echo'<h2 class="col-12 text-center" >Select sender to see messages.</h2>';
            include "includes/header.php";
          
               
           } else {
               
                $sql18 = "SELECT * FROM messages WHERE msg_to='$id' AND msg_from='$selectedUser' OR msg_from='$id' AND msg_to='$selectedUser' ORDER BY sent_on ASC";
    $result18 = $conn->query($sql18);

    if ($result18->num_rows > 0) {
    // output data of each row
    while($row18 = $result18->fetch_assoc()) {
        $timestamp = strtotime($row18['sent_on']);
        
      $date = date('d-m-Y', $timestamp);
      
      
$time = date('G:i:s', $timestamp);
        
        
        
        
        
               if($row18['msg_to'] == $id)
 {              
  $SenderInfo =  $row18['msg_to'];
  $sql19 = "SELECT * FROM users WHERE idUsers='$selectedUser'";
  $result19 = $conn->query($sql19);
        $row19 = $result19->fetch_assoc();
  
               
               echo'
               
            <div class="message-author">
              <div class="message-author-img">
                <img  class="rounded-circle" height="40" width="40" src="users/photos/' . $row19['user_photo']. '">
              </div>
              <p class="message-author-name">'.$row19["user_fn"].' '.$row19["user_ln"].'</p>
              <span class="message-author-date">'.$date.' @ '.$time.'</span>
            </div>
            <div class="message-text">
             '.$row18["msg_body"].'
             
            </div>
            
            
            ';
            }
         else{
            echo'
            
            <div class="message-author author-me">
              <div class="message-author-img">
                <img  class=" rounded-circle" height="40" width="40" src="users/photos/' . $_SESSION['photo']. '">
              </div>
              <p class="message-author-name">
              '.$_SESSION['fn'].' '.$_SESSION['ln'].'
              
              </p>
              <span class="message-author-date">'.$date.' @ '.$time.'</span>
            </div>
            <div class="message-text my-message">
             '.$row18["msg_body"].'
            </div>
            
         
          
          
          ';}}  
          
        
    }else{
        echo 'You have no messages';
        
        
    }
           
           
    }
        
          echo'
           </div>
           <form class="m-0 p-0 form" action="messages-am.php" method="post">
          
          
          
       
          
          
          
          
          
          
          <input type="hidden" name="type" id="type" value="'.$row18['type'].'">
          
          
          
          
          
          
          
          
          
          
          
           <input type="hidden" name="recieverID" id="recieverID" value="'.$row19['idUsers'].'">
          <div class="write-message">
            <textarea name="reply" class="col-12  float-left" placeholder="Enter a reply"></textarea>
            <button style="margin-top:2rem;" type="submit" class="send-message btn float-left col-1" name="reply-submit"><svg width="25px" height="21px">
                <defs>
                  <linearGradient id="PSgrad_0" x1="100%" x2="0%" y1="0%" y2="0%">
                    <stop offset="0%" stop-color="rgb(46,204,113)" stop-opacity="1" />
                    <stop offset="100%" stop-color="rgb(0,158,162)" stop-opacity="1" />
                  </linearGradient>
                </defs>
                <use xlink:href="#send-message" />
              </svg></button>
          </div>
          
          
          
          </form>
             ';  
               
           
           
           
           ?>
           
           
           
           
           
           
           
           
           
        </div>
      </div>
    </div>
  </section>


<?php







include_once 'includes/footer.php';

?>