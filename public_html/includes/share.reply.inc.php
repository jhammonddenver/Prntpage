<?php

 
 
  session_start();
  $id = $_SESSION['id'];
   $_SESSION['refer_id'] = $refer ;
  
  
require 'db_connect.php';
if (isset($_POST['share-submit'])) {


$friendid = $_POST['friendid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
  $origPoster = $fname . " ". $lname;
  $origTitle = $_POST['orig_title'];
  $title = $origTitle.' reposted from '.$origPoster;
  $origBody = $_POST['orig_body'];
  $friendid = $_POST['friendid'];
  $vis = "Everyone";
 

    $sql = "INSERT INTO post (uid, visibility, title, body) VALUES (?, ?, ?, ?);";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $stmt = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../profile.php?id=<?php echo '$refer'>&error=sqlerror");
          exit();
     
        }
        else {

   
          mysqli_stmt_bind_param($stmt, "isss", $id, $vis, $title, $origBody);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly we send the user back to the signup page with a success message!
         
         
         $sql2 = "INSERT INTO shares_reply (uid, post_id) VALUES (?, ?);";
         
         
         if (!mysqli_stmt_prepare($stmt, $sql2)) {
          // If there is an error we send the user back to the signup page.
          
          
          
          
          
  
          
          
          
          header("Location: ../profile.php?id=<?php echo '$refer'>&error=sqlerror");
          exit();
     
        }
        else {
            
            
               mysqli_stmt_bind_param($stmt, "ii", $id, $friendid);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly we send the user back to the signup page with a success message!
           $sql3 =  "SELECT * FROM post WHERE id='$friendid'";
 $result3 = $conn->query($sql3);

$row3 = $result3->fetch_assoc();
$likes = $row3['shares'];
$likes = $likes + 1;
            
                    
          $sql4 = "UPDATE post SET shares='$likes' WHERE id='$friendid'";
  $result4 = $conn->query($sql4);
        

          
          header("Location: ../profile.php?id=$id");
               $message = "Friend Request Sent";
echo "<script type='text/javascript'>alert('$message');</script>";
          exit();
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        }
      
    

    
    
}}