<?php


session_start();

require('includes/db_connect.php');


if(isset($_POST) && !empty($_POST['id'])){


		$sql = "DELETE FROM image_gallery WHERE id = ".$_POST['id'];

		$mysqli->query($sql);


		$_SESSION['success'] = 'Image Deleted successfully.';

		header("Location: gallery-test.php?DeleteSuccess");

}else{

	$_SESSION['error'] = 'Please Select Image or Write title';

	header("Location: gallery-test.php?tryAgain");

}


?>