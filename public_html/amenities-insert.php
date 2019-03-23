
<?php

require 'includes/db_connect.php';

$food = $_POST["insert"];
if(isset($_POST["insert"]))
{

 $query = "INSERT INTO foodtest(favorite_food) VALUES ('$food')";
 $result = mysqli_query($conn, $query);
 echo "Data Inserted Successfully!";
}
?>