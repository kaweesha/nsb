<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>reservation table</title>
<link rel="stylesheet" type="text/css" href="template.css">
<link rel="stylesheet" type="text/css" href="reservation_details_css.css">
<link rel="stylesheet" type="text/css" href="home_CSS.css">

</head>

<body>

<!--main images, nav bar-->
<img class="img1" src="Templates/sds.png" width="200" height="150" />
<img class="img2" src="Templates/perfect_hotel.jpg" width="1021" height="118" />
<img class="img4" src="Templates/nsb_logo_1.png" width="180" height="118" />

<h2 class="offscreen"></h2> 

<div id="hmenu"> 
<ul> 
  <li><a HREF="home.php">Home</a></li> 
  <li><a HREF="bungalows1.php">Bungalows</a></li> 
  <li><a HREF="reservation_details1.php">Make Reservations</a></li> 
  <li><a HREF="family1.php">Family</a></li> 
  <li><a HREF="rules_reg1.php">Rules & Regulations</a></li> 
  <li><a HREF="help1.php">Help</a></li> 
   
</ul>   
</div> 
<!-- end of main images, nav bar -->

<!-- button list in the right. Only appear in login.php and home.php -->
<button class="button1" onclick="window.location.href='view_calender1.php'">View Calender</button>
<button class="button2" onclick="window.location.href='reservation_table.php'" >Resevation Table</button>
<button class="button3" onclick="window.location.href='waiting_list.php'">Waiting List</button>
<button class="logout" onclick="window.location.href='home.php?q=logout'">Logout</button>
<button class="button6 button_styles" onclick="window.location.href='add_payments.php'">Add Payments</button>
<!-- end of button list-->

<?php

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

//display reservations details in a table//

// Select all data , display them in a table//
$select = "SELECT Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow, Bungalow_Category, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount, Cancel, receipt_no FROM reservation_table";
$result = mysqli_query($conn, $select);



if (mysqli_num_rows($result) > 0) {
	// print table heads//
	echo ("<table border=1 class=reservation_table>
		<tr>
			<th>Name</th>
			<th>NSB ID</th>
			<th>NIC NO</th>
			<th>Branch</th>
			<th>Circuit Bungalow</th>
			<th>Bungalow Category</th>
			<th>No. of people</th>
			<th>Arrival Date</th>
			<th>Arrival Time</th>
			<th>Departure Date</th>
			<th>Departure TIme</th>
			<th>Amount</th>
			<th>Cancel</th>
			<th>receipt no</th>
			
		</tr>");
		
    // output data from row by row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "Name: " . $row["name"]. " " . "Age: " . $row["age"]. "<br>";
		echo (
		"<tr>
			<td>" . $row["Name"] . "</td>
			<td>" . $row["NSB_ID"] . "</td>
			<td>" . $row["NIC_NO"] . "</td>
			<td>" . $row["Branch"] . "</td>
			<td>" . $row["Circuit_Bungalow"] . "</td>
			<td>" . $row["Bungalow_Category"] . "</td>
			<td>" . $row["No_of_People"] . "</td>
			<td>" . $row["Arrival_Date"] . "</td>
			<td>" . $row["Arrival_Time"] . "</td>
			<td>" . $row["Departure_Date"] . "</td>
			<td>" . $row["Departure_Time"] . "</td>
			<td>" . $row["Amount"] . "</td>
			<td>" . $row["Cancel"] . "</td>
			<td>" . $row["receipt_no"] . "</td>
			
		</tr>");
    }
echo ("</table>");
} 

else {
    /*echo "0 results";*/
}

mysqli_close($conn);

?>

</body>
</html>
