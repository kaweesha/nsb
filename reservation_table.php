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

<?php include 'navbar_btnlist_after_logging.php' ?> <!--nsb logo, cbrs logo, header image, menu list, left button list-->

<?php

//connect and insert data to the db using mysqli//
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nsb";

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
$select = "SELECT * FROM reservation_table";
$result = mysqli_query($conn, $select);

if (mysqli_num_rows($result) > 0) {
	// print table heads//
	echo ("<table id='re_table' border=1 class=reservation_table>
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
			<th>Receipt no</th>
			<th>Cancel Row</th>
			
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
			<td>" . $row["No_of_people"] . "</td>
			<td>" . $row["Arrival_Date"] . "</td>
			<td>" . $row["Arrival_Time"] . "</td>
			<td>" . $row["Departure_Date"] . "</td>
			<td>" . $row["Departure_Time"] . "</td>
			<td>" . $row["Amount"] . "</td>
			<td>" . $row["Cancel"] . "</td>
			<td>" . $row["receipt_no"] . "</td>
			<td> <input type='button' value='Delete This Row' onclick='deleteRow(this)'> </td>
			
		</tr>");
    }
echo ("</table>");
} 

else {
    /*echo "0 results";*/
}

mysqli_close($conn);

?>

<script>
function deleteRow(r) {
	var i = r.parentNode.parentNode.rowIndex;
	document.getElementById("re_table").deleteRow(i);
}
</script>

</body>
</html>
