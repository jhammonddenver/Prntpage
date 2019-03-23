<?php
include "includes/header.php";
?>
<!doctype html>
<html>
  <head>

  <?php
  if(isset($_POST['submit'])){

    if(!empty($_POST['lang'])) {
        $name = $_POST['name'];
      $lang = implode(",",$_POST['lang']);

      // Insert  record
      
        mysqli_query($conn,"INSERT INTO homestest(amenities, name) VALUES('".$lang."', '$name')");
     
    }

  }
  ?>
  </head>
  <body>
  <form method="post" action="">
      
      <input type="text" class="form-control col-4" name="name" placeholder="Name">
      
      
    <span>Select languages</span><br/>
    <?php

   

    // Create checkboxes
    $languages_arr = array("PHP","JavaScript","jQuery","AngularJS");
    foreach($languages_arr as $language){

      $checked = "";
      if(in_array($language,$checked_arr)){
        $checked = "checked";
      }
      echo '<input type="checkbox" name="lang[]" value="'.$language.'" '.$checked.' > '.$language.' <br/>';
    }
    ?>
 
    <input type="submit" value="Submit" name="submit">
  </form>

  </body>
</html>