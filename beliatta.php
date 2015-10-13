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
		

	
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="../file/js/modernizr.js"></script>

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
<p style="position:absolute; left: 231px; top: 156px; width: 836px;" class="heading"><font color="black">Beliatta Circuit Bungalow</font></p>
<div>
<div class="article1">
<p><font color="black">Beliatta circuit bungalow is in Beliatta- Walasmulla road and 100m away from the Beliatta junction. You can find an NSB ATM within a walking distance from the bungalow. Since the bungalow is situated in the town, you can buy anything at nearby shops. The bungalow has 6 bedrooms,2 bathrooms, a living room, a dining room and a kitchen. And also it has a separate garage, where 3 vehicles can be parked. Visitors are able to explore many an attractions within the surrounding area of Tangalle including a visit to the famous Hummanaya Blow Hole.</font></p>
</div>
<img src="beliatta.jpg" width="320" height="120" alt="family" class="img_bungalow" />
	
</div>
			
			<div class="main">
	        	<div class="photos">
				    <img src="img/hummanaya.jpg" />
				    <img src="img/whale.jpg" />
				    <img src="img/rekawa.jpg" />
				    <img src="img/mulikirigala.jpg" />
				    <img src="img/surfing.jpg" />
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
<button class="button5 button_styles" onclick="window.location.href='add_payments.php'">Add Payments</button>
</body>
</html>
