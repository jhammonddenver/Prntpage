<?php
if(isset($_POST["submit"]))
{
    require 'includes/db_connect.php';
    
$img_title=$_POST["img_title"];
$img_desc=$_POST["img_desc"];
}
$img_name=$_FILES["uploadedfile"]["name"];
if (($_FILES["uploadedfile"]["type"]=="image/gif"
|| $_FILES["uploadedfile"]["type"]=="image/jpeg"
|| $_FILES["uploadedfile"]["type"]=="image/pjpeg"
&& $_FILES["uploadedfile"]["size"]<20000))
{
if ($_FILES["uploadedfile"]["error"]>0)
{
echo "Return Code:".$_FILES["uploadedfile"]["error"]."<br />";
}
else
{
$i=1;
$success=false;
$new_img_name=$img_name;
while(!$success)
{
if (file_exists("uploads/".$new_img_name))
{
$i++;
$new_img_name="$i".$img_name;
}
else
{
$success=true;
}
}
move_uploaded_file($_FILES["uploadedfile"]["tmp_name"],"uploads/".$new_img_name);
echo "Stored in: "."uploads/".$new_img_name;
echo "<br />";
$qry="INSERT INTO image_gallery (title, disc, file)
VALUES('$img_title','$img_desc','$new_img_name')";
if(!mysqli_query($conn, $qry))
{
die("An error".mysql_error());
}
else
{
echo "1 row added";
}
}
}
else
{
echo "Invalid file";
}
?>