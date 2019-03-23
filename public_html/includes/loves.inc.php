<?php

 
 
  session_start();
  $id = $_SESSION['id'];
  $refer = $_SESSION['refer_id'];
  
  

  
require 'db_connect.php';
if (isset($_POST['love-submit'])) {


$friendid = $_POST['friendid'];

  
  $sql =  "SELECT * FROM post WHERE id='$friendid'";
 $result = $conn->query($sql);

$row = $result->fetch_assoc();
$likes = $row['loves'];
$likes = $likes + 1;
$sql2 = "UPDATE post SET loves='$likes' WHERE id='$friendid'";
  $result2 = $conn->query($sql2);
 

    $sql3 = "INSERT INTO loves (uid, post_id) 
    VALUES (?, ?);";
        // Here we initialize a new statement using the connection from the dbh.inc.php file.
        $stmt = mysqli_stmt_init($conn);
        // Then we prepare our SQL statement AND check if there are any errors with it.
        if (!mysqli_stmt_prepare($stmt, $sql3)) {
          // If there is an error we send the user back to the signup page.
          header("Location: ../profile.php?id=$refer");
          exit();
     
        }
        else {

   
          mysqli_stmt_bind_param($stmt, "ii", $id, $friendid);
          // Then we execute the prepared statement and send it to the database!
          // This means the user is now registered! :)
          mysqli_stmt_execute($stmt);
          // Lastly we send the user back to the signup page with a success message!
       
       
         
        
        

          
          header("Location: ../profile.php?id=$refer");
              
          exit();
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
        }
      
}

    
    
