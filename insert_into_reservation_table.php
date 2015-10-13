<?php
error_reporting (E_ALL ^ E_NOTICE)
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Insert into reservations table in NSB database</title>
<link rel="stylesheet" type="text/css" href="template.css">
<link rel="stylesheet" type="text/css" href="reservation_details_css.css">


</head>

<body>

<?php include 'navbar_btnlist_after_logging.php' ?>

<?php

$name= $_POST["name"];                       //Name
$nsb_id= $_POST["nsb_id"];                   //NSB ID
$nic= $_POST["nic"];                         //NIC NO
$branch= $_POST["branch"];                   //Branch
$cir_bun= $_POST["cir_bun"];                 //Circuit Bungalow
$bun_cat= $_POST["bun_cat"];                 //Bungalow Category
$no_of_people= $_POST["no_of_people"];      //No. of People
$a_date= $_POST["a_date"];                   //Arrival Date
$a_time= $_POST["a_time"];                   //Arrival Time
$d_date= $_POST["d_date"];                   //Departure Date
$d_time= $_POST["d_time"];                   //Departure Time
$amount_due =$no_of_people* 25;

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

// Insert data into resevation_table//
$sql = "INSERT INTO reservation_table (Name, NSB_ID, NIC_NO, Branch, Circuit_Bungalow, Bungalow_Category, No_of_People, Arrival_Date, Arrival_Time, Departure_Date, Departure_Time, Amount) VALUES ('$name', '$nsb_id', '$nic', '$branch', '$cir_bun', '$bun_cat', '$no_of_people', '$a_date', '$a_time', '$d_date', '$d_time', $amount_due)";

if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully<br>";
	/*beginning of paragraph*/

	echo "<p class='message_after_adding_reservation'>Your record has been sent to your manager/second officer for confirmation.<br>
		Amount you must pay:<b> Rs.$amount_due</b><br><br>	
		<a href='home.php'>Go Back</a></p>";
	/*end of paragraph*/
}
 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);

?>

</body>
</html>
