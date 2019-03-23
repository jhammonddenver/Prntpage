<?php 
session_start();
include_once 'db_connect.php';
$id = $_SESSION['id'];

		$file = $_FILES['file'];
		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];
		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
		$allowed = array('jpg','jpeg','png','gif');
	
		
		if (in_array($fileActualExt, $allowed)) {
			if ($fileError === 0){
				if ($fileSize < 2000000){
				$fileNameNew = "profile-".$id."-".$fileName;
				$dbDestination = '/users/photos/'.$fileNameNew;
				
				$fileDestination = '../users/photos/'.$fileNameNew;
				$dBDest = 'users/photos/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				$sql = "UPDATE users SET user_photo='$fileNameNew' WHERE idUsers='$id';";
				$result = mysqli_query($conn, $sql);
				
				header("Location: ../mydetails-am.php?uploadsuccessful");
				} else if ($fileSize > 2000000){
				echo "File is too big!";
				
			} else if ($fileError != 0){ 
			echo "There was an error uploading the file!";
} else {
    
	
	echo "File type not allowed!";
	 header("Location: ../mydetails-am.php?file-not-allowed");
          exit();
}}}  

?>
