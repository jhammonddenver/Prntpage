<?php 
session_start();
include_once 'db_connect.php';
$id = $_SESSION['id'];
if (isset($_POST['submit'])){
		$file = $_FILES['file'];
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];
		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpg');
		if (in_array($fileActualExt, $allowed)) {
			if ($fileError === 0){
				if ($fileSize < 2000000){
				$fileNameNew = "profile-".$id.".".$fileActualExt;
				$fileDestination = '../users/photos/'.$fileNameNew;
				$dBDest = 'users/photos/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
			    $_SESSION['id'] = 0;
				$sql = "UPDATE users SET user_photo=0 WHERE idUsers='$id';";
				$result = mysqli_query($conn, $sql);
					$sqlphoto = "INSERT INTO images (photo_user, photo_location) VALUES ('$id', $dBDest');";
				$resultphoto = mysqli_query($conn, $sqlphoto);
				header("Location: ../edit-profile.php?uploadsuccessful");
				} else {
				echo "File is too big!";
				}
			} else { 
			echo "There was an error uploading the file!";}
} else {
	
	echo "File type not allowed!";
	 header("Location: ../edit-profile.php?signup=success");
          exit();
}
}
?>
