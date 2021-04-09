<?php 
session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$pname = $_POST['pname'];
$pnum = $_POST['pnum'];

$s = "SELECT * FROM usertable WHERE name='$pname' && number='$pnum'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
 if ($num==1) {
 	$_SESSION['pname'] = $pname;
 	header('location:home.php');
 }else{
 	header('location:login.php');
 }

 ?>