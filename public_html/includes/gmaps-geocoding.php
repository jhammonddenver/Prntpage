<body onload="initialize()" onunload="GUnload()">
    <form action="#" onsubmit="showAddress(this.address.value); return false">
      <p>
        Enter an address, and then drag the marker to tweak the location.
        <br/>
        The latitude/longitude will appear in the infowindow after each geocode/drag.
      </p>
      <p>
        <input type="text" style="width:350px" name="address" value="1600 Amphitheatre Pky, Mountain View, CA" />
        <input type="submit" value="Go!" />
      </p>
      <div id="map_canvas" style="width: 600px; height: 400px"></div>
    </form>
</body>
</html>