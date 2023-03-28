<?php
session_start();// Starting Session
require('../sql.php'); // Includes Login Script

    $id = $_GET['id'];
    $sql = "DELETE FROM contactus WHERE c_id = $id";
    if (mysqli_query($conn, $sql)) {
		
	echo 
"<script type='text/javascript'>alert('Query Deleted Successfully');
      window.location='aviewmsg.php';</script>";
    } 
?>