<?php
 session_start();
 $id = $_SESSION['id'];
$conn = new mysqli("localhost","prntpage_db","PrntpageAdmin123abc!@1","prntpage_db");

$sql="UPDATE messages SET msg_read=1 WHERE msg_read=0 AND msg_to='$id'";	
$result=mysqli_query($conn, $sql);

$sql="select * from messages WHERE msg_to='$id' ORDER BY sent_on DESC";
$result=mysqli_query($conn, $sql);

$response='';

echo'        <div style="background:#31c677" class="head text-light ">
                        <div class="row">
                          <div class="col-lg-12 col-sm-12 col-12">
                            <span>Messages</span>
                            </div>
                          </div>
                      </div>';


while($row=mysqli_fetch_array($result)) {
     $userid = $row['msg_from'];
    
    $sqlGetUser = "select * from users WHERE idUsers='$userid'";
    $resultGetUser=mysqli_query($conn, $sqlGetUser);
     $rowGetUser=mysqli_fetch_array($resultGetUser);
    
    
	$response = $response . "<div style='max-height:400px; overflow:auto;' class='notification-item row'>" .
"	<img style='border-radius: 50%;' class='col-2 float-left'  height='40' width='40' src='users/photos/" . $rowGetUser['user_photo']. "'>".
"<div style='font-size:0.95rem' class='col-4 float-left'>".$rowGetUser['user_fn']. " ".$rowGetUser['user_ln']. "</div>".  
 "<div style='font-size:0.75rem' class='col-4 float-left text-info'>".$row['sent_on']. " </div>". 
 
   " <div class='form float-right mr-1' action='includes/del.message.inc.php' method='post'>
                           <input type='hidden' name='deleted' value='" . $row['id']. "'>
                           <a href='message.php?id=" . $row['msg_from']. "'>
                           <i class='fas fa-reply'>
                           </i>
                           </a> 
                          
                           
           
                           </div>".
 
	"<div style='font-size:0.75rem' class='col-11 notification-subject  float-left '>". $row["msg_subject"] . "</div>" . 
	"<div style='font-size:0.75rem' class='col-11 notification-comment float-right'>" . $row["msg_body"]  . "</div>" .
	"</div>" ;
}
if(!empty($response)) {
	print $response;
}
  echo'
  
  <div style="background:#31c677" class="footer text-center">
                        <a href="../messages-am.php" class="text-light">View All</a>
                     </div> </div>';

?>