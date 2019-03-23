<?php

 
 
  session_start();
  $id = $_SESSION['id'];
   $_SESSION['refer_id'] = $refer ;
   
   
   
   
   
   
   
   $replyPostTitle = 'Test';
  
  
require 'db_connect.php';
if (isset($_POST['reply-submit'])) {
    
    echo'
    
    
  
';
echo "
  <div class='modal-dialog col-6'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
      <h2>
     Reply to: 
      </h2><i>
      TEST
      </i>
        <button type='button' class='float-right close bg-red' data-dismiss='modal'>&times;</button><br>
        
      </div>
      <div class='modal-body'>
      <form class='form' method='POST' action='includes/reply.inc.php'>
      
     
        
          
            <input type='hidden' class='field' name='friendid'
        id='friendid' value='".$postid."'></input>
        
     
       
     
      
      <div class='form-group'>
  <label class='label' for='post'>Post:</label>
  <textarea class='form-control' rows='5' name='post' id='post' required></textarea>
</div> 
      
      </div>
      <div class='modal-footer'>
        <button type='submit' class='btn btn-default' name='reply-submit'>Reply</button></form>
      </div>
    </div>

  </div>
</div>

";
$friendid = $_POST['friendid'];
  $origPoster = $_POST['orig_poster'];
  $origTitle = $_POST['orig_title'];
  $title = $_POST['title'];
  $origBody = $_POST['orig_body'];
 
  $reply = $_POST['post'];
 

    $sql = "INSERT INTO post_reply (uid, post_id, title, reply) VALUES (?, ?, ?, ?);";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $stmt = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../profile.php?id=<?php echo '$refer'>&error=sqlerror");
          exit();
     
        }
        else {

   
          mysqli_stmt_bind_param($stmt, "iiss", $id, $friendid, $title, $reply);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly we send the user back to the signup page with a success message!
         
         
        
          
          
          
          
  
          
          
           
          
          header("Location: ../profile.php?id=$id");
               $message = "Friend Request Sent";
echo "<script type='text/javascript'>alert('$message');</script>";
          exit();
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        }
      
    

    
    
}