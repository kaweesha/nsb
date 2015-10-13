<?php
session_start();
include_once 'class.user.php';
$user = new User(); $uid = $_SESSION['uid'];
if (!$user->get_session()){
 header("location:login.php");
}

if (isset($_GET['q'])){
 $user->user_logout();
 header("location:login.php");
 }
 
?>

<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Reservation Details</title>
<link rel="stylesheet" type="text/css" href="template.css">
<link rel="stylesheet" type="text/css" href="reservation_details_css.css" />
<script src="reservation_details_js.js"></script>

</head>

<body>

<?php include 'navbar_btnlist_after_logging.php' ?>

<!--reservation form -->
<table height="340" class="form">
<form action="check_waiting_list.php" method="post" >
<tr>
	<td class="td"><label for="name">Name: </label></td> 
	<td class="td"><input type="text" name="name" id="name" size="30" pattern="[A-Za-z]{1,}"  title="Enter Letters only"</td>
</tr>
<tr>
	<td class="td"><label for="nsb_id">NSB ID: </label></td> 
	<td class="td"> <input type="text" name="nsb_id" id="nsb_id" pattern="[0-9]{4}" title="Enter Numbers only" size="30"></td>
</tr>
<tr>
	<td class="td"><label for="nic">NIC NO: </label></td> 
	<td class="td"> <input type="text" name="nic" id="nic" pattern="[vV0-9]{10}" title="Enter Valid NIC Number" size="30"></td>
</tr>
<tr>
	<td class="td"><label for="branch">Branch: </label></td> 
	<td class="td"> <input type="text" name="branch" id="branch" pattern="[A-Za-z]{1,}" title="Enter Valid Branch" size="30"></td>
</tr>
<tr> 
	<td class="td"><label for="cir_bun">Circuit Bungalow: </label></td>
	<td class="td"><select class="drop_down_list" name="cir_bun" id="cir_bun" onblur="show_rooms()" >
  			<option>Kandy</option>
  		<!--	<option>Ambalanthota</option>
			<option>Anuradhapura</option>
			<option>Badulla</option>
			<option>Bandarawela</option>
			<option>Beliatta</option>
			<option>Chawakachcheri</option>
			<option>Dambula</option>
			<option>Galle</option>
			<option>Kandy</option>
			<option>Katharagama</option>
			<option>Mahiyangana</option>
			<option>Maravila</option>
			<option>Nuwara Eliya-2</option>
			<option>Nuwara Eliya-New</option>-->
  		</select> </td>
</tr>
<tr>
	<td class="td"><label for="bun_cat">Bungalow Category: </label></td>
	<td class="td"><input type="radio" name="bun_cat" value="section A" id="secA"/><label for="secA">Section A</label>
  				   <input type="radio" name="bun_cat" value="section B" id="secB" /><label for="secB">Section B</label>
				   <input type="radio" name="bun_cat" value="normal" id="normal"/><label for="normal">Normal</label> </td>
</tr>
<tr>
	<td class="td"><label for="no_of_people">Number of People: </label></td>
	<td class="td"><input type="text" name="no_of_people" id="no_of_people" size="30"></td>
</tr>
<tr>
	<td class="td"><label for="email">Email: </label></td>
    <td class="td"><input type="email" name="email" id="email" size="30" /></td>
</tr>
<tr>
	<td class="td"><label for="contact_no">Contact No: </label></td>
    <td class="td"><input type="text" name="contact_no" id="contact_no" pattern="[0-9]{10}" title="Enter Valid Contact Number"  size="30" /></td>
</tr>
<tr>
	<td class="td"><label for="a_date">Arrival Date: </label></td>
	<td class="td"><input type="date" name="a_date" id="a_date"></td>
	<td class="td"><label for="a_time">Arrival Time: </label></td>
	<td class="td"><input type="time" name="a_time" id="a_time"></td>
</tr>
<tr>
	<td class="td"><label for="d_date">Departure Date: </label></td>
	<td class="td"><input type="date" name="d_date" id="d_date"></td>
	<td class="td"><label for="d_time">Departure Time: </label></td>
	<td class="td"><input type="time" name="d_time" id="d_time"></td>
</tr>
<tr><td class="td" style="text-align:center"><input type="submit" value="Submit"></td></tr>
</form>
</table>
<!-- end of reservation form -->
</body>
</html>
