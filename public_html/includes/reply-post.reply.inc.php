<?php
 session_start();
include_once 'db_connect.php';
    
    
    if(isset($_POST['reply-submit']) ){
       
  
    include_once 'includes/db_connect.php';
   $id = $_GET['id'];
 $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $friendid = $_POST['friendid'];
  $postid = $_POST['postid'];
  $replyid = $_POST['replyid'];
 $thisid = $_SESSION['id'];
 $title = $_POST['title'];
 
$reply = $_POST['reply'];
 
 
 
 
 
  $sql3 = "INSERT INTO post_reply (uid, post_id, title, reply) VALUES (?, ?, ?, ?)";
  
  
 $stmt = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt, $sql3)) {
          // If there is an error we send the user back to the signup page.
          printf("Errormessage: %s\n", mysqli_error($conn));
     
        }
        else {

   
          mysqli_stmt_bind_param($stmt, "iiss", $friendid, $postid, $title, $reply);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly we send the user back to the signup page with a success message!
         
         
         
        

          
          header("Location: ../profile.php?id=$thisid");
          exit();
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        }


}
   
   
   
   
   
   
   