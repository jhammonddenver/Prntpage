
<?php
include 'includes/header.php';


?>





<form action="" method='post' enctype="multipart/form-data">
Description of Video: <input type="text" name="description_entered"/><br><br>
<input type="file" name="file"/><br><br>
	
<input type="submit" name="submit" value="Upload"/>

</form>




<?php 

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);

$description= $_POST['description_entered'];

$success= -1;

$descript= 0;

if (empty($description))
{
$descript= 1;
}

if (isset($name)) {

$path= 'videos/';

if (!empty($name)){
if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm"))
{
$success=0;
echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
}


else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
{
$success=1;
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';
}
}
}
}
?>


<?php







//Block 4
if((!empty($description)) && ($success == 1)){
mysqli_query("INSERT INTO videos (vid_description, file, vid_file_type)
VALUES ('$description', '$name', '$fileextension')");
}


//Block 5
mysql_close($connection);

?>
<p id="para6">Videos









<?php


include 'includes/footer.php';
?>