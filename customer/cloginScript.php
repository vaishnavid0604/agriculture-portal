<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

require('../sql.php'); // Includes Login Script

if(isset($_POST ['customerlogin'])) {
    $customer_email=$_POST['cust_email'];
    $customer_password=$_POST['cust_password'];
  //$farmer_password=SHA1($farmer_password);


    $checkquery = "SELECT * from `custlogin` where email='".$customer_email."' and password='".$customer_password."' ";
  $result = mysqli_query($conn, $checkquery);
  $rowcount=mysqli_num_rows($result);
  if ($rowcount==true) {
    $_SESSION['customer_login_user']=$customer_email; // Initializing Session
	
      $deletequery="DELETE FROM cart";
      $deletecart=mysqli_query($conn,$deletequery);

    header("location: ctwostep.php"); // Redirecting To Other Page
    } 
    else  {
       $error = "Username or Password is invalid";
     }
    
 mysqli_close($conn); // Closing Connection

}


?>
