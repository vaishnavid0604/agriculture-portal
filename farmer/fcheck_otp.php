<?php
session_start();

$con=mysqli_connect('localhost','root','','agriculture_portal');
$otp=$_POST['otp'];
$email=$_SESSION['farmer_login_user'];
$res=mysqli_query($con,"select * from farmerlogin where email='$email' and otp='$otp'");
$count=mysqli_num_rows($res);
if($count>0){
	mysqli_query($con,"update farmerlogin set otp='' where email='$email'");
	$_SESSION['IS_LOGIN']=$email;
	echo "yes";
}else{
	echo "not_exist";
}
?>