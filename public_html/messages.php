<?php
session_start();
 include_once 'includes/header.php';
   $id = $_SESSION['id'];
    
   $sql5 = "SELECT * FROM messages WHERE msg_to='$id' OR msg_from='$id'";

$result5 = $conn->query($sql5);









 if ($result5->num_rows > 0) {
    // output data of each row
    while($row5 = $result5->fetch_assoc()) {
        $senderid = $row5["msg_from"];
        $deleted = $row5['deleted'];
        $messageid = $row5['id'];
        $_SESSION['messageToDelete'] = $row5['id'];
        if ($deleted !=1){
        $sql6 = "SELECT * FROM users WHERE idUsers='$senderid'";
        $result6 = $conn->query($sql6);
        $row6 = $result6->fetch_assoc();
        
        echo "
                      
                      
                      
                      
                      <li class='notification-box'>
                        <div class='row'>
                          <div class='col-lg-3 col-sm-3 col-3 text-center float-right'><a href='profile.php?id=" . $row5['msg_from']. "'>
                            <img  class='mt-2 rounded-circle' height='60' width='60' src='users/photos/" . $row6['user_photo']. "'>
                          </div>    
                          <div class='col-lg-5 col-sm-8 col-5 float-left'>
                            <strong class='text-info'>" . $row6['user_fn']. " " . $row6['user_ln']. "</strong></a>
                             <form class='form float-right col-1' action='includes/del.message.inc.php' method='post'>
                           <input type='hidden' name='deleted' value='" . $row5['id']. "'><a href='message.php?id=" . $row5['msg_from']. "'><i class='fas fa-reply'></i></a> &nbsp;
                           
                            <button style='width:30px; height:35px' type='submit' class='btn btn-danger p-1 m-1 ' name='delete-submit'><i class='fa fa-trash' aria-hidden='true'></i>
</button>
                           </form>
                            <div>
                            " . $row5['msg_sub']. " <br>
                               " . $row5['msg_body']. "
                            </div>
                            <small class='text-warning'>" . $row5['sent_on']. "</small>
                            
                           <br>
                         
   

                          </div>    
                        </div>
                      </li>
                      
                      " ;}else{
        
        
        
        
        
        
    }}}
                      
                     


                      
                      include_once 'includes/footer.php';
                      ?>