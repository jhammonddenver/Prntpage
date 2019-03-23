
<?php

require 'includes/db_connect.php';

$amenities = $_POST["insert"];
if(isset($_POST["insert"]))
{
    $name = $_POST['name'];

 $query = "INSERT INTO homestest(amenities, name) VALUES ('$amenities', '$name')";
 $result = mysqli_query($conn, $query);
 echo "Data Inserted Successfully!";
}
?>