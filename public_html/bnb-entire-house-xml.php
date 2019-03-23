<?php
session_start();
require 'includes/db_connect.php';

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}



$query = "SELECT * FROM homes WHERE listing_type='bnb-entire-house'";

$result = mysqli_query($conn, $query);


header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;
// Iterate through the rows, printing XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  echo '<marker ';
  echo 'id="' . $row['listing_id'] . '" ';
  echo 'name="' . parseToXML($row['listing_title']) . '" ';
  echo 'lat="' . $row['listing_lat'] . '" ';
  echo 'lng="' . $row['listing_long'] . '" ';
  echo 'type="' . parseToXML($row['listing_type']) . '" ';
  echo '/>';
  $ind = $ind + 1;
}

// End XML file
echo '</markers>';



?>