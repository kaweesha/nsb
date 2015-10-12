<?php
session_start();
	include_once 'class.user.php';
	$user = new User();

	if (isset($_REQUEST['submit'])) {
		extract($_REQUEST);
	    $login = $user->check_login($emailusername, $password);
	    if ($login) {
	        /* Registration Success*/
	       header("location:home.php");
	    } 
		else {
			/*registration failed*/
			header("location:home1.php");
		}
	}

?>

<!DOCTYPE html> 
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="home_CSS.css">
<link rel="stylesheet" type="text/css" href="template.css">
<link rel="import" href="navbar.html">
<script type="text/javascript" language="javascript">

            function submitlogin() {
                var form = document.login;
				if(form.emailusername.value == ""){
					alert( "Enter email or username." );
					return false;
				}
				else if(form.password.value == ""){
					alert( "Enter password." );
					return false;
				}
			}

</script>
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
<button class="button1" onclick="window.location.href='view_calender1.php'" >View Calender</button>
<button class="button2" onclick="window.location.href='reservation_table.php'" disabled>Resevation Table</button>
<button class="button3" onclick="window.location.href='waiting_list.php'" disabled>Waiting List</button>
<!-- button list in the right. Only appear in login.php and home.php -->

<form style="position:absolute; left: 1061px; top: 212px;">
  Search:
  <input type="search" name="search">
</form>

<p style="position:absolute; left: 231px; top: 156px; width: 836px;" class="heading">Circuit Bungalow Reservations System - CBRS</p>

<div>
<div class="article">
<p class="font" >A place like a home...  </p>

<p>NSB your family bank provides you a great opportunity to spend your vacation with your lovely family in our circuit bungalows around Sri Lanka. You can make your reservation under rules and regulations of the bank. Comfortable rooms, kitchens, living areas and delicious food will offer you, the uniquely designed bungalows blend well with nature, and consists of charming chalets mostly made of recyclable substance. Have a wonderful experience with your loved ones.</p>
</div>

	<img src="indian-family.jpg" width="200" height="187" alt="family" class="img_family" />
	<img src="vacation2.jpg" width="271" height="142" alt="Sri Lankan food" class="img_food" />
    <img src="vacation3.jpg" width="186" height="187" alt="luxuary hotel room" class="img_hotel" />
</div>


<!-- login module -->
<div class="login">


<form action="login.php" method="post" name="login">

<table>
<caption><b><font color="blue">Wrong Username or Password</font></b></caption>
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
