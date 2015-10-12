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
<p style="position:absolute; left: 231px; top: 156px; width: 836px;" class="heading"><font color="black">Kandy Circuit Bungalow</font></p>
<div>
<div class="article1">
<p><font color="black">Kandy circuit bungalow is situated just a few meters away from Kandy town with a breathtaking view of the Kandy lake and the sacred Temple of the Tooth. This bungalow is surrounded with many religious temples and historical places of the Sri Lankan history. This 2 storey circuit bungalows includes 3 bedrooms, a bathroom, a living room, a kitchen with a attached dining room. It has a garage that can be used to park 3 vehicles at a time. While staying in this bungalow, you can have a morning walk around the Kandy lake in the morning experiencing the cool and refreshing weather of the countryside.
</font></p>
</div>
<img src="kandy.jpg" width="320" height="120" alt="family" class="img_bungalow" />
	
</div>
			
			<div class="main">
	        	<div class="photos">
				    <img src="img/knuckles.jpg" />
				    <img src="img/kandytemple.jpg" />
				    <img src="img/peradeniya.jpg" />
				    <img src="img/polgolla.jpg" />
				    <img src="img/pinnawala.jpg" />
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
<button class="button4" onclick="window.location.href='https://mail.google.com/mail/u/0/#inbox/14fe6061807a504d'">View Map</button>
<button class="button5 button_styles" onclick="window.location.href='add_payments.php'">Add Payments</button>
</body>
</html>
