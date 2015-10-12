<?php
	error_reporting (E_ALL ^ E_NOTICE);
	session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Copy_login_cbrs</title>
<style>
body {
	background-color: #FF6600;
}
.table {
	position: absolute;
	left: 388px;
	top: 260px;
}

</style>
</head>

<body>
<?php
// login form for authorized persons

$form ="
<table class='table'>
<form method='post' action='copy_login_cbrs.php'>
<tr>
	<td>Username:</td>
	<td><input type='text' name='username' /></td>
</tr>
<tr>
	<td>Password:</td>
	<td><input type='password' name='pword' /></td>
</tr>
<tr>
	<td><input type='submit' name='submitbtn' value='sign in'/></td>
</tr>
</form>
</table>";
// end of login form for authorized persons

if ($_POST['submitbtn']) {

	$username= $_POST["username"];
	$pword= $_POST["pword"];

	if ($username) {
		if ($pword) {

			//connect to db
			$link = mysqli_connect("localhost", "root", "", "nsb");
	
			//check connection
			if (!$link) {
				die ("connection failed<br>" . mysqli_connect_error());
			}
			else {
				echo ("successfully connected<br>");
			}

			//check whether both inputs are not-NULL
			if ($username == "" || $pword == "") {
				echo("one or both are NULL values");
			}
			else {
				$query = ("SELECT username, password FROM autorized_users WHERE Name = '$username'");
				$abc= mysqli_query($link, $query);

				if (mysqli_num_rows($abc)> 0) {
					$row= mysqli_fetch_assoc($abc);
					if ($username == $row["username"]) {
						if ($pword == $row["password"]) {
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
				mysqli_close($link);
			}
		}
		else {
			echo "please enter password";
		} 
	}
	else {
		"please enter username";
	}
}
else {
	echo ($form);
}

?>
</body>
</html>
