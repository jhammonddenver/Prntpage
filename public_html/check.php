<?php
include_once 'includes/header.php';




?>



<h3 class="text-center p-3">Select the Amenities Included</h3>
<input type="text" class="name" name="title" placeholder="Enter Name">


    <div class="row">
<div class="col-3 float-left">
<input type="checkbox" class="amenities" value="Elevator"><label>&nbsp;Elevator</label><br/>
<input type="checkbox" class="amenities" value="Internet"><label>&nbsp;Internet</label><br/>
<input type="checkbox" class="amenities" value="WiFi"><label>&nbsp;WiFi</label><br/>
<input type="checkbox" class="amenities" value="Family Friendly"><label>&nbsp;Family Friendly</label><br/>
<input type="checkbox" class="amenities" value="Gym"><label>&nbsp;Gym</label><br/>







<input type="checkbox" class="amenities" value="Free Parking"><label>&nbsp;Free Parking</label><br/>
<input type="checkbox" class="amenities" value="Hot Tub"><label>&nbsp;Hot Tub</label><br/>
<input type="checkbox" class="amenities" value="Buzzer"><label>&nbsp;Buzzer</label><br/>


</div>
<div class="col-3 float-left">




<input type="checkbox" class="amenities" value="Heating"><label> &nbsp;Heating</label><br/>
<input type="checkbox" class="amenities" value="Hangers"><label>&nbsp;Hangers</label><br/>



<input type="checkbox" class="amenities" value="Iron"><label>&nbsp;Iron</label><br/>
<input type="checkbox" class="amenities" value="Laptop Workspaces"><label>&nbsp;Laptop Workspaces</label><br/>
<input type="checkbox" class="amenities" value="Smoking Allowed"><label>&nbsp;Smoking Allowed</label><br/>
<input type="checkbox" class="amenities" value="420 Friendly"><label>&nbsp;420 Friendly</label><br/>
<input type="checkbox" class="amenities" value="Hair Dryer"><label>&nbsp;Hair Dryer</label><br/>


<input type="checkbox" class="amenities" value="Dryer"><label>&nbsp;Dryer</label><br/>

</div>
<div class="col-3 float-left">


<input type="checkbox" class="amenities" value="Fireplace"><label>&nbsp;Fireplace</label><br/>
<input type="checkbox" class="amenities" value="Kitchen"><label>&nbsp;Kitchen</label><br/>
<input type="checkbox" class="amenities" value="Essentials"><label>&nbsp;Essentials</label><br/>
<input type="checkbox" class="amenities" value="Pool"><label>&nbsp;Pool</label><br/>



<input type="checkbox" class="amenities" value="TV"><label>&nbsp;TV</label><br/>
<input type="checkbox" class="amenities" value="Cable"><label>&nbsp;Cable</label><br/>
<input type="checkbox" class="amenities" value="Paid Parking"><label>&nbsp;Paid Parking</label><br/>
<input type="checkbox" class="amenities" value="Free Street Parking"><label>&nbsp;Free Street Parking</label><br/>

</div>
<div class="col-3 float-left">

<input type="checkbox" class="amenities" value="Handicap Accessible"><label>&nbsp;Handicap Accessible</label><br/>


<input type="checkbox" class="amenities" value="Private Enterance"><label>&nbsp;Private Enterance</label><br/>
<input type="checkbox" class="amenities" value="Breakfast Included"><label>&nbsp;Breakfast Included</label><br/>
<input type="checkbox" class="amenities" value="Doorman"><label>&nbsp;Doorman</label><br/>
<input type="checkbox" class="amenities" value="Air Conditioning"><label>&nbsp;Air Conditioning</label><br/>
<input type="checkbox" class="amenities" value="Events"><label>&nbsp;Events</label><br/>


<input type="checkbox" class="amenities" value="Pets"><label>&nbsp;Pets</label><br/>
<input type="checkbox" class="amenities" value="Washer"><label>&nbsp;Washer</label><br/>


</div>
</div>
<p class="p-3">
<button type="button" class="btn btn-send text-light" name="submit" id="submit">Save</button>
 <button onclick="location.href='add-bnb-pics.php'" type="button" class="btn btn-send text-light">
     Next</button>

</p>
<br/>
<h4 id="result"></h4>
<script>
$(document).ready(function(){
 $('#submit').click(function(){
 var name = "";
 var insert = [];
 $('.amenities').each(function(){
 if($(this).is(":checked"))
 {
 insert.push($(this).val());
 }
 });
 insert = insert.toString();
 $('.name')
 
 
 
 $.ajax({
 url: "insert.php",
 method: "POST",
 data:{insert:insert},
 success:function(data){
 $('#result').html(data);
 }
 });
 });
});
</script>
</body>
</html>