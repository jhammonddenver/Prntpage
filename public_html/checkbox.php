<?php

include 'includes/db_connect.php';

$checkbox1 = $_POST['chk1'];
if($_POST["Submit"] == "Submit"){

    for ($i = 0; $i <count($checkbox1);$i++){
        if(!empty($checkbox1)){


        $query = "INSERT INTO homestest(amenities) VALUES ('".$checkbox1[$i]."')";
       mysqli_query($conn,$query) or die (mysqli_error());
        }
    }
    echo "Data inserted";
}

?>