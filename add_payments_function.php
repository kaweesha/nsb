<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Payments</title>
<link rel="stylesheet" type="text/css" href="template.css">
<link rel="stylesheet" type="text/css" href="home_CSS.css">

</head>

<body>
<!--main images, nav bar-->
<img class="img1" src="Templates/sds.png" width="200" height="150" />
<img class="img2" src="Templates/perfect_hotel.jpg" width="1021" height="118" />
<img class="img3" src="Templates/nsb_logo_1.png" width="180" height="118" />

<div id="hmenu"> 
<ul> 
  <li><a HREF="home.php">Home</a></li> 
  <li><a HREF="bungalows.php">Bungalows</a></li> 
  <li><a HREF="reservation_details.php">Make Reservations</a></li> 
  <li><a HREF="family.php">Family</a></li> 
  <li><a HREF="rules_reg.php">Rules & Regulations</a></li> 
  <li><a HREF="help.php">Help</a></li> 
   
</ul>   
</div> 
<!--end of main images, nav bar -->

<?php
$nsb_id = $_POST["nsb_id"];
$amount = $_POST["amount"];
$receipt_no = $_POST["receipt_no"];

//connect and insert data to the db using mysqli//
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kawdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:<br> " . mysqli_connect_error());
}
else {
	//echo ("successfully connected<br>");
}

//Insert the receipt number to the record with the relevent nic no //
$abc = "UPDATE reservation_table SET receipt_no = '$receipt_no', amount = '$amount' WHERE NSB_ID = $nsb_id";

if ($conn->query($abc) === TRUE) {
    //echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

mysqli_close ($conn);

echo "<p class='message_after_adding_reservation'>Record has been updated.<br>	
		<a href='home.php'>Go Back</a></p>";
?>
<div class="login">


<form action="login.php" method="post" name="login">

<table>
<caption><b>Login Here</b></caption>
<tr>
	<td><input type="text" placeholder="UserName or Email" name="emailusername" required="" /></td>
</tr>
<tr>
	<td><input type="password" placeholder="Password" name="password" required="" /></td>
</tr>
<tr>
	<td><input onclick="return(submitlogin());" type="submit" name="submit" value="Login" /></td>
</tr>

</table>

</form>

<!-- end of login module -->


</div>
<button class="button1" onclick="window.location.href='view_calender.php'">View Calender</button>
<button class="button2" onclick="window.location.href='reservation_table.php'" disabled>Resevation Table</button>
<button class="button3" onclick="window.location.href='waiting_list.php'" disabled>Waiting List</button>
<button class="button5 button_styles" onclick="window.location.href='add_payments.php'">Add Payments</button>
</body>
</html>
