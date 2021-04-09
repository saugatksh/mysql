<?php 
session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$pname = $_POST['pname'];
$pnum = $_POST['pnum'];

$s = "SELECT * FROM usertable WHERE name='$pname'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
 if ($num==1) {
 	echo "User already taken";
 }else{
 	$reg = "INSERT INTO usertable(name, number) VALUES('$pname' , '$pnum')";
 	mysqli_query($con,$reg);
 	echo "Account Created Successfully";
 }

 ?>