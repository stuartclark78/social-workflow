<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>BuyInterest_InterSocial</title>
</head>

<body>

<br />
<a href='/WebDevelopment/SocialWorkflow/HomePage_1.php' style="display:block;">
Home_Page
</a>
<br />
<!-- Create New Buy Interest
	Option for whether select from:
    	categories
        or search lookup
    Option to create new selection (don't make part of categories, but just come up in search if selected frequently enough, and then go into categories once reach critical mass).
-->
<div style="display:list-item">
<input type="radio" name="Radio_Buy" id="rb_1" value="Select From Categories"  />
</div>
<div style="display:list-item">
<input type="radio" name="Radio_Buy" id="rb_2" value="Search Lookup" />
</div>
<div style="display:list-item">
<input type="radio" name="Radio_Buy" id="rb_3" value="Create New Interest/Trade Type" />
</div>

<hr />

<!-- Options For Creating New Buying Interests - based on categories - make pop up if buy categories are selected	-->
<select name="BuyInterest">
	<option value="NA" disabled="disabled" selected="selected">Select Buying Interest</option>
    <option value="tutoring">Tutoring</option>
    <option value="personaltrain">Personal Training</option>
</select>

<!-- Insert Search Lookup here	
-->

<!--	PARAMETERS FOR BUYING - create overall parameters, and allow to either select this default buying interest, or adjust into new specific one... 
	One parameter will be based on GeoLocation, but MUST get member's permission first.	-->
<p id="coords"></p>
	<button onclick="getMyPosition()">This is my Home Position</button>
    <script>
	var MyLocHome = document.getElementById("coords");
	function getMyPosition()	{
		if (navigator.geolocation)	{
			navigator.geolocation.getCurrentPosition(showPosition);
		}	else	{
			MyLocHome.innerHTML = "Geolocation is not supported by this browser.";
		}
	}
	function showPosition(position)	{
		MyLocHome.innerHTML = "Latitutde; " + position.coords.latitude +
		"<br />Longitude: " + position.coords.longitude;
	}
<!--	THIS WORKED IN MY SAFARI BROWSER! - Now need to work in code to store one's geolocation, and method to compare with potential sellers either given through any immediate request to seller (without seller's constant approval), or based on an invite if this the preference of the seller who wants to see who buyer is first before distance away through geolocation i.e. for personal security purposes.	-->
	</script>
</body>
</html>