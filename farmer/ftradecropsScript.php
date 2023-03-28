<?php 
session_start();
ini_set('memory_limit', '-1');
$userlogin=$_SESSION['farmer_login_user'];

require('../sql.php'); // Includes Login Script

if(isset($_POST['Crop_submit'])){
    $x=0.0;
    $y=0;
    $trade_crop=$_POST['crops'];
    $quantity=$_POST['trade_farmer_cropquantity'];
    $costperkg=$_POST['trade_farmer_cost'];

    
    $query1="SELECT farmer_id from farmerlogin where email='".$userlogin."';";
    $run = mysqli_query($conn,$query1);
    $row=mysqli_fetch_array($run);
    $farmer_pid= $row[0];
    
    $query2="INSERT INTO `farmer_crops_trade`(`farmer_fkid`, `Trade_crop`, `Crop_quantity`,`costperkg`) 
    VALUES ($farmer_pid,'$trade_crop', $quantity, $costperkg);";
    $result = mysqli_query($conn, $query2);


    $query="SELECT costperkg from farmer_crops_trade where Trade_crop='$trade_crop'";
    $result = mysqli_query($conn, $query);
    while($row = $result->fetch_assoc()) {
        $x=$x+$row["costperkg"];
        $y++;
    }

    $x=CEIL($x/$y);
    $x=$x+CEIL($x*0.5);

    $query3="UPDATE farmer_crops_trade SET msp='$x' where Trade_crop='$trade_crop'";
    $result = mysqli_query($conn, $query3);


    $query4= "UPDATE production_approx SET quantity=quantity+'$quantity' where crop='$trade_crop'";
    $result = mysqli_query($conn, $query4);

    	echo 
"<script type='text/javascript'>alert('Crop Details Added Successfully');
      window.location='ftradecrops.php';</script>";

}

?>