<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Manage_Groups</title>
<link href="/Website_Genesis/ExternalStyling_CSS.css" rel="stylesheet" type="text/css" />

<style>
	a:link {
			color: blue;
	}
	a:visited {
			color: red;
	}
	a:hover {
			color: green;
	}
	a:active {
			color: yellow;
	}
</style>
</head>

<body>

<section>
<header>
<!--	TITLE OF PAGE	-->
<div style="display:block; top:50px; left:50px; background-color: blue; padding: 10px; width:400px;">

		<div style="background-color: red; padding:5px; margin:3px; min-width:300px;">
        
<img src="/website_genesis/SocialTradeLogo.jpg" alt="FrontPage_Logo" border="2" height="60"/>
		</div>
	</div>
</header>
<hr />
</section>
</div>
<!-- ADD A NEW GROUP	-->
<div style="display:inline-block; top:50px; left:50px; background-color: #0CF; padding: 10px; width:400px; margin:10px 5px 10px 0px;">
	<a href='/website_genesis/NewGroup_1.php' style="display:block;">
Create a new group
	</a>
</div>
<br />
<hr />

<!-- AMEND EXISTING GROUP	-->
<div style="display:inline-block; top:50px; left:50px; background-color: #0CF; padding: 10px; width:400px; margin:10px 5px 10px 0px;">
	<a href='/website_genesis/AllGroups_1.php' style="display:block;">
Select an existing group
	</a>
    
<!-- Can I use WHILE Loop to select maximum number of groups to display? -->

</div>
<script>
var myGroups = 0;
while(myGroups < 4) {
	document.write(myGroups);
	myGroups = myGroups + 1;
}
</script>

<textarea name="My Background" placeholder="Type Here" ></textarea>

</body>
</html>