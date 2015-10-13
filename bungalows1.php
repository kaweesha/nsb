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
<title>Login</title>
<link rel="stylesheet" type="text/css" href="home_CSS.css">
<link rel="stylesheet" type="text/css" href="template.css">
<link rel="import" href="navbar.html">

</head>

<body>
<?php include 'navbar_btnlist_after_logging.php'; ?> <!--nsb logo, cbrs logo, header image, main menu, button list in the left-->


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


<p style="position:absolute; left: 231px; top: 180px; width: 836px;" class="heading">Bungalow Details</p>

<div>
<div class="articles">
<button class="kandy bungalow" onclick="window.location.href='kandy.php'">Kandy Bungalow</button>
<button class="Beliatta bungalow" onclick="window.location.href='kandy.php'">Beliatta Bungalow</button>
<button class="Dambulla bungalow" onclick="window.location.href='kandy.php'">Dambulla Bungalow</button>
<button class="Chavakaccheriya bungalow" onclick="window.location.href='kandy.php'">Chavakaccheiya Bungalow</button>
<button class="Maravila bungalow" onclick="window.location.href='kandy.php'">Maravila Bungalow</button>
<button class="Badulla bungalow" onclick="window.location.href='kandy.php'">Badulla Bungalow</button>
<button class="Mahiyanganaya bungalow" onclick="window.location.href='kandy.php'">Mahiyanganaya Bungalow</button>
<button class="Bandarawela bungalow" onclick="window.location.href='kandy.php'">Bandarawela Bungalow</button>
<button class="Ambalanthota bungalow" onclick="window.location.href='kandy.php'">Ambalanthota Bungalow</button>
<button class="Galle bungalow" onclick="window.location.href='kandy.php'">Galle Bungalow</button>
<button class="Anuradhapura bungalow" onclick="window.location.href='kandy.php'">Anuradhapura Bungalow</button>
<button class="NuwaraEliyaNew bungalow" onclick="window.location.href='kandy.php'">Nuwara Eliya New Bungalow</button>
<button class="NuwaraEliya bungalow" onclick="window.location.href='kandy.php'">Nuwara Eliya Bungalow</button>


</div>





</body>
</html>
