<?php
error_reporting (E_ALL ^ E_NOTICE)
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Check waiting List</title>
<link rel="stylesheet" type="text/css" href="template.css">
<link rel="stylesheet" type="text/css" href="reservation_details_css.css">


</head>

<body>

<?php include 'navbar_btnlist_after_logging.php' ?>

<?php
//catch the data sent from the reservation form in reservation_details1.php & reservation_details.php //
$name= $_POST["name"];                       //Name
$nsb_id= $_POST["nsb_id"];                   //NSB ID
$nic= $_POST["nic"];                         //NIC NO
$branch= $_POST["branch"];                   //Branch
$cir_bun= $_POST["cir_bun"];                 //Circuit Bungalow
$bun_cat= $_POST["bun_cat"];                 //Bungalow Category
$no_of_people= $_POST["no_of_people"];       //No. of People
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


/*sql query to get the details of the reservation, which is equal to $cir_bun(circuit bungalow given by the person who is reserving)*/
$get_bun = "SELECT Arrival_date, Arrival_time, Departure_date, Departure_time from reservation_table WHERE Circuit_Bungalow='$cir_bun'";
$result = mysqli_query($conn, $get_bun);


if (mysqli_num_rows($result) > 0)  {
	$state = true;
	$x = $a_date;	//arrival date from the reservation form
	//echo $x . ' $x <br>';
	$y = $d_date;	//departure date from the reservation form
	//echo $y . ' $y <br>';
	$xt = $a_time;	//arrival time from the reservation form
	//echo $xt . ' $xt <br>';
	$yt = $d_time;	//departure time from the reservation form
	//echo $yt . ' $yt <br>';

	while (($db_row = mysqli_fetch_assoc($result)) and ($state)) {

		$a = $db_row["Arrival_date"];	//arrival date from the db
		//echo $a . ' $a <br>';
		$d = $db_row["Departure_date"];	//departure date form the db
		//echo $d . ' $d <br>';
		$at = $db_row["Arrival_time"];	//arrival time from the db
		//echo $at . ' $at <br>';
		$dt = $db_row["Departure_time"];	//departure time from the db
		//echo $dt . ' $dt <br>';
		if ($x == $a) {
			echo "sorry. on $a Kandy bungalow is already reserved.";
			//return false;
			$state = false;
		}
		elseif ($x < $a) {
			if ($y < $a) {
				//echo "okay. you are good to go.";
				//return true;
				continue;
			}
			elseif ($y > $a) {
				echo "sorry. there is an existing reservation from $a to $d";
				//return false;
				$state = false;
			}
			else {
				//$at_hours = date("H", $at);
				if ($at < 11){
					echo "sorry. an existing guest arrives to the bungalow in the morning on $a";
					//return false;
					$state = false;
				}
				else {
					//$yt_hours = date("H", $yt);
					if ($yt < 11) {
						//echo "okay. you are good to go";
						//return true;
						continue;
					}
					else {
						echo "sorry. an existing guest arrives to the bungalow after 11 am on $a.";
						//return false;
						$state = false;
					}
				}						
			}
		}
		elseif ($x < $d) {
			echo "sorry. from $x to $y Kandy bungalow is already reserved.";
			//return false;
			$state = false;
		}
		else {
			if ($x == $d) {
				//check $d leaves before 11 am
				//$dt_hours = date("H", $dt);	//time that existng guest leaves on $d.
				//$xt_hours = date("H", $xt);	//time that new guest hope to arrive on $d.	
				if ($dt < 11) {
					if ($xt < 11) {
						echo "sorry. guest leaves at $dt on $d. If you like you can come after 11 a.m.";
						//return false;
						$state = false;
					}
					else {
						//echo "okay. you are good to go.";
						//return true;
						continue;
					}
				}
				else {
					echo "sorry. there is a resevation on $d ";
					//return false;
					$state = false;
				}
			}
			else {
				//echo "okay. you are good to go.";
				//return true;
				continue;
			}
		}
	}
	if ($state == true) {
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
	}
	elseif ($state == false) {
		function runMyFunction() {
			echo 'added to the waiting list';
		}
		if (isset($_GET['hello'])) {
			runMyFunction();
		}
		echo "<br>if you want to add the reservation to the waiting list <a href=check_waiting_list.php?hello=true>Click here</a>";
	}
}
else {
	echo 'problem in $result.';
	//add the reservation
}

mysqli_close($conn);
?>

</body>
</html>