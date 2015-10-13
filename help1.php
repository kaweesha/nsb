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
<title>Help</title>
<link rel="stylesheet" type="text/css" href="template.css">

</head>

<body>

<!--main images, nav bar-->
<img class="img1" src="Templates/sds.png" width="200" height="150" />
<img class="img2" src="Templates/perfect_hotel.jpg" width="1021" height="118" />
<img class="img3" src="Templates/nsb_logo_1.png" width="180" height="118" />
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
<button class="button1" onclick="window.location.href='view_calender1.php'">View Calender</button>
<button class="button2" onclick="window.location.href='reservation_table.php'" >Resevation Table</button>
<button class="button3" onclick="window.location.href='waiting_list.php'" >Waiting List</button>
<button class="logout" onclick="window.location.href='home.php?q=logout'">Logout</button>
<button class="button5 button_styles" onclick="window.location.href='add_payments.php'">Add Payments</button>
</body>
</html>
