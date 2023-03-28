<?php
    // connect to database
$servername="localhost";
$username="root";
$password="";
$dbname="agriculture_portal";
$conn = mysqli_connect($servername, $username, $password, $dbname);
  // $conn = mysqli_connect('us-cdbr-east-03.cleardb.com','b310794f5353e9','d9f40fcf','heroku_f1cacb29cd6455f');
    if(!$conn){
        echo 'Connection error' . mysqli_connect_error();
    } 
?>


