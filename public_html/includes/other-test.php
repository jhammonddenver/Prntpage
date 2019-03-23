<?php
include_once 'header.php';
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($conn,"SELECT * FROM homes");

echo "<table border='1'>
<tr>
<th>Photo</th>
<th>Type</th>
<th>Title</th>
<th>Description</th>
<th>Nightly</th>
<th>Weekly</th>
<th>Monthly</th>
<th>Purchase</th>
<th>City</th>
<th>State</th>
<th>Zip</th>
<th>Contact</th>
<th>Phone</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['listing_main_photo'] . "</td>";
echo "<td>" . $row['listing_type'] . "</td>";
echo "<td>" . $row['listing_title'] . "</td>";
echo "<td>" . $row['listing_description'] . "</td>";
echo "<td>" . $row['listing_nightly'] . "</td>";
echo "<td>" . $row['listing_weekly'] . "</td>";
echo "<td>" . $row['listing_monthly'] . "</td>";
echo "<td>" . $row['listing_purchase'] . "</td>";
echo "<td>" . $row['listing_city'] . "</td>";
echo "<td>" . $row['listing_state'] . "</td>";
echo "<td>" . $row['listing_zip'] . "</td>";
echo "<td>" . $row['listing_contact_email'] . "</td>";
echo "<td>" . $row['listing_contact_phone'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>