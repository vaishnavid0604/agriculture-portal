<?php
session_start();// Starting Session
require('../sql.php'); // Includes Login Script

    $id = $_GET['id'];
    $sql = "DELETE FROM farmerlogin WHERE farmer_id = $id";
    if (mysqli_query($conn, $sql)) {
		
	echo 
"<script type='text/javascript'>alert('Farmer Deleted Successfully');
      window.location='afarmers.php';</script>";
    } 
?>