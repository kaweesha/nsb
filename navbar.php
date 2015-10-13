<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

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
  <li><a HREF="bungalows.php">Bungalows</a></li> 
  <li><a HREF="reservation_details.php">Make Reservations</a></li> 
  <li><a HREF="family.php">Family</a></li> 
  <li><a HREF="rules_reg.php">Rules & Regulations</a></li> 
  <li><a HREF="help.php">Help</a></li> 
   
</ul>   
</div> 
<!-- end of main images, nav bar -->

<!-- button list in the right. Only appear in login.php and home.php -->
<button class="button1" onclick="window.location.href='view_calender.php'" >View Calender</button>
<button class="button2" onclick="window.location.href='reservation_table.php'" disabled>Resevation Table</button>
<button class="button3" onclick="window.location.href='waiting_list.php'" disabled>Waiting List</button>
<button class="button5" onclick="window.location.href='add_payments.php'">Add Payments</button>
<!-- button list in the right. Only appear in login.php and home.php -->
</body>	
</html>
