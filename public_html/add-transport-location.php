<?php 
include_once 'includes/header2.php';
include_once 'includes/navbar-map.php';

    $id =  $_SESSION['id'];
   
$lid =  $_SESSION['lid'];







$sql9 = "SELECT * FROM transport WHERE id='$lid'";

$result9 = $conn->query($sql9);
$row9 = $result9->fetch_assoc();
$lat = $row9['lat'];
$lng = $row9['lng'];



?>





<style>
#map {
        height: 500px;
        width: 100%;
      }

  html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }


    
</style>









  <main class="page-content"> 

         <div class="page-wrapper">
             <div class="container-fluid">
                                        <br>
                                        <h3>Marker Position</h3>
                                        <p>
                                            When the marker is correct click next.
                                        </p>




<div id="map"></div>

<br><br>
<div class="row col-12">
    <div class="row mb-5 pb-5">
    <button onclick="location.href='add-transport-pics.php'" type="button" class="btn btn-send">
     Next</button>
    <br><br><br><br><br><br><br><br><br><br><br>
     </div> </div> </div> </div> </div> </div>
    
    
    <script>
      var map;
      var marker;
      var infowindow;
      var messagewindow;
       


      function initMap() {
        var coords = {lat: <?php echo $lat ?>, lng: <?php echo $lng ?>};
        map = new google.maps.Map(document.getElementById('map'), {
          center: coords,
          zoom: 16
        });



       var marker = new google.maps.Marker({
          position: coords,
          map: map,
          title: 'Click and drag if incorrect.',
          animation: google.maps.Animation.DROP,

          draggable: true
          
        });






      }

      function saveData() {
        var name = escape(document.getElementById('name').value);
        var address = escape(document.getElementById('address').value);
        var type = document.getElementById('type').value;
        var latlng = marker.getPosition();
        var url = 'phpsqlinfo_addrow.php?name=' + name + '&address=' + address +
                  '&type=' + type + '&lat=' + latlng.lat() + '&lng=' + latlng.lng();

        downloadUrl(url, function(data, responseCode) {

          if (responseCode == 200 && data.length <= 1) {
            infowindow.close();
            messagewindow.open(map, marker);
          }
        });
      }

      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request.responseText, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing () {
      }

    </script>



</div></div></div>





<?php 

include_once 'includes/footer.php';

?>
