<?php
session_start();
require 'db_connect.php';

$query = "SELECT * FROM homes WHERE listing_type='bnb-entire-house'";

$bnbentirehouseArray = array();

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {

       array_push($bnbentirehouseArray, $row);
    }
	  if(count($bnbentirehouseArray)){

         createXMLfile($bnbentirehouseArray);

     }

    /* free result set */
    $result->free();
}
function createXMLfile($bnbentirehouseArray){
  
   $filePath = 'bnb-entire-house.xml';
   $dom     = new DOMDocument('1.0', 'utf-8'); 

   $root      = $dom->createElement('bnbentirehouse'); 
   for($i=0; $i<count($bnbentirehouseArray); $i++){
	   
	   $bnBEntireHouseId = $bnbentirehouseArray[$i]['id'];
	   $bnBEntireHouseNightlyPrice = $bnbentirehouseArray[$i]['listing_nightly'];
	   $bnBEntireHouseLat = $bnbentirehouseArray[$i]['listing_lat'];
	   $bnBEntireHouseLong = $bnbentirehouseArray[$i]['listing_long'];
	      $listing = $dom->createElement('listing');

     $listing->setAttribute('id', $bnBEntireHouseId);

     $name     = $dom->createElement('title', $bnBEntireHouseName); 
	   
	   
	   $listing->appendChild($name); 
	   $latitude   = $dom->createElement('latitude', $bnBEntireHouseLat); 
	   $listing->appendChild($latitude);
	   
	   $longitude   = $dom->createElement('longitude', $bnBEntireHouseLong); 
	   $listing->appendChild($longitude);
	   
	   $nightly   = $dom->createElement('nightly', $bnBEntireHouseNightlyPrice); 
	   $listing->appendChild($nightly);
	   
	   
	   
	   
	   
	    }

   $dom->appendChild($root); 

   $dom->save($filePath); 

	   
	   
   }

?>