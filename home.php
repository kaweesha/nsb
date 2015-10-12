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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>home</title>
<link rel="stylesheet" type="text/css" href="home_CSS.css">
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
<button class="button3" onclick="window.location.href='waiting_list.php'">Waiting List</button>
<button class="logout" onclick="window.location.href='home.php?q=logout'">Logout</button>
<button class="button5 button_styles" onclick="window.location.href='add_payments.php'">Add Payments</button>
<!-- end of button list-->

<form style="position:absolute; left: 1061px; top: 212px;">
  Search:
  <input type="search" name="search">
</form>

<p style="position:absolute; left: 231px; top: 156px; width: 836px;" class="heading">Circuit Bungalow Reservations System - CBRS</p>

<div class="welcome">
<div id="header"></div>

</div>

<div>
<div class="article">
<h1>Hello <?php $user->get_fullname($uid); ?></h1>

<p>A place like home....<br>
NSB your family bank provides you a great opportunity to spend your vacation with your lovely family in our circuit bungalows around Sri Lanka. You can make your reservation under rules and regulations of the bank. Comfortable rooms, kitchens, living areas and delicious food will offer you, the uniquely designed bungalows blend well with nature, and consists of charming chalets mostly made of recyclable substance. Have a wonderful experience with your loved ones.</p>
</div>

	<img src="indian-family.jpg" width="200" height="187" alt="family" class="img_family" />
	<img src="vacation2.jpg" width="271" height="142" alt="Sri Lankan food" class="img_food" />
    <img src="vacation3.jpg" width="186" height="187" alt="luxuary hotel room" class="img_hotel" />
</div>

</body>
</html>
