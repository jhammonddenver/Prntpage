<?php
     include 'topbar.php'; 
     
     $sql5 = "SELECT * FROM messages WHERE msg_to='$id' OR msg_from='$id' ORDER BY sent_on DESC";
      $sql999 = "SELECT * FROM notifications WHERE deleted='0' ORDER BY created DESC";

$result5 = $conn->query($sql5);
$result999 = $conn->query($sql999);

  
         $sql188 = "SELECT * FROM users WHERE idUsers='$id'";
        $result188 = $conn->query($sql188);
        $row188 = $result188->fetch_assoc();
        
     
     
?>

                        <div class="page-header__settings text-lg-right">
                            <div class="auth-user">
                               
                                
                                <div class="auth-user__list">
                                    <div class="auth-user__item page-notif">
                                        <a href="#" class="page-header__trigger dropdown-toggle" id="dropdownMenu-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class=" text-light fa fa-bell" aria-hidden="true"></i>
                                        </a>

                                        <div class="dropdown-menu auth-user__dropdown" aria-labelledby="dropdownMenu-0">
                                            <li style="background:#31c677" class="head text-light">
                        <div class="row">
                          <div class="col-lg-12 col-sm-12 col-12">
                            <span>Notifications </span>
                            
                          </div>
                      </li>
                     <?php
                      
                      
                      if ($result999->num_rows > 0) {
    // output data of each row
    while($row999 = $result999->fetch_assoc()) {
        $senderid = $row999["uid"];
          $deleted = $row999['deleted'];
        $sql60 = "SELECT * FROM users WHERE idUsers='$senderid'";
        $result60 = $conn->query($sql60);
        $row60 = $result60->fetch_assoc();
        if ($deleted !=1){
            
        
        echo "
                      
                      
                      
                      
                      <li class='notification-box'>
                        <div class='row'>
                          <div class='col-lg-4 col-sm-3 col-4 text-center'>
                            <i class='text-red fas fa-exclamation-triangle fa-2x' style='color:red'></i>
                          </div>    
                          <div class='col-lg-8 col-sm-8 col-8'>
                          
                             
                            <div>
                            
                               " . $row999['body']. "
                            </div>
                           
                            
                          </div>    
                        </div>
                      </li>
                      
                      " ;}}}
                      
                      
                      ?>
                      
                      
                     
                    </ul>
                                        </div>
                                    </div>

                                    <div class="auth-user__item page-note">
                                        <a href="#" class="page-header__trigger dropdown-toggle" id="dropdownMenu-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="text-light fa fa-comments" aria-hidden="true"></i>
                                        </a>

                                        <div class="dropdown-menu auth-user__dropdown" aria-labelledby="dropdownMenu-1">                                    
                                     <li style="background:#31c677" class="head text-light ">
                        <div class="row">
                          <div class="col-lg-12 col-sm-12 col-12">
                            <span>Messages</span>
                            
                          </div>
                      </li>
                      
                      
                      
                      
                      <?php
                      
                      
                      if ($result5->num_rows > 0) {
    // output data of each row
    while($row5 = $result5->fetch_assoc()) {
        $senderid = $row5["msg_from"];
          $deleted = $row5['deleted'];
        $sql6 = "SELECT * FROM users WHERE idUsers='$senderid'";
        $result6 = $conn->query($sql6);
        $row6 = $result6->fetch_assoc();
        
        
        
      
        
        if ($senderid != $id && $deleted !=1){
            
        
        echo "
                      
                      
                      
                      
                      <li class='notification-box'>
                        <div class='row'>
                          <div class='col-lg-4 col-sm-3 col-4 text-center'><a href='profile.php?id=" . $row5['msg_from']. "'>
                            <img  class='mt-2 p-1 rounded-circle' height='60' width='60' src='users/photos/" . $row6['user_photo']. "'>
                          </div>    
                          <div class='col-lg-8 col-sm-8 col-8'>
                            <strong class='text-info'>" . $row6['user_fn']. " " . $row6['user_ln']. "</strong></a>
                             <form class='form float-right' action='includes/del.message.inc.php' method='post'>
                           <input type='hidden' name='deleted' value='" . $row5['id']. "'><a href='message.php?id=" . $row5['msg_from']. "'><i class='fas fa-reply'></i></a> &nbsp;
                           
                            <button style='width:30px; height:35px' type='submit' class='btn' name='delete-submit'><i style='color:red' class='fa fa-trash' aria-hidden='true'></i>
</button>
                           </form>
                            <div>
                            " . $row5['msg_sub']. " <br>
                               " . $row5['msg_body']. "
                            </div>
                            <small class='text-info'>" . $row5['sent_on']. "</small><br>
                            
                          </div>    
                        </div>
                      </li>
                      
                      " ;}}}
                      
                      
                      ?>
                      
                      
                      
                      
                   
                      <li style="background:#31c677" class="footer text-center">
                        <a href="../messages-am.php" class="text-light">View All</a>
                      </li>
                    </ul>
                                        </div>
                                    </div>
                                    

                                    <div class="auth-user__item user-header">
                                        <a href="#" class="page-header__trigger dropdown-toggle caret" id="dropdownMenu-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           
                                                <img style="background-color:white;border-radius: 50%" height="40" width="40" alt="" src="users/photos/<?php echo $row188['user_photo']; ?>" >
                                           
                                        </a>

                                        <div class="dropdown-menu auth-user__dropdown" aria-labelledby="dropdownMenu-2">
                                            <div class="user-header__info">
                                                <div class="row align-items-center">
                                                    <div class="col-3 col-md-3">
                                                        <img style="border-radius: 50%" height="40" width="40" alt="" src="users/photos/<?php echo $row188['user_photo']; ?>" >
                                                    </div>
                                                    
                                                    <div class="col-9 col-md-9">
                                                        <div class="user-header__name">
                                           <?php echo "Welcome {$_SESSION['fn']}!"; ?>
                                                        </div>
                                                        <span class="user-header__email">
                                                            Have a Great Day!
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="user-header__list">
                                                <ul class="page-header__list">
                                                      <li class="page-header__item">
                                                        <a href="mydetails-am.php" class="page-header__link">
                                                           Account Management
                                                        </a>
                                                    </li>
                                                    
                                                    
                                                    
                                                    
                                                     <li class="page-header__item">
                                                        <a href="profile.php?id=<?php echo "{$_SESSION['id']}"; ?>" class="page-header__link">
                                                           Public Profile
                                                        </a>
                                                    </li>
                                                    <li class="page-header__item">
                                                        <a href="add-listing.php" class="page-header__link">
                                                            Create a Listing
                                                        </a>
                                                    </li>
                                                    
                                                     
                                                   <li class="page-header__item">
                                                        <a href="add-ad.php" class="page-header__link">
                                                           New Advertisement
                                                        </a>
                                                    </li>
                                                    
                                                      
                                                  
                                                    <li class="page-header__item">
                                                        <a href="/includes/logout.inc.php" class="page-header__link">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                  
                  

                  
                  
                                </div>
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>
        </header> 
         <body>