<?php
 session_start();
 $id = $_SESSION['id'];
$conn = new mysqli("localhost","prntpage_db","PrntpageAdmin123abc!@1","prntpage_db");



$sql="select * from notifications  ORDER BY created DESC";
$result=mysqli_query($conn, $sql);

$response='';

echo'        <div style="background:#31c677" class="head text-light ">
                        <div class="row">
                          <div class="col-lg-12 col-sm-12 col-12">
                            <span>Notifications</span>
                            </div>
                          </div>
                      </div>';


while($row=mysqli_fetch_array($result)) {
     
    $notid = $row['id'];
   
      $sqlGetHidden = "SELECT * from hide_notifications WHERE uid='$id' AND not_id='$notid'";
   
   $resultGetHidden=mysqli_query($conn, $sqlGetHidden);
   
  
    
 
    

    
	$response = $response . "<div style='max-height:400px; overflow:auto;' class='notification-item2 row'>" .
"	<i class='ml-2 text-red fas fa-exclamation-triangle fa-2x' style='color:red'></i>".

 "<div style='font-size:0.75rem' class='col-10 float-left '>" . $row["body"]  . " </div>". 
 

 
	
	"<div style='font-size:0.75rem' class='col-11 notification-comment2 float-left text-info'>".$row['created']. "</div>" .
	"</div>" ;

if(!empty($response)) {
	print $response;
}



   
   $sqlNotHidden = "INSERT INTO hide_notification (uid, not_id) VALUES ($id, $notid)";
    $resultNotHidden=mysqli_query($conn, $sqlNotHidden);
  
   



  echo'
  
  <div style="background:#31c677" class="footer text-center">
                       
                     </div> </div>';}

?>