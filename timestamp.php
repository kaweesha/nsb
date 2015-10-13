<?php
/*
$timestamp = strtotime("16:44:43");
echo date("H", $timestamp);
*/

	
	echo "arrival date is equal to arrival date in db.<br>";
	echo '$a_date type ' . gettype($a_date) . "<br>";
	
	//convert string date to timestamp
	$a_date1 = strtotime ($a_date);
	echo '$a_date1 type ' . gettype($a_date1) . "<br>";

	//coverting DateTime to timestamp
	echo date("Y/m/d", $a_date1);
	
//check whether arrival date is already reserved.//
if ($a_date == $db_row['Arrival_Date']) {
	
	echo "arrival date is equal to arrival date in db.<br>";
	echo '$a_date type ' . gettype($a_date) . "<br>";
	
	//check whether db row an be turn to timestamp and what the data type is.
	echo '$db_row type ' . gettype($db_row['Arrival_Date']) . "<br>";
	$db_row_a_date = strtotime($db_row['Arrival_Date']);
	echo '$db_row_a_date type ' . gettype($db_row_a_date) . "<br>";
	
	//convert string date to timestamp
	$a_date1 = strtotime ($a_date);
	echo '$a_date1 type ' . gettype($a_date1) . "<br>";

	//coverting DateTime to timestamp
	echo date("Y/m/d", $a_date1);
}

else {
	echo ("arrival date does not match db date.");
}


/*
	// check whether departure date is already reserved.//
    if ($a_date == $db_row['Departure_Date']) {
		echo "ex guest's departure date is equal to new guest's arrival date.";
		
		$timestamp = strtotime("15:00:00");
		if ($db_row['Departure_Time'] > date("H", $timestamp)){
			echo "sorry. ex guest is leaving after 3pm ";
		}
		else {
			echo "guest leaves before 3pm";
		}
	}
	else {
		echo "departure date is not reserved";
	}
*/
?>