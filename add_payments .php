<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Payments</title>
<link rel="stylesheet" type="text/css" href="template.css">
<link rel="stylesheet" type="text/css" href="home_CSS.css">

</head>

<body>

<?php include 'navbar_btnlist_after_logging.php' ?> <!--nsb logo, cbrs logo, header image, menu list, left button list-->


<!-- beginnig of payment form-->
<div class="article">
<form action="add_payments_function.php" method="post">
<table>
<tr>
<td><label for="nsb_id">NIC ID:</label></td>
<td><input type="number" name="nsb_id"/></td>
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
<!-- end of payment form-->

</body>
</html>
