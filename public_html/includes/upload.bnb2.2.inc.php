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
				$fileNameNew = "bnb-2-".$lid."-".$fileName;
				$fileDestination = '../bnbs/photos/'.$fileNameNew;
				$dBDest = 'bnbs/photos/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
			   
				$sql9 = "UPDATE bnbs SET listing_photo2='$fileNameNew'  WHERE id='$lid';";
				$result9 = mysqli_query($conn, $sql9);
				
				header("Location: ../edit-bnb.php?id=$lid");
				} else if ($fileSize > 2000000){
				echo "File is too big!";
				
			} else if ($fileError != 0){ 
			echo "There was an error uploading the file!";
} else {
    
	
	echo "File type not allowed!";
	 header("Location: ../edit-bnb.php?id=$lid?file-not-allowed");
          exit();
}}}  

?>
