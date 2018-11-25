<?php 
session_start();
header('location:Login.php');
$con=mysqli_connect('localhost','root');

if ($con) {
	echo "Connect Successfully";
} else {
	echo "Not Connect......-)";
}
mysqli_select_db($con,'loginsignup');

$name=$_POST['user'];
$pass=$_POST['password'];

	$q="select * from signin where name='$name' && password='$pass'";
	$result =mysqli_query($con,$q);

	$num=mysqli_num_rows($result);

	if ($num==1) {
		$_SESSION['username']=$name;
		header('location:home.php');
	} else {
		header('location:Login.php');
	}
	
 ?>