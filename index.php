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

<table width="1057" class="table_position">
<tr>
	<td><button class="menu" onclick="window.location.href='home.php'" >Home</button></td>
	<td><button class="menu" onclick="window.location.href='bungalows.php'" >Bungalows</button></td>
	<td><button class="menu" onclick="window.location.href='reservation_details.php'" >Make Reservations</button></td>
	<td><button class="menu" onclick="window.location.href='family.php'" >Family</button></td>
	<td><button class="menu" onclick="window.location.href='rules_reg.php'" >Rules & Regulations</button></td>
	<td><button class="menu" onclick="window.location.href='help.php'" >Help</button></td>
</tr>
</table>
<!-- end of main images, nav bar -->

<!-- button list in the left-->
<button class="button1 button_styles" onclick="window.location.href='view_calender.php'" >View Calender</button>
<button class="button2 button_styles" onclick="window.location.href='reservation_table.php'" disabled>Resevation Table</button>
<button class="button3 button_styles" onclick="window.location.href='waiting_list.php'" disabled>Waiting List</button>
<!-- button list in the left-->

<!-- login module -->
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

</div>
<!-- end of login module -->

<div id="001">
</div>