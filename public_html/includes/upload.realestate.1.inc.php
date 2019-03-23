<?php 
session_start();
include_once 'db_connect.php';
$id = $_SESSION['id'];
$lid = $_SESSION['lid'];

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
				$fileNameNew = "realestate-1-".$lid."-".$fileName;
				$fileDestination = '../properties/photos/'.$fileNameNew;
				$dBDest = 'properties/photos/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
			   
				$sql9 = "UPDATE homes SET listing_photo1='$fileNameNew'  WHERE id='$lid';";
				$result9 = mysqli_query($conn, $sql9);
				
				header("Location: ../edit-realestate.php?id=$lid");
				} else if ($fileSize > 2000000){
				echo "File is too big!";
				
			} else if ($fileError != 0){ 
			echo "There was an error uploading the file!";
} else {
    
	
	echo "File type not allowed!";
	 header("Location: ../edit-realestate.php?id=$lid?file-not-allowed");
          exit();
}}}  

?>
