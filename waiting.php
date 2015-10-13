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
  <li><a HREF="bungalows.php">Bungalows</a></li> 
  <li><a HREF="reservation_details.php">Make Reservations</a></li> 
  <li><a HREF="family.php">Family</a></li> 
  <li><a HREF="rules_reg.php">Rules & Regulations</a></li> 
  <li><a HREF="help.php">Help</a></li> 
   
</ul>   
</div> 
<table width="1057" class="table_position1">
<tr>
	<td><button class="menu1" onclick="window.location.href='booking_process.php'" >Booking Process</button></td>
	<td><button class="menu1" onclick="window.location.href='waiting.php'" >Waiting List</button></td>
	<td><button class="menu1" onclick="window.location.href='cancel.php'" >Cancelation</button></td>
	
</tr>
</table>
<div class="article">
<p class="font" >Waiting list...  </p>

<ul>
  <li>If a date is not available for a specific bungalow you can always add yourself to a waiting list.</li><br/>
  <li>If a cancellation has been placed, the first person in the waiting list will get a SMS notification about the cancellation</li><br/>
  <li>You can add your name to more than one waiting list</li><br/>
  <li>Once you have added to the waiting list check your messages daily</li><br/>
  <li>Please contact welfare manager/branch officer/second officer for more information</li>
</ul>

</div>
<div class="login">


<form action="login.php" method="post" name="login">

<table>
<caption><b>Login Here</b></caption>
<tr>
	<td><input type="text" placeholder="UserName or Email" name="emailusername" required="" /></td>
</tr>
<tr>
	<td><input type="password" placeholder="Password" name="password" required="" /></td>
</tr>
<tr>
	<td><input onclick="return(submitlogin());" type="submit" name="submit" value="Login" /></td>
</tr>

</table>

</form>

<!-- end of login module -->


</div>
<!-- end of main images, nav bar -->

<button class="button1" onclick="window.location.href='view_calender.php'">View Calender</button>
<button class="button2" onclick="window.location.href='reservation_table.php'" disabled>Resevation Table</button>
<button class="button3" onclick="window.location.href='waiting_list.php'" disabled>Waiting List</button>
<button class="button5 button_styles" onclick="window.location.href='add_payments.php'">Add Payments</button>
</body>
</html>
