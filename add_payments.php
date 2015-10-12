<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Payments</title>
<link rel="stylesheet" type="text/css" href="template.css">
<link rel="stylesheet" type="text/css" href="home_CSS.css">
<script src="add_payments_validate.js"</script>

</head>

<body>

<!--main images, nav bar-->
<img class="img1" src="Templates/sds.png" width="200" height="150" />
<img class="img2" src="Templates/perfect_hotel.jpg" width="1021" height="118" />
<img class="img3" src="Templates/nsb_logo_1.png" width="180" height="118" />
<img class="img5" src="Templates/k.png" width="600" height="100" />
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
<!-- end of main images, nav bar -->

<!-- button list in the left. Only appear in login.php and home.php -->
<button class="button1 button_styles" onclick="window.location.href='view_calender.php'">View Calender</button>
<button class="button2 button_styles" onclick="window.location.href='reservation_table.php'" disabled>Resevation Table</button>
<button class="button3 button_styles" onclick="window.location.href='waiting_list.php'"disabled>Waiting List</button>
<button class="button5 button_styles" onclick="window.location.href='add_payments.php'">Add Payments</button>

<!-- end of button list-->

<div class="article">
<form action="add_payments_function.php" method="post">
<table>
<tr>
<td><label for="nsb_id">NSB ID:</label></td>
<td><input type="number" name="nsb_id" onblur="nsb_id_check()"/></td>
</tr>
<tr>
<td><label for="amount">Amount:</label></td>
<td><input type="number" name="amount"/></td>
</tr>
<tr>
<td><label for="receipt_no">Receipt Number:</label></td>
<td><input type="number" name="receipt_no"/></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="submit"/></td>
</tr>
</table>
</form>
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
