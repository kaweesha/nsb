<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rules & Regulations</title>
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
  <li><a HREF="bungalows.php" >Bungalows</a></li> 
  <li><a HREF="reservation_details.php">Make Reservations</a></li> 
  <li><a HREF="family.php">Family</a></li> 
  <li><a HREF="rules_reg.php" >Rules & Regulations</a>  </li> 
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
<!-- end of main images, nav bar -->
<button class="button1" onclick="window.location.href='view_calender.php'">View Calender</button>
<button class="button2" onclick="window.location.href='reservation_table.php'" disabled>Resevation Table</button>
<button class="button3" onclick="window.location.href='waiting_list.php'" disabled>Waiting List</button>
<button class="button5 button_styles" onclick="window.location.href='add_payments.php'">Add Payments</button>


<!-- begining of login module -->
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

</body>
</html>
