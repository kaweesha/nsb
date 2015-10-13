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

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rules & Regulations</title>
<link rel="stylesheet" type="text/css" href="home_CSS.css">
<link rel="stylesheet" type="text/css" href="template.css">

</head>

<body>

<?php include 'navbar_btnlist_after_logging.php'; ?> <!--nsb logo, cbrs logo, header image, main menu, button list in the left-->

<table width="1057" class="table_position1">
<tr>
	<td><button class="menu1" onclick="window.location.href='booking_process1.php'" >Booking Process</button></td>
	<td><button class="menu1" onclick="window.location.href='waiting1.php'" >Waiting List</button></td>
	<td><button class="menu1" onclick="window.location.href='cancel1.php'" >Cancelation</button></td>
	
</tr>
</table>

<div>
<div class="article">
<p class="font" >Rules and Regulations...  </p>

<ul>
  <li>The use of fire in the hallway and or guest rooms for the purpose of heating and cooking is prohibited.</li><br/>
  <li>Check the reservation calendar befor you book a date. See if it is available or notDo not smoke in an area where is easily to cause a fire, "NO Smoking in bed". </li><br/>
  <li>Inviting strangers into the guest rooms, to use the facilities and or amenities is prohibited.</li><br/>
  <li>Use of phones in guest rooms will be charged to your bill. There are public phones located in the lobby.</li><br/>
  <li>Gambling or any other behaviour that is against public morals in the hallways or guest rooms is prohibited.</li><br/>
  <li>The use of guest rooms or the lobby as an office is prohibited.</li><br/>
  <li>Removing items from guest rooms or moving them to other places in the hotel is prohibited.</li><br/>
</ul>
</div>
</div>

</body>
</html>
