<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login to CBRS</title>
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
<!-- login form for authorized persons -->
<table class='table'>
<form method='post' action='verify_password.php'>
<tr>
	<td>Username:</td>
	<td><input type='text' name='username' /></td>
</tr>
<tr>
	<td>Password:</td>
	<td><input type='password' name='pword' /></td>
</tr>
<tr>
	<td><input type='submit' name='submit' value='sign in'/></td>
</tr>
</form>
</table>
<!-- end of login form for authorized persons -->

</body>
</html>
