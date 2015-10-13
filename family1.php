<?php
session_start();
include_once 'class.user.php';
$user = new User(); $uid = $_SESSION['uid'];
if (!$user->get_session()){
 header("location:login.php");
}

if (isset($_GET['q'])){
 $user->user_logout();
 header("location:login.php");
 }
 
?>

<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Family</title>
<link rel="stylesheet" type="text/css" href="template.css">

</head>

<body>

<?php include 'navbar_btnlist_after_logging.php'; ?> <!--nsb logo, cbrs logo, header image, main menu, button list in the left-->
</body>
</html>
