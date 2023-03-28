<?php
session_start();
$error = ''; // Variable To Store Error Message

require('../sql.php'); // Includes Login Script


if(isset($_POST ['adminlogin'])) {
  $aname=$_POST['admin_name'];
  $apassword=$_POST['admin_password'];
  //$farmer_password=SHA1($farmer_password);


  $adminquery = "SELECT * from `admin` where admin_name='".$aname."' and admin_password='".$apassword."' ";
  $result = mysqli_query($conn, $adminquery);
  $rowcount=mysqli_num_rows($result);
  


  if ($rowcount==true) {
    $_SESSION['admin_login_user']=$aname; // Initializing Session
    
//echo '<script type="text/javascript">alert("'.$_SESSION['admin_login_user'].'");</script>';

   header("location: aprofile.php"); // Redirecting To Other Page
    } 
    else  {
       $error = "Username or Password is invalid";
     }
    
 mysqli_close($conn); // Closing Connection
 
}
?>
