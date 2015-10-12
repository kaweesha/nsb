<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="home_CSS.css">
<link rel="stylesheet" type="text/css" href="template.css">
<link rel="import" href="navbar.html">

</head>

<body>

<!--main images, nav bar-->
<img class="img1" src="Templates/sds.png" width="200" height="150" />
<img class="img2" src="Templates/perfect_hotel.jpg" width="1021" height="118" />
<img class="img3" src="Templates/nsb_logo_1.png" width="180" height="118" />
<img class="img-kandy" src="Templates/kandy.jpg" width="200" height="150" />
<img class="img-beliatta" src="Templates/beliatta.jpg" width="200" height="150" />
<img class="img-dambulla" src="Templates/dambulla.jpg" width="200" height="150" />
<img class="img-chavakaccheriya" src="Templates/chavakaccheriya.jpg" width="200" height="150" />
<img class="img-maravila" src="Templates/maravila.jpg" width="200" height="150" />
<img class="img-badulla" src="Templates/badulla.jpg" width="200" height="150" />
<img class="img-mahiyanganaya" src="Templates/mahiyanganaya.jpeg" width="200" height="150" />
<img class="img-bandarawela" src="Templates/bandarawela.jpg" width="200" height="150" />
<img class="img-ambalantota" src="Templates/ambalantota.jpg" width="200" height="150" />
<img class="img-galle" src="Templates/galle.jpg" width="200" height="150" />
<img class="img-anuradhapura" src="Templates/anuradhapura.jpg" width="200" height="150" />
<img class="img-nuwaraeliyanew" src="Templates/nuwaraeliyanew.jpg" width="200" height="150" />
<img class="img-nuwaraeliya" src="Templates/nuwaraeliya.jpg" width="200" height="150" />

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



<button class="button1" onclick="window.location.href='view_calender.php'">View Calender</button>
<button class="button2" onclick="window.location.href='reservation_table.php'" disabled>Resevation Table</button>
<button class="button3" onclick="window.location.href='waiting_list.php'" disabled>Waiting List</button>
<button class="button5 button_styles" onclick="window.location.href='add_payments.php'">Add Payments</button>


<p style="position:absolute; left: 231px; top: 180px; width: 836px;" class="heading">Bungalow Details</p>

<div>
<div class="articles">
<button class="kandy bungalow" onclick="window.location.href='kandy1.php'">Kandy Bungalow</button>
<button class="Beliatta bungalow" onclick="window.location.href='beliatta.php'">Beliatta Bungalow</button>
<button class="Dambulla bungalow" onclick="window.location.href='dambulla.php'">Dambulla Bungalow</button>
<button class="Chavakaccheriya bungalow" onclick="window.location.href='chavakaccheriya.php'">Chavakaccheiya Bungalow</button>
<button class="Maravila bungalow" onclick="window.location.href='maravila.php'">Maravila Bungalow</button>
<button class="Badulla bungalow" onclick="window.location.href='badulla.php'">Badulla Bungalow</button>
<button class="Mahiyanganaya bungalow" onclick="window.location.href='mahiyanganaya.php'">Mahiyanganaya Bungalow</button>
<button class="Bandarawela bungalow" onclick="window.location.href='bandarawela.php'">Bandarawela Bungalow</button>
<button class="Ambalanthota bungalow" onclick="window.location.href='ambalanthota.php'">Ambalanthota Bungalow</button>
<button class="Galle bungalow" onclick="window.location.href='galle.php'">Galle Bungalow</button>
<button class="Anuradhapura bungalow" onclick="window.location.href='kandy.php'">Anuradhapura Bungalow</button>
<button class="NuwaraEliyaNew bungalow" onclick="window.location.href='nuwaraeliyanew.php'">Nuwara Eliya New Bungalow</button>
<button class="NuwaraEliya bungalow" onclick="window.location.href='nuwaraeliya.php'">Nuwara Eliya Bungalow</button>


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



</body>
</html>
