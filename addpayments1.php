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
<img class="img1" src="Templates/nsb_logo.png" width="174" height="129" />
<img class="img2" src="Templates/perfect_hotel.jpg" width="1021" height="118" />

<table width="1057" class="table_position">
<tr>
	<td><button class="menu" onclick="window.location.href='home.php'" >Home</button></td>
	<td><button class="menu" onclick="window.location.href='bungalows.php'" >Bungalows</button></td>
	<td><button class="menu" onclick="window.location.href='reservation_details.php'" >Make Reservations</button></td>
	<td><button class="menu" onclick="window.location.href='family.php'" >Family</button></td>
	<td><button class="menu" onclick="window.location.href='rules_reg.php'" >Rules & Regulations</button></td>
	<td><button class="menu" onclick="window.location.href='help.php'" >Help</button></td>
</tr>
</table>
<!-- end of main images, nav bar -->

<!-- button list in the left. Only appear in login.php and home.php -->
<button class="button1 button_styles" onclick="window.location.href='view_calender.php'">View Calender</button>
<button class="button2 button_styles" onclick="window.location.href='reservation_table.php'" >Resevation Table</button>
<button class="button3 button_styles" onclick="window.location.href='waiting_list.php'">Waiting List</button>
<button class="button5 button_styles" onclick="window.location.href='add_payments.php'">Add Payments</button>


<!-- end of button list-->

<div class="article">
<form action="add_payments_function.php" method="post">
<table>
<tr>
<td><label for="nsb_id">NIC ID:</label></td>
<td><input type="number" name="nsb_id"/></td>
</tr>
<tr>
<td><label for="amount">Amount:</label></td>
<td><input type="number" name="amount"/></td>
</tr>
<tr>
<td><label for="receipt_no">Receipt Number:</label></td>
<td><input type="number" name="receipt_no"/></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit"/></td>
</tr>
</table>
</form>
</div>

</body>
</html>
