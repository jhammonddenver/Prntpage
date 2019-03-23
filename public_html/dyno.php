<?php 
include_once 'includes/header.php';
?>
<script>
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);

	s2.innerHTML = "";

	if(s1.value == "Long Term Rentals"){
		var optionArray = ["|","Condo|Condo","Townhouse|Townhouse","Multifamily|Multifamily", "Maisonette|Maisonette", "Cottage|Cottage", "House|House", "Farm|Farm", "Ranch|Ranch", "Mansion|Mansion", "Castle|Castle", "Villa|Villa", "Penthouse|Penthouse", "Commercial|Commercial", "Other|Other"];
	} else if(s1.value == "Real Estate"){
		var optionArray = ["|","Condo|Condo","Townhouse|Townhouse","Multifamily|Multifamily", "Maisonette|Maisonette", "Cottage|Cottage", "House|House", "Farm|Farm", "Ranch|Ranch", "Mansion|Mansion", "Castle|Castle", "Villa|Villa", "Penthouse|Penthouse", "Commercial|Commercial", "Other|Other"];
	} else if(s1.value == "Roommates"){
		var optionArray = ["|","Condo|Condo","Townhouse|Townhouse","Multifamily|Multifamily", "Maisonette|Maisonette", "Cottage|Cottage", "House|House", "Farm|Farm", "Ranch|Ranch", "Mansion|Mansion", "Castle|Castle", "Villa|Villa", "Penthouse|Penthouse", "Commercial|Commercial", "Other|Other"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
</script>
</head>
<body>
<h2>Add Listing</h2>
<hr />
Select Main Category
<select id="housing_cat" name="housing_cat" onchange="populate(this.id,'slct2')">
  <option value=""></option>
  <option value="Long Term Rentals">Long Term Rentals</option>
  <option value="Real Estate">Real Estate</option>
  <option value="Roommates">Roommates</option>
</select>
<hr />
Choose Sub Category:
<select id="slct2" name="slct2"></select>
<hr />


</body>
</html>