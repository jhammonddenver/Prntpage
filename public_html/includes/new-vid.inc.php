
<?php
session_start();
include_once 'db_connect.php';
$id = $_SESSION['id'];
   $target_dir = "../videos/";
   $tmpName = $_FILES["fileToUpload"]["name"];

    $target_file = "../videos/video-". $id ."-". basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

   
   
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    
  
   
  
         $profit = $_POST['profit'];
        $name = $_POST['vid_title'];
        $disc = $_POST['vid_disc'];
        $keywords = $_POST['vid_keywords'];
        $type = $_POST['vid_type'];
  $cat = $_POST['vid_cat'];
    $vidname = $_FILES["fileToUpload"]["name"] . "";
    $vidNewName = "video-".$id."-".$vidname;
    $vidsize = $_FILES["fileToUpload"]["size"] . "";
    $vidtype = $_FILES["fileToUpload"]["type"] . "";

    $sql = "INSERT INTO videos (uid, vid_title, vid_description, vid_type, vid_category_main, file, profit) VALUES ('$id', '$name', '$disc',  '$type', '$cat', '$vidNewName', '$profit')";

   	$result9 = mysqli_query($conn, $sql);
   	header("Location: ../add-property-finish.php?uploadsuccessful");

    
?>