<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Reservation Details</title>
<link rel="stylesheet" type="text/css" href="template.css">
<link rel="stylesheet" type="text/css" href="reservation_details_css.css" />
<link rel="stylesheet" type="text/css" href="home_CSS.css">
<script src="reservation_details_js.js"></script>

</head>

<body>

<!--main images, nav bar-->
<img class="img1" src="Templates/sds.png" width="200" height="150" />
<img class="img2" src="Templates/perfect_hotel.jpg" width="1021" height="118" />
<img class="img4" src="Templates/nsb_logo_1.png" width="180" height="118" />

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
<!-- end of main images, nav bar -->


<!--reservation form -->
<table height="340" class="form">
<form action="insert_into_reservation_table.php" method="post" >
<tr>
	<td class="td"><label for="name">Name: </label></td>
	<td class="td"><input type="text" name="name" id="name" size="30" onblur="name_check()"  ></td>
</tr>
<tr>
	<td class="td"><label for="nsb_id">NSB ID: </label></td> 
	<td class="td"> <input type="text" name="nsb_id" id="nsb_id" onblur="nsbID_check()" size="30"  ></td>
</tr>
<tr>
	<td class="td"><label for="nic">NIC NO: </label></td> 
	<td class="td"> <input type="text" name="nic" id="nic" onblur="NIC_check()" size="30"  ></td>
</tr>
<tr>
	<td class="td"><label for="branch">Branch: </label></td> 
	<td class="td"> <input type="text" name="branch" id="branch" onblur="branch_check()" size="30"  ></td>
</tr>
<tr> 
	<td class="td"><label for="cir_bun">Circuit Bungalow: </label></td>
	<td class="td"><select   class="drop_down_list" name="cir_bun" id="cir_bun" onblur="show_rooms()" >
  			<option>Select the bungalow</option>
  			<option>Ambalanthota</option>
			<option>Anuradhapura</option>
			<option>Badulla</option>
			<option>Bandarawela</option>
			<option>Beliatta</option>
			<option>Chawakachcheri</option>
			<option>Dambula</option>
			<option>Galle</option>
			<option>Kandy</option>
			<option>Katharagama</option>
			<option>Mahiyangana</option>
			<option>Maravila</option>
			<option>Nuwara Eliya-2</option>
			<option>Nuwara Eliya-New</option>
			
  		</select> </td>
</tr>
<tr>
	<td class="td"><label for="bun_cat">Bungalow Category: </label></td>
	<td class="td"><input   type="radio" name="bun_cat" value="section A" id="secA"/><label for="secA">Section A</label>
  				   <input    type="radio" name="bun_cat" value="section B" id="secB" /><label for="secB">Section B</label>
				   <input   type="radio" name="bun_cat" value="normal" id="normal"/><label for="normal">Normal</label> </td>
</tr>
<tr>
	<td class="td"><label for="no_of_people">Number of People: </label></td>
	<td class="td"><input type="text" name="no_of_people" id="no_of_people" onblur="no_of_people_check()" size="30"   ></td>
</tr>
<tr>
	<td class="td"><label for="email">Email: </label></td>
    <td class="td"><input type="email" name="email" id="email" size="30"   /></td>
</tr>
<tr>
	<td class="td"><label for="contact_no">Contact No: </label></td>
    <td class="td"><input type="text" name="contact_no" id="contact_no" pattern="[0-9]{10}" title="Enter Valid Contact Number"  size="30"   /></td>
</tr>
<tr>
	<td class="td"><label for="a_date">Arrival Date: </label></td>
	<td class="td"><input type="date" name="a_date" id="a_date" ></td>
	<td class="td"><label for="a_time">Arrival Time: </label></td>
	<td class="td"><input type="time" name="a_time" id="a_time" ></td>
</tr>
<tr>
	<td class="td"><label for="d_date">Departure Date: </label></td>
	<td class="td"><input type="date" name="d_date" id="d_date" ></td>
	<td class="td"><label for="d_time">Departure Time: </label></td>
	<td class="td"><input type="time" name="d_time" id="d_time" ></td>
</tr>
<tr><td class="td" style="text-align:center"><input type="submit" value="Submit"></td></tr>
</form>
</table>

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
<!-- end of reservation form -->
</body>
</html>
