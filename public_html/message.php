<?php
session_start();
 include_once 'includes/header.php';
   $id = $_GET['id'];
    $_SESSION['userTo'] = $id;
   $sql4 =  "SELECT * FROM users WHERE idUsers='$id'";
$result4 = $conn->query($sql4);
$row4 = $result4->fetch_assoc();










?>

<h3>
    Send Message to <?php echo $row4["user_fn"];?>
</h3>    

<form class="form" action="includes/new-message.inc.php" method="post">
    
        
                   
    
<div class="form-group">
 

    <input type="hidden" name="type" value="Personal">
</div>






<div class="form-group">
 <label class="label">Message:</label><br>
 <input type="text" name="message" class="form-control" placeholder="Message" required>

</div>

<button type="submit" class="btn btn-send" name="message-submit">Submit</button>
</form>

    
   
    
    