


<?php
include_once 'includes/header.php';
    
    
    if( !isset($_SESSION['id']) ){
        $_SESSION['friend_req_id'] = $_SESSION['id'];
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
   
   
   $userid = $_SESSION['id'];
  
   $sql4 =  "SELECT * FROM users WHERE idUsers='$id'";
  
$result4 = $conn->query($sql4);

$row4 = $result4->fetch_assoc();


 $sql5 =  "SELECT * FROM friends WHERE uid='$id' AND friend_id='$userid' OR friend_id='$id' AND uid='$userid'";
 $result5 = $conn->query($sql5);


$sql4456DT =  "DELETE FROM friends WHERE friend_id='0'";
 $result4456DT = $conn->query($sql4456DT);
 
 
 
 
 
 $sqlPost = "SELECT * FROM post ORDER BY created DESC";
 $resultPost = $conn->query($sqlPost);



 $sqlDelPost =  "DELETE FROM post WHERE deleted='1'";
 $resultDelPost = $conn->query($sqlDelPost);


 
 $sqlPostUser = "SELECT * FROM post WHERE uid='$id' ORDER BY created DESC";
 $resultPostUser = $conn->query($sqlPostUser);







 
 
  $_SESSION['refer_id'] = $id ;
 



if ($result5->num_rows > 0) {


$friendCheck = Yes;
}
else {
    $friendCheck = No;
}









 $sql5990 =  "SELECT * FROM friend_req WHERE uid='$id' AND req_uid='$userid'";
 $result5990 = $conn->query($sql5990);
 
 
 
 
 $sql44577T =  "DELETE FROM friend_req WHERE req_uid='0'";
 $result44577T = $conn->query($sql44577T);

if ($result5990->num_rows > 0) {


$friendReqCheck = Yes;
}
else {
    $friendReqCheck = No;
}













 $sql7 =  "SELECT * FROM followers WHERE uid='$id' AND follower_id='$userid' ";
 $result7 = $conn->query($sql7);
 
 $sql445T =  "DELETE FROM followers WHERE follower_id='0'";
 $result445T = $conn->query($sql445T);

if ($result7->num_rows > 0) {


$followCheck = Yes;
}
else {
    $followCheck = No;
}













 $sql72 =  "SELECT * FROM blocked WHERE uid='$id' AND blocked_uid='$userid'";
 $result72 = $conn->query($sql72);
  $sql4456T =  "DELETE FROM blocked WHERE uid='0'";
 $result4456T = $conn->query($sql4456T);

if ($result72->num_rows > 0) {

$row72 = $result72->fetch_assoc();
$blockCheck = Yes;
$blocker = $row72['uid'];
}
else {
    $blockCheck = No;
}





 $sql73 =  "SELECT * FROM blocked WHERE uid='$userid' AND blocked_uid='$id'";
 $result73 = $conn->query($sql73);

if ($result73->num_rows > 0) {

$row73 = $result73->fetch_assoc();
$blockerCheck = Yes;
$blocker = $id;
}
else {
    $blockerCheck = No;
}







$addressDB = $row4["user_address"];
$ladd1 = $row4["user_add1"];
$ladd2 = $row4["user_add2"];
$lcity = $row4["user_city"];
$lstate = $row4["user_state"];
$lcountry = $row4["user_country"];
$lzip = $row4["user_zip"];

if (empty($addressDB)){
    
    
     $laddress = $ladd1." ".$ladd2.", ".$lcity.", ".$lstate.", ".$lcountry.", ".$lzip; 
  
    
    
    $sql65 = "UPDATE users SET user_address='$laddress' WHERE idUsers='$id'";

$updateAdd = $conn->query($sql65);
    
}


$bday = $row4["user_bday"];
$bmonth = $row4["user_bmonth"];
$byear = $row4["user_byear"];


switch ($bmonth) {
    case "January":
        $bNumMonth = 1;
        break;
    case "February":
        $bNumMonth = 2;
        break;
    case "March":
       $bNumMonth = 3;
        break;
        
          case "April":
        $bNumMonth = 4;
        break;
    case "May":
        $bNumMonth = 5;
        break;
    case "June":
       $bNumMonth = 6;
        break;
        
        
           case "July":
        $bNumMonth = 7;
        break;
    case "August":
        $bNumMonth = 8;
        break;
    case "September":
       $bNumMonth = 9;
        break;
        
          case "October":
        $bNumMonth = 10;
        break;
    case "November":
        $bNumMonth =  11;
        break;
    case "December":
       $bNumMonth = 12;
        break;
        
        
}











 
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $bNumMonth, $bday, $byear))) > date("md")
    ? ((date("Y") - $byear) - 1)
    : (date("Y") - $byear));
  
$sql6 = "UPDATE users SET user_age='$age' WHERE idUsers='$id'";

$updateAge = $conn->query($sql6);




if ($blockCheck == "Yes"){
    echo '
    <span style="background-color:red; min-height:42rem;width:98%!important" class="text-white text-center container-fluid content-justify-center row  ml-3 mt-5 mb-0">
    <h1 class="mt-5 pt-5 col-12 text-center align-middle"><center><br>
    Unfortunately, this user has blocked you.
    </h1></center>
    </span></div>
    ';
    include_once 'includes/footer.php';
            exit();
}



if ($blockerCheck == "Yes"){
    echo '
    <div style="background-color:red;min-height:40rem;" class="page-wrapper">
    <span style="background-color:red; min-height:40rem;width:98%!important" class="text-white text-center container-fluid content-justify-center   ml-3 mt-5 mb-0">
    <h1 class="mt-5 pt-5 col-12 text-center "><center><br>
    You have blocked this User.
    </h1></center><br><br>
  
  <form class="row col-12" method="POST" action="includes/unblock.inc.php">
            
             <input type="hidden" class=" field" name="friendid"
        id="friendid" value="'."$id". '"></input>
        
        
        <div class=" col-5"></div>
        
        
<button type="submit" name="unblock-submit" class="ml-4 col-1 btn btn-warning  text-white">Unblock</button>

</form> 
    
    
    
    
    
    
    
    </span></div>
    ';
    include_once 'includes/footer.php';
            exit();
}
 











?>

  <!-- Main content  : start -->
        <main class="page-content"> 

            <div class="admin">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page__title text-center"><?php echo "{$row4['user_fn']} {$row4['user_ln']}"; ?>'s Profile</h2>
                        </div>
                        
                         <div class="row col-12">
                       
                        
                        

                   
                                                                
                                        
                                        
                                        
                                        
                                         
                                        
                                        
<?php
if (($id != $userid)&& ($blockCheck == 'No')){
    echo"
    
    
      <a class='col-3 float-left btn btn-send'  href='message.php?id=
      ".$id."
      '><font color='#fff'>Send Message</font></a>
    ";
    }
    
    if ($id == $userid){
         echo" 
      <div class='ml-5 row col-12'>
       
       <a class='ml-5 col-5 btn btn-send text-white' href='edit-profile.php'>Edit Profile</a>  
       
       
       
    <a class=' btn btn-info ml-5 col-5 ml-1 text-white' data-toggle='modal' data-target='#myModal'>New Post</a>
</div>











<!-- Modal -->

<div id='myModal' class='modal fade' role='dialog'>

  <div class='modal-dialog col-6'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
      <h2>
      What is on your mind?
      </h2>
        <button type='button' class='float-right close bg-red' data-dismiss='modal'>&times;</button><br>
        
      </div>
      <div class='modal-body'>
      <form class='form' method='POST' action='includes/new-post.inc.php'>
      
      <label class='label'>Visibility</label>
      <select class='form-control custom-select' id='visibility' name='visibility'>
      <option value='Everyone' selected>Everyone</option>
      <option value='Friends and thier Friends'>Friends and thier Friends</option>
      <option value='Friends Only'>Friends Only</option>
      <option value='Family Only'>Family Only</option>
      <option value='Coworkers Only'>Coworkers Only</option>
      <option value='No Family'>No Family</option>
      <option value='No Coworkers'>No Coworkers</option>
      
      
      
      
      
      </select>
      
      <label class='label' for='title'>Title:</label>
      <input type='text' class='form-control' id='title' name='title' placeholder='Enter a title' required><br>
      
      <div class='form-group'>
  <label class='label' for='post'>Post:</label>
  <textarea class='form-control' rows='5' name='post' id='post' required></textarea>
</div> 
      
      </div>
      <div class='modal-footer'>
        <button type='submit' class='btn btn-default' name='new-post-submit'>Save</button></form>
      </div>
    </div>

  </div>
</div>
        
    ";
    
    
    
    
    
    
    }}
    
    
    
    
    
    if (($friendCheck == 'Yes')&& ($blockCheck == 'No')) {
        
    echo'    
<div class=" col-3  float-left">
  <form method="POST" action="includes/unfriend.inc.php">
            
             <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$id". '"></input>
<button type="submit" name="unfriend-submit" class=" btn btn-primary  text-white">Unfriend</button>

</form> </div>
';
    }  
    

           if (($followCheck == 'No')&&($id != $userid) && ($blockCheck == 'No')) 
    
    {
        echo '

<div class=" col-3  float-left">
  <form method="POST" action="includes/follow.inc.php">
            
             <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$id". '"></input>
<button type="submit" name="follow-submit" class=" btn btn-warning  text-white">Follow</button>

</form> </div>

        ';

    
    }




   if (($followCheck == 'Yes')&&($id != $userid) && ($blockCheck == 'No')) 
  
        {
        echo '

<div class=" col-3  float-left">
  <form method="POST" action="includes/unfollow.inc.php">
            
             <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$id". '"></input>
<button  type="submit" name="unfollow-submit" class=" btn btn-warning  text-white">Unfollow</button>

</form> </div>

        ';

    
    }
            
            
            












    
     if ($friendReqCheck == 'Yes')
    
    {
        echo '
        
        <div class=" col-3  float-left">
            <form method="POST" action="includes/cancel.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$id". '"></input>
            
<button type="submit" class="btn btn-secondary" name="cancel-submit">Cancel Friend Request</button></form></div>



  ';}
 
    
     if (($friendReqCheck == 'No')&&($id != $userid) && ($friendCheck == 'No') && ($blockCheck== 'No')) 
  
        {
        echo '

<div class=" col-3  float-left">
  <form method="POST" action="includes/friend.inc.php">
            
             <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$id". '"></input>
<button  type="submit" name="friend-submit" class=" btn btn-primary  text-white">Friend</button>

</form> </div>

        ';

    
    }
 
 
 
 
 
 
            
            
            
            
               if (($id != $userid) && ($blockCheck == 'No') && ($blockerCheck = 'No'))
    
    {
                
                                   echo '     
                                        
                                    <div class=" col-3  float-left">
  <form method="POST" action="includes/block.inc.php">
            
             <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$id". '"></input>
<button  type="submit" name="block-submit" class=" btn btn-danger  text-white">Block</button>

</form> </div>  
';}?>




 </div>
                            
                    </div>          
                            <div class="profile">
                        <div class="row">
                            <div class="col-12 col-md-4 col-lg-3 float-left">
                                <div class="profile__info">
                                    <div class="profile__info-top text-center">
                                        
                                            <img height="268" width="345" src="users/photos/<?php echo "{$row4['user_photo']}   
                                             "; ?> ">
                                       

                                        
                                        <span class="profile__adress">
                                             <?php echo "{$row4['user_city']}  {$row4['user_state']} 
                                             "; ?> <br>
                                                 <?php echo "{$row4['user_pref']}   
                                             "; ?> <?php echo "{$row4['user_gender']}   
                                             "; ?> 
                                            <br>
                                            
                                            
  
                                             
                                        </span>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                               
                                      
                                        
                                    </div>











                                                                     
                                </div>

                               
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-8 float-left">
                                
                        
                        
                        
                      
                        
                                
                        
                        
                        
                        
                        
                        
                        
 
                        
                        
                        
                        
                        
                                   
                        
<?php


        
                      if ($resultPostUser->num_rows > 0) {
    // output data of each row
    while($rowPostUser = $resultPostUser->fetch_assoc()) {
        
        
        if ($deleted !=1 && $rowPostUser['uid'] == $id && $rowPostUser['uid'] != $userid){
            
            
            
            
            


            
            
            
            
            
            echo '
            <div style="border-style: solid;border-width: 5px;" class=" p-1 m-2 row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-4 float-left">
            <img alt="" height="100" width="100" src="/users/photos/'.$row4['user_photo'].'">
            </div>
            <div class="col-12 col-md-12 col-lg-12 col-xl-4 float-left">
             <strong>
            '.$rowPostUser['title'].'
            </strong><br>
            <p>
            '.$rowPostUser['body'].'
            </p>
            </div>
            </div>
            ';
            
            
        }}}
                         
?>             
                        
                        
                        
                        
                        
       
       
       
       
          <?php


        
                      if ($resultPost->num_rows > 0) {
    // output data of each row
    while($rowPost = $resultPost->fetch_assoc()) {
         $poster = $rowPost['uid'];
        $deleted = $rowPost['deleted'];
        $postid = $rowPost['id'];
        
        $postTitle = $rowPost['title'];
        $postBody = $rowPost['body'];
        
        
        
         $sqlPostReply = "SELECT * FROM post_reply WHERE post_id='$postid' ORDER BY created DESC";
 $resultPostReply = $conn->query($sqlPostReply);


               
            $sqlHiddenCheck =  "SELECT * FROM hide_post WHERE post_id='$postid' AND uid='$userid'";
        $resultHiddenCheck = $conn->query($sqlHiddenCheck);
        
        
        
         $sqlDelHidePost =  "DELETE FROM hide_post WHERE uid='0'";
 $resultDelHidePost = $conn->query($sqlDelHidePost);
        
        
        
 
        if ($resultHiddenCheck->num_rows > 0){
            $hiddenCheck = 'Yes';
            
        }else{
                $hiddenCheck = 'No';
            
        }
        
        
        
        

        
        
  
        
        
        
        
        
        
        
        
        $sqlFollowedCheck =  "SELECT * FROM followers WHERE follower_id='$userid' AND uid='$poster'";
        $resultFollowedCheck = $conn->query($sqlFollowedCheck);
 
        if ($resultFollowedCheck->num_rows > 0){
            $followedCheck = 'Yes';
            
        }else{
                $followedCheck = 'No';
            
        }
        
        
        
        
        
         $sqlLikedCheck =  "SELECT * FROM likes WHERE post_id='$postid' AND uid='$userid'";
        $resultLikedCheck = $conn->query($sqlLikedCheck);
 
        
         $sqlDelLikes =  "DELETE FROM likes WHERE uid='0'";
 $resultDelLikes = $conn->query($sqlDelLikes);
        
        
        
        if ($resultLikedCheck->num_rows > 0){
            $likedCheck = 'Yes';
            
        }else{
                $likedCheck = 'No';
            
        }
        
        
       

        
            $sqlDislikedCheck =  "SELECT * FROM dislikes WHERE post_id='$postid' AND uid='$userid'";
        $resultDislikedCheck = $conn->query($sqlDislikedCheck);
        
        
        
         $sqlDelDislikes =  "DELETE FROM dislikes WHERE uid='0'";
 $resultDelDislikes = $conn->query($sqlDelDislikes);
        
        
        
 
        if ($resultDislikedCheck->num_rows > 0){
            $dislikedCheck = 'Yes';
            
        }else{
                $dislikedCheck = 'No';
            
        }
        
        
     
        
        
        $sqlLovedCheck =  "SELECT * FROM loves WHERE post_id='$postid' AND uid='$userid'";
        $resultLovedCheck = $conn->query($sqlLovedCheck);
        
        
        
        
         $sqlDelLoves =  "DELETE FROM loves WHERE uid='0'";
 $resultDelLoves = $conn->query($sqlDelLoves);
        
        
 
        if ($resultLovedCheck->num_rows > 0){
            $lovedCheck = 'Yes';
            
        }else{
                $lovedCheck = 'No';
            
        }
        
        
                     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
     
        
        
        
        
        
        
        
        
        
        
              $sqlFlaggedCheck =  "SELECT * FROM flagged_post WHERE post_id='$postid' AND uid='$userid'";
        $resultFlaggedCheck = $conn->query($sqlFlaggedCheck);
        
        
        
         $sqlDelFlaggedPost =  "DELETE FROM flagged_post WHERE uid='0'";
 $resultDelFlaggedPost = $conn->query($sqlDelFlaggedPost);
        
         $sqlDelFlaggedPostreply =  "DELETE FROM flagged_reply WHERE uid='0'";
 $resultDelFlaggedPostreply = $conn->query($sqlDelFlaggedPostreply);
        
        
 
        if ($resultFlaggedCheck->num_rows > 0){
            $flaggedCheck = 'Yes';
            
        }else{
                $flaggedCheck = 'No';
            
        }
        
    
        
        
        
        
            $sqlPoster = "SELECT * FROM users WHERE idUsers='$poster'";
            $resultPoster = $conn->query($sqlPoster);
        $rowPoster = $resultPoster->fetch_assoc();
        
        $origPoster = $rowPoster['user_fn'].' '. $rowPoster['user_ln'];
        
        
        if ($deleted !=1 && $followedCheck == 'Yes' && $userid == $id  && $hiddenCheck == 'No'|| $userid == $id && $poster == $userid && $hiddenCheck == 'No'){
            echo '
            <div style="border-style: solid;border-width: 5px;" class=" ml-md-5 p-1 m-2 row col-12">
            <div class="col-12 col-lg-12 col-xl-1 float-left">
            <p>
            <a href="profile.php?id='.$rowPoster['idUsers'].'">
            <img alt="'.$rowPost['uid'].'" height="100" width="100" src="/users/photos/'.$rowPoster['user_photo'].'"></a></p></div>
            <div class="col-12 col-lg-12 col-xl-2 pl-lg-5 " float-left>
            <p>
            Likes: '.$rowPost['likes'].'
            <br>
            Dislikes: '.$rowPost['dislikes'].'
            <br>
            Loves: '.$rowPost['loves'].'
            <br>
            Shares: '.$rowPost['shares'].'
            </p>
            </div>
            <div class="col-12 col-md-12 col-lg-12 col-xl-5 pl-lg-5 float-left">
             <strong>
            '.$rowPost['title'].'
            </strong><br>
            <p>
            '.$rowPost['body'].'
            </p>
            </div>
                <div  class="col-12 col-md-12  col-xl-3 pl-lg-2 content-justify-center float-left">
          ';
          
          
          if($likedCheck == "No"){
              
              
          
          
          echo '
          
          
           <form method="POST" action="includes/like.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$postid". '"></input>
            
<button type="submit" class="col-3 col-lg-1   p-auto mx-auto my-auto btn float-left" name="like-submit"><i style="margin-left:-10px; margin-top:0px" class="fas fa-thumbs-up"></i></button></form>
          
                  ';
          }
          
          
          
          
          
          
          else{
              echo'
              <form method="POST" action="includes/unlike.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$postid". '"></input>
            
<button type="submit" class="col-3 col-lg-1 p-auto mx-auto my-auto  btn float-left" name="unlike-submit"><i style="color:green;margin-left:-10px; margin-top:0px;" class=" fas fa-thumbs-up"></i></button></form>
         

          
              ';}
          
          
          if($dislikedCheck == "No"){
              
              
          
          
          echo '
          
          
          
            <form method="POST" action="includes/dislike.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$postid". '"></input>
            
<button type="submit" class="col-3 col-lg-1  py-1  btn float-left" name="dislike-submit"><i style="margin-left:-10px; margin-top:0px" class="fas fa-thumbs-down"></i></button></form>
  
          
                  ';
          }
          
          
          else{
              echo'
          
          
               <form method="POST" action="includes/undislike.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$postid". '"></input>
            
<button type="submit" class="col-3 col-lg-1 p-auto mx-auto my-auto  btn float-left" name="undislike-submit"><i style="color:green;margin-left:-10px; margin-top:0px;" class=" fas fa-thumbs-down"></i></button></form>
         
     
          
           ';}
            
          if($lovedCheck == "No"){
              
              
          
          
          echo '
          
          
             <form method="POST" action="includes/loves.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$postid". '"></input>
            
<button type="submit" class="col-3 col-lg-1  py-1  btn float-left" name="love-submit"><i style="margin-left:-10px; margin-top:0px" class="fas fa-heart"></i></button></form>
          
          
          
                  ';
          }
          
          
          else{
              echo'
          
          
               <form method="POST" action="includes/unlove.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$postid". '"></input>
            
<button type="submit" class="col-3 col-lg-1 p-auto mx-auto my-auto  btn float-left" name="unlove-submit"><i style="color:green;margin-left:-10px; margin-top:0px;" class=" fas fa-heart"></i></button></form>
          
          
          
          
          
          
          
          
          
            ';}
             
          echo'
          
            
             <form method="POST" action="includes/share.inc.php">
           <input type="hidden" class="field" name="orig_poster"
        id="orig_poster" value="'."$origPoster". '"></input>
          
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$postid". '"></input>
        
        <input type="hidden" class="field" name="orig_title"
        id="orig_title" value="'."$postTitle". '"></input>
        
        <input type="hidden" class="field" name="orig_body"
        id="orig_body" value="'."$postBody". '"></input>
            
<button type="submit" class="col-3 col-lg-1  py-1  btn float-left" name="share-submit"><i style="margin-left:-10px; margin-top:0px" title="share" class="fas fa-retweet"></i></button></form>
          
          
         
             
          
                       
            
          
          
          
          <form method="POST" action="reply-post.php?id='.$postid.'">
           <input type="hidden" class="field" name="orig_poster"
        id="orig_poster" value="'."$origPoster". '"></input>
          
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$postid". '"></input>
        
        <input type="hidden" class="field" name="orig_title"
        id="orig_title" value="'."$postTitle". '"></input>
        
        <input type="hidden" class="field" name="orig_body"
        id="orig_body" value="'."$postBody". '"></input>
         <button type="submit" class="col-3 col-lg-1  py-1  btn float-left" ><i  style="margin-left:-10px; margin-top:0px" title="reply" class="fas fa-reply"></i></button></form>
';
            
          if($flaggedCheck == "No"){
              
              
          
          
          echo '
          
           
           
           
           
           
           
           
           
            <form method="POST" action="includes/report-post.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$postid". '"></input>
            
<button type="submit" class="col-3 col-lg-1  py-1  btn float-left" name="report-post-submit"><i style="margin-left:-10px; margin-top:0px" title="report-post" class="fas fa-flag"></i></button></form>
              
          
                  ';
          }
          
          
          else{
              echo'
          
          
               <form method="POST" action="includes/unflag.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$postid". '"></input>
            
<button type="submit" class="col-3 col-lg-1 p-auto mx-auto my-auto  btn float-left" name="unflag-submit"><i style="margin-left:-10px; margin-top:0px;color:green;" class=" fas fa-flag"></i></button></form>
          
          
          
          
          
          
          
          
          
            ';}
             
          echo'
          
          
             
               <form method="POST" action="includes/hide-post.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$postid". '"></input>
            
<button type="submit" class="col-3 col-lg-1  py-1  btn float-left" name="hide-post-submit"><i style="margin-left:-10px; margin-top:0px" title="hide-post" class="fas fa-times"></i></button></form>
          
          
          
             
          <br><br><br>
          
          
          
          
          
            </div></div>
            
            ';
             while($rowPostReply = $resultPostReply->fetch_assoc()) {
            $postReplier =  $rowPostReply['uid'];
             $replyPostID  =  $rowPostReply['post_id'];
             $replyid  =  $rowPostReply['id'];
             
         $sqlPostReplier = "SELECT * FROM users WHERE idUsers='$postReplier'";
            $resultPostReplier = $conn->query($sqlPostReplier);
        $rowPostReplier = $resultPostReplier->fetch_assoc();
        
        $lname = $rowPostReplier['user_ln'];
        $fname = $rowPostReplier['user_fn'];
     
          $sqlLikedReplyCheck =  "SELECT * FROM likes_reply WHERE post_id='$replyid' AND uid='$userid'";
        $resultLikedReplyCheck = $conn->query($sqlLikedReplyCheck);
         $sqlDelReplyLikes =  "DELETE FROM likes_reply WHERE uid='0'";
 $resultDelReplyLikes = $conn->query($sqlDelReplyLikes);
          if ($resultLikedReplyCheck->num_rows > 0){
            $likedCheckReply = 'Yes';
            
        }else{
                $likedCheckReply = 'No';
            
        }
        
        
            $sqlDisLikedReplyCheck =  "SELECT * FROM dislikes_reply WHERE post_id='$replyid' AND uid='$userid'";
        $resultDisLikedReplyCheck = $conn->query($sqlDisLikedReplyCheck);
         $sqlDelReplyDisLikes =  "DELETE FROM dislikes_reply WHERE uid='0'";
 $resultDelReplyDisLikes = $conn->query($sqlDelReplyDisLikes);
          if ($resultDisLikedReplyCheck->num_rows > 0){
            $dislikedCheckReply = 'Yes';
            
        }else{
                $dislikedCheckReply = 'No';
            
        } 
        
        
                $sqlLovedCheckReply =  "SELECT * FROM loves_reply WHERE post_id='$replyid' AND uid='$userid'";
        $resultLovedCheckReply = $conn->query($sqlLovedCheckReply);
        
        
        
        
         $sqlDelLovesReply =  "DELETE FROM loves_reply WHERE uid='0'";
 $resultDelLovesReply = $conn->query($sqlDelLovesReply);
        
        
 
        if ($resultLovedCheckReply->num_rows > 0){
            $lovedCheckReply = 'Yes';
            
        }else{
                $lovedCheckReply = 'No';
            
        }
        
           $sqlHiddenCheckReply =  "SELECT * FROM hide_reply WHERE post_id='$replyid' AND uid='$userid'";
        $resultHiddenCheckReply = $conn->query($sqlHiddenCheckReply);
        
        
        
         $sqlDelHiddenReply =  "DELETE FROM hide_reply WHERE uid='0'";
 $resultDelHiddenReply = $conn->query($sqlDelHiddenReply);
        
        
        
 
        if ($resultHiddenCheckReply->num_rows > 0){
            $hiddenCheckReply = 'Yes';
            
        }else{
                $hiddenCheckReply = 'No';
            
        }
        
        
              $sqlFlaggedCheckReply =  "SELECT * FROM flagged_reply WHERE post_id='$replyid' AND uid='$userid'";
        $resultFlaggedCheckReply = $conn->query($sqlFlaggedCheckReply);
        
        
        
        
        
            if ($resultFlaggedCheckReply->num_rows > 0){
            $flaggedCheckReply = 'Yes';
            
        }else{
                $flaggedCheckReply = 'No';
            
        }
        
        
        if ($deleted !=1 && $hiddenCheckReply == 'No' && $postid == $replyPostID){
            echo '
            <div style="border-style: solid;border-width: 5px;" class=" ml-md-5 p-1 m-2 row col-11 float-right">
            <div class="col-12 col-lg-12 col-xl-1 float-left">
            <p>
            <a href="profile.php?id='.$rowPostReply['uid'].'">
            <img alt="'.$rowPostReply['uid'].'" height="100" width="100" src="/users/photos/'.$rowPostReplier['user_photo'].'"></a></p></div>
            <div class="col-12 col-lg-12 col-xl-2 pl-lg-5 " float-left>
            <p>
            Likes: '.$rowPostReply['likes'].'
            <br>
            Dislikes: '.$rowPostReply['dislikes'].'
            <br>
            Loves: '.$rowPostReply['loves'].'
            <br>
            Shares: '.$rowPostReply['shares'].'
            </p>
            </div>
            <div class="col-12 col-md-12 col-lg-12 col-xl-5 pl-lg-5 float-left">
             
            <p>
            '.$rowPostReply['reply'].'
            </p>
            <i>
            '.$rowPostReply['title'].'
            </i>
            </div>
                <div  class="col-12 col-md-12  col-xl-3 pl-lg-2 content-justify-center float-left">
            
            
            
                        

          ';
           if($likedCheckReply == "No"){
              
              
          
          
          echo '
          
          
           <form method="POST" action="includes/like.reply.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$replyid". '"></input>
        
         <input type="hidden" class="field" name="postID"
        id="postID" value="'."$replyid". '"></input>
        
        
        
        
    
            
<button  type="submit" class="mx-2 px-2 btn col-3 col-lg-1  btn float-left" name="like-submit"><i  style="margin-left:-10px; margin-top:0px" class="fas fa-thumbs-up"></i></button></form>
          
                  ';
          }
          
          
          
          
          
          
          else{
              echo'
              <form method="POST" action="includes/unlike.reply.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$replyid". '"></input>
            
<button type="submit" class="col-3 col-lg-1 p-auto mx-auto my-auto  btn float-left" name="unlike-submit"><i style="color:green;margin-left:-10px; margin-top:0px;" class=" fas fa-thumbs-up"></i></button></form>
         

          
              ';}
          
          
          if($dislikedCheckReply == "No"){
              
              
          
          
          echo '
          
          
          
            <form method="POST" action="includes/dislike.reply.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$replyid". '"></input>
            
<button type="submit" class="col-3 col-lg-1  py-1  btn float-left" name="dislike-submit"><i style="margin-left:-10px; margin-top:0px" class="fas fa-thumbs-down"></i></button></form>
  
          
                  ';
          }
          
          
          else{
              echo'
          
          
               <form method="POST" action="includes/undislike.reply.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$replyid". '"></input>
            
<button type="submit" class="col-3 col-lg-1 p-auto mx-auto my-auto  btn float-left" name="undislike-submit"><i style="color:green;margin-left:-10px; margin-top:0px;" class=" fas fa-thumbs-down"></i></button></form>
         
     
          
           ';}
            
          if($lovedCheckReply == "No"){
              
              
          
          
          echo '
          
          
             <form method="POST" action="includes/loves.reply.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$replyid". '"></input>
            
<button type="submit" class="col-3 col-lg-1  py-1  btn float-left" name="love-submit"><i style="margin-left:-10px; margin-top:0px" class="fas fa-heart"></i></button></form>
          
          
          
                  ';
          }
          
          
          else{
              echo'
          
          
               <form method="POST" action="includes/unlove.reply.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$replyid". '"></input>
            
<button type="submit" class="col-3 col-lg-1 p-auto mx-auto my-auto  btn float-left" name="unlove-submit"><i style="color:green;margin-left:-10px; margin-top:0px;" class=" fas fa-heart"></i></button></form>
          
          
          
          
          
          
          
          
          
            ';}
            $postReply = $rowPostReply['reply'];
          echo'
          
          
           
          
             
             <form method="POST" action="includes/share.reply.inc.php">
             
              <input type="hidden" class="field" name="fname"
        id="fname" value="'."$fname". '"></input>
        
        <input type="hidden" class="field" name="lname"
        id="lname" value="'."$lname". '"></input>
        
           <input type="hidden" class="field" name="orig_poster"
        id="orig_poster" value="'."$origReplier". '"></input>
          
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$replyid". '"></input>
        
        <input type="hidden" class="field" name="orig_title"
        id="orig_title" value="'."$postTitle". '"></input>
        
        <input type="hidden" class="field" name="orig_body"
        id="orig_body" value="'."$postReply". '"></input>
            
<button type="submit" class="col-3 col-lg-1  py-1  btn float-left" name="share-submit"><i style="margin-left:-10px; margin-top:0px" title="share" class="fas fa-retweet"></i></button></form>
          
          
         
             
          
                       
            
          
          
          
          <form class="form" method="POST" action="reply-post.reply.php?id='.$replyPostID.'">
           <input type="hidden" class="field" name="orig_poster"
        id="orig_poster" value="'."$origReplier". '"></input>
          
          
          <input type="hidden" class="field" name="fname"
        id="fname" value="'."$fname". '"></input>
        
        <input type="hidden" class="field" name="lname"
        id="lname" value="'."$lname". '"></input>
          
          
           <input type="hidden" class="field" name="postid"
        id="postid" value="'."$replyPostID". '"></input>
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$replyid". '"></input>
        
        <input type="hidden" class="field" name="orig_title"
        id="orig_title" value="'."$postTitle". '"></input>
        
        <input type="hidden" class="field" name="orig_body"
        id="orig_body" value="'."$postBody". '"></input>
         <button type="submit" class="col-3 col-lg-1  py-1  btn float-left" name="reply-submit" ><i style="margin-left:-10px; margin-top:0px" title="reply" class="fas fa-reply"></i></button></form>
';
            
          if($flaggedCheckReply == "No"){
              
              
          
          
          echo '
          
           
           
           
           
           
           
           
           
            <form method="POST" action="includes/report-post.reply.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$replyid". '"></input>
            
<button type="submit" class="col-3 col-lg-1  py-1  btn float-left" name="report-reply-submit"><i style="margin-left:-10px; margin-top:0px" title="report-post" class="fas fa-flag"></i></button></form>
              
          
                  ';
          }
          
          
          else{
              echo'
          
          
               <form method="POST" action="includes/unflag.reply.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$replyid". '"></input>
            
<button type="submit" class="col-3 col-lg-1 p-auto mx-auto my-auto  btn float-left" name="unflag-reply-submit"><i style="color:green;margin-left:-10px; margin-top:0px;" class=" fas fa-flag"></i></button></form>
          
          
          
          
          
          
          
          
          
            ';}
             
          echo'
          
          
             
               <form method="POST" action="includes/hide-reply.inc.php">
          
            <input type="hidden" class="field" name="friendid"
        id="friendid" value="'."$replyid". '"></input>
            
<button type="submit" class="col-3 col-lg-1  py-1  btn float-left" name="hide-post-submit"><i style="margin-left:-10px; margin-top:0px" title="hide-post" class="fas fa-times"></i></button></form>
          
          
          
             
          <br><br><br>
          
             
           
            
            
            
            
            
            
              </div>
            
            </div>
            ';}
             }
            
        }}}
                         
?>               
       
       
    
       
       
         
       
       
      
       
       
           
                        
                        
                        
                        
                        
                        
                        
                        
                         </div>                
                                             
                                   </div>  
                        
                        
                               </div>                
                                             
                                   </div>             
                            </div>
                        </div>
                    </div>                    
                </div> 
            </div>  

        </main> <!-- Main content  : end -->


 <?php 
       include_once 'includes/footer.php';
    ?>
