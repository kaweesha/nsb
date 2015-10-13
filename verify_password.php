<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Verify Password</title>
</head>

<body>
<?php
$username= $_POST["username"];
$pword= $_POST["pword"];

//connect to db
$link = mysqli_connect("localhost", "root", "", "nsb");

//check connection
if (!$link) {
	die ("connection failed<br>" . mysqli_connect_error());
}
else {
	//echo ("successfully connected<br>");
}

//check whether both inputs are not-NULL
if ($username == "" || $pword == "") {
	echo("one or both are NULL values");
}
else {
	$abc= mysqli_query($link, "SELECT Name, NSB_ID FROM reservation_table WHERE Name = '$username'");

	if (mysqli_num_rows($abc)>0) {
		$row= mysqli_fetch_assoc($abc);
		if ($username == $row["Name"]) {
			if ($pword == $row["NSB_ID"]) {
				echo ("login authorised");
			}
			else {
				echo ("wrong password");
			}
		}
		else {
			echo ("not a user");
		}
	}
	else {
	echo ("no username");
	}
}

/*
//verify username and password
if ($username== $row["Name"] && $pword== $row["NSB_ID"] ) {
	echo ("access given");
}
else {
	echo ("incorrect username or password");
}
*/

mysqli_close($link);
?>
</body>
</html>
