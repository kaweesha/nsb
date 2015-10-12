<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Delete table rows</title>
</head>

<body>
<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "nsb";

//make connection
$link = mysqli_connect( $servername, $username, $password, $dbname);
//check
if (!$link) {
	echo("connection failed<br>" . mysqli_connect_error());
}
else {
	echo ("successfully connected");
}

//delete data from reservation table

$del= "DELETE FROM reservation_table WHERE Name=tharushi";

if (mysqli_query($link, $del)) {
	echo ("successfully deleted the row");
}
else {
	echo ("unsuccessfull<br>" . mysqli_error($link));
}
?>
</body>
</html>
