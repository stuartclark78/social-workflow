<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Post_NewMember</title>
</head>

<body>

<?php

if(isset($_POST['submitNewMember'])) {
		echo "Your Email Address is: " . $_POST['yourEmail'];
	}
	$con = mysqli_connect("localhost", "Suzi", "Stuzi", "phptest2");
	if (!$con)
		{
		die('Could not connect: ' . mysql_error());
		}

	mysqli_query($con, "INSERT INTO Members(First_Name,Surname,Email,Password,Comments)
		VALUES('$_POST[firstName]'
		,'$_POST[surname]'
		,'$_POST[yourEmail]'
		,'$_POST[enterPassword]'
		,'$_POST[comments]')"
	) or die(mysqli_error($con));
	
mysqli_close($con);	
?>
</body>
</html>