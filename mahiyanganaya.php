<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>
	<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Animated Image Gallery Using HTML and CSS3</title>
		<meta name="description" content="The emergence of CSS3 technology has enabled web designers to display images in a more interesting format without the need for jQuery." />
		<meta name="keywords" content="jQuery Image Gallery, Image Gallery HTML, Image Gallery CC3" />
		<meta name="author" content="Author for Onextrapixel" />
		<link rel="shortcut icon" href="../file/favicon.gif"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />

		<!-- Edit Below -->
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="../file/js/modernizr.js"></script>
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
<p style="position:absolute; left: 231px; top: 156px; width: 836px;" class="heading"><font color="black">Mahiyanganaya Circuit Bungalow</font></p>
<div>
<div class="article1">
<p><font color="black">Badulla circuit bungalow is situated 1km away from Badulla town. It is located on the mountain range which the  town is surrounded by. Therefore you can see panoramic view of the town from the bungalow. The temperature of the area can be low as 15°C during nights and 25 °C during the day approximately. The bungalow has 3 bedrooms with attached bathrooms, a kitchen, a bedroom and a living room. Only one vehicle can be parked in the garden. Heaters, and hot water are available for visitors use.
</font></p>
</div>
<img src="mahiyanaganaya.jpg" width="320" height="120" alt="family" class="img_bungalow" />
	
</div>
			
			<div class="main">
	        	<div class="photos">
				    <img src="img/01.jpg" />
				    <img src="img/02.jpg" />
				    <img src="img/03.jpg" />
				    <img src="img/04.jpg" />
				    <img src="img/05.jpg" />
				</div>
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
<button class="button4" onclick="window.location.href='https://www.google.lk/maps/dir/''/Tangalle+-+Weeraketiya+Road,+Tangalle/@6.0418191,80.7571823,13z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x3ae14b233ae5f5c9:0xa5fe0821525211d5!2m2!1d80.7915152!2d6.0418202'">View Map</button>
</body>
</html>
