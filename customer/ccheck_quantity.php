<?php
session_start();
require('../sql.php'); // Includes SQL connection script

if (isset($_POST['crops'])) {

  $crop=$_POST['crops'];
  
  $query2="SELECT quantity from production_approx where crop='$crop'";
  $result2 = mysqli_query($conn, $query2);
  while($row2 = $result2->fetch_assoc()) {
  $Cquantity=$row2["quantity"]; 
  }
  
  $query3="SELECT trade_id from farmer_crops_trade where Trade_crop='$crop'";
					  $result3=mysqli_query($conn,$query3);
					  $row2 = $result3->fetch_assoc();
					  $TradeId=$row2["trade_id"]; //trade id
					  
					  
$result = array(
	"TradeIdR" => $TradeId,
	"quantityR" => $Cquantity,
  );
  
    echo json_encode($result);

}