<?php
include_once 'includes/header.php';
     include_once 'includes/navbar-map.php';
    
    if( !isset($_SESSION['id']) ){
       
   echo '
    <div class="container ">
    <div class="row mt-3 justify-content-center">
    <center><h3>You must log in to continue.</h3> </center></div>
   <div class=" d-flex flex-column justify-content-center">
               
                    <div class="login row justify-content-center">
                   
                        <div class="col-12">
                        <p class="text-center">Thank you for stopping by.</p>
                            <div class="authorization-inner mx-auto">
                                <div class="col-12">                        
                                    <ul class="nav  ">
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-light " href="#">Sign In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-light" href="signup.php">Register</a>
                                        </li>
                                    </ul>                        
                                </div>

                                <div class="authorization-body">
                                    <form class="form authorization-form" action="includes/login.inc.php" method="post">
                                        <div class="authorization-form__top">
                                            <div class="form-group active">
                                                
                                                <input type="text" class="form-control"  name="mailuid" required>

                                                <label for="loginEmail" class="form-label">Email</label>

                                               

                                                
                                            </div>

                                            
                                            <div class="form-group">  
                                             <label  class="label">Password</label>
                                                <input type="password" class="form-control" name="pwd"  required>

                                                 

                                                

                                                      
                                            </div>                                    

                                            <div class="row justify-content-between align-items-center form-group no-gutters">
                                                <div class="col-12 col-md-6 mb-2 mb-md-0">                  
                                                    <div class="checkbox">
                                                        <label class="checkbox-label">
                                                            <input type="checkbox" class="checkbox-input" checked>
                                                            <span class="checkbox-indicator"></span>
                                                            <span class="checkbox-description">
                                                                Remember Me
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6 text-md-right">
                                                    <a href="#" class="form-link">
                                                        Forgot password?
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row justify-content-md-end">
                                                <div class="col-12 col-md-6 text-md-right">
                                                    <button type="submit" class="btn btn-send text-white" name="login-submit" >Sign In</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                    </form>
                                </div></div></div></div>
          ';
          include_once 'includes/footer.php';
            exit();
    
    } else {
    include_once 'includes/header.php';
   $id = $_GET['id'];
 
 $thisid = $_SESSION['id'];
 
 $sql2 = "SELECT * FROM post WHERE id='$id'";
 $result2 = $conn->query($sql2);
 
  if ($result2->num_rows > 0) {
 
if ( !$row2 = $result2->fetch_assoc()){
    echo"There was an error";
} else {
 $userid = $row2['uid'];
 $title = $row2['title'];
 $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $replyid = $_POST['friendid'];
  $postid = $_POST['postid'];
 
  $sql3 = "SELECT * FROM users WHERE idUsers='$userid'";
 $result3 = $conn->query($sql3);
 
  if ($result3->num_rows > 0) {
 
if ( !$row3 = $result3->fetch_assoc()){
    echo"There was an error";
} else {
 $posterNameS = $fname .' '. $lname;
 
 $posterName = "Reply to: ". $posterNameS;
 
}}}}}
   
echo"   
   
   
   
   
   
   
   
   
   
    <div class='modal-content'>
      <div class='modal-header'>
      <h2>
    $posterName
      </i>
        <button type='button' class='float-right close bg-red' data-dismiss='modal'>&times;</button><br>
        
      </div>
      <div class='modal-body'>
      <form class='form' method='POST' action='includes/reply-post.reply.inc.php'>
      
       <input type='hidden' class='field' name='title'
        id='title' value='".$posterName."'></input>
        
          <input type='hidden' class='field' name='postid'
        id='postid' value='".$postid."'></input>
        
         <input type='hidden' class='field' name='replyid'
        id='replyid' value='".$replyid."'></input>
          
            <input type='hidden' class='field' name='friendid'
        id='friendid' value='".$thisid."'></input>
        
     
       
     
      
      <div class='form-group'>
  <label class='label' for='post'>Post:</label>
  <textarea class='form-control' rows='5' name='reply' id='reply' required></textarea>
</div> 
      
      </div>
      <div class='modal-footer'>
        <button type='submit' class='btn btn-default' name='reply-submit'>Reply</button></form>";