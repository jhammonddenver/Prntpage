<?php 
session_start();
include_once 'db_connect.php';
$id = $_SESSION['id'];
$lid = $_SESSION['lid'];
if (isset($_POST['submit'])){
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
				$fileNameNew = "services-main-".$lid."-".$fileName;
				$fileDestination = '../services/photos/'.$fileNameNew;
				$dBDest = 'services/photos/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
			   
				$sql9 = "UPDATE services SET main_pic='$fileNameNew'  WHERE id='$lid';";
				$result9 = mysqli_query($conn, $sql9);
				
				header("Location: ../add-service-finish.php?uploadsuccessful");
				} else {
				echo "File is too big!";
				}
			} else { 
			echo "There was an error uploading the file!";}
} else {
	
	echo "File type not allowed!";
	 header("Location: ../add-service-pics.php?file-not-allowed");
          exit();
}
}
?>
