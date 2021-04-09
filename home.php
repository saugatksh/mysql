<?php 
session_start();
if (!isset($_SESSION['pname'])) {
	header('location:login.php');
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home Page</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
	
 </head>
 <body>
 	<a class="logout" href="logout.php">Log Out</a>
 <href="index.html">
 </div>
 </body>
 </html>
