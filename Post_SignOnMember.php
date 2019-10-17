<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>SignOn_As_Member</title>
</head>

<body>

<?php

if(isset($_POST['submitSignon'])) {
		echo "Your Email Address is: " . $_POST['emailAddress'];
	}
	$con = mysqli_connect("localhost", "Suzi", "Stuzi", "phptest2");
	if (!$con)
		{
		die('Could not connect: ' . mysql_error());
		}
/*	Match to Members Db where match on 	*/
	#$info_member = 
	$query_member = mysqli_query($con, "SELECT Member_Id, Email, Password 
		FROM Members 
		WHERE 	Email='$_POST[emailAddress]'
			AND Password='$_POST[passwordEnter]'");

	//Create Action to take user to their HomePage, if log-in is correct.
	//If Error, then say log-in not successful
	#echo mysqli_num_rows($query_member); 
	$query_mem_a = mysqli_fetch_array($query_member);  
	echo "Password for Member_Id" . $query_mem_a['Email'] . " is " . $query_mem_a['Password'] . "<br />";
	
	$member_match = mysqli_num_rows($query_member);
	echo $member_match;
		if($member_match > 0) {
			//Function to go to HomePage
			header ("Location:HomePage_1.php");
			/*echo $member_match; 
		} else {
			echo "There was <u>not</u> a match";*/
		}

  
  /*	CREATE LIMIT TO #ROWS RETRIEVED	
  $query3 = mysqli_query($con, "SELECT member_id, Email 
  FROM members 
  WHERE Member_id<6 
  ORDER BY Surname Desc
  LIMIT 3");
  echo mysqli_num_rows($query3) . "<br />";
  while($var = mysqli_fetch_array($query3)) {
  echo $var['Email'] . "<br />";
  }*/
  mysqli_close($con);
	
?>

</body>
</html>