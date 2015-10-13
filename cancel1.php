<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Family</title>
<link rel="stylesheet" type="text/css" href="template.css">
<link rel="stylesheet" type="text/css" href="home_CSS.css">
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
<table width="1057" class="table_position1">
<tr>
	<td><button class="menu1" onclick="window.location.href='booking_process1.php'" >Booking Process</button></td>
	<td><button class="menu1" onclick="window.location.href='waiting1.php'" >Waiting List</button></td>
	<td><button class="menu1" onclick="window.location.href='cancel1.php'" >Cancelation</button></td>
	
</tr>
</table>
<div class="article">
<p class="font" >Cancellation...  </p>

<ul>
  <li>Cancellation should be done before 5 days from the reserved date. Therfore another person who is waiting will get the chance to do a reservation</li><br/>
  <li>Cancellation can be done by contacting the welfare manager/branch manager/second officer. </li><br/>
  <li>If you do the cancellation before 5 days from the reserved date your money will be hold back for another journey.</li><br/>
  <li>Payments are not refundable.</li><br/>
  <li>If a cancellation is not done before 5 days , payments will not be hold back for another journey.</li><br/>
  <li>Please try to keep your cancellation rate low since the system will keep track of it and block you from reseravtion at some point.</li>
</ul>

</div>


<!-- end of login module -->



<!-- end of main images, nav bar -->

<button class="button1" onclick="window.location.href='view_calender1.php'">View Calender</button>
<button class="button2" onclick="window.location.href='reservation_table1.php'" >Resevation Table</button>
<button class="button3" onclick="window.location.href='waiting_list1.php'" >Waiting List</button>
<button class="logout" onclick="window.location.href='home.php?q=logout'">Logout</button>
<button class="button5 button_styles" onclick="window.location.href='add_payments.php'">Add Payments</button>
</body>
</html>
