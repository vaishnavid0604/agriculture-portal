<?php
session_start();
require('../sql.php'); // Includes SQL connection script

if (isset($_POST['crops']) && isset($_POST['quantity'])) {
$flag=0;
$temp=0;

  $crop=$_POST['crops'];
  $quantity=$_POST['quantity'];
  
  $query1="SELECT Trade_crop from farmer_crops_trade";
  $result1 = mysqli_query($conn, $query1);
  while($row1 = $result1->fetch_assoc()) {
    if(!strcasecmp($crop,$row1["Trade_crop"])){
      $flag=1;
      break;
    }
  }
  
  $query2="SELECT Crop_quantity from farmer_crops_trade where Trade_crop='$crop'";
  $result2 = mysqli_query($conn, $query2);
  while($row2 = $result2->fetch_assoc()) {
    $temp+=$row2["Crop_quantity"];
  }
  
  $query8 = "SELECT quantity from cart where cropname='" . $crop . "'";
$result8 = mysqli_query($conn, $query8);
if (isset($result8) && $result8->num_rows > 0) {
    $row8 = $result8->fetch_assoc();
    $temp -= $row8['quantity'];
	if($flag==1){
		if($quantity>$temp)
		$flag=0;
		else $flag=1;
	}
}

  
  
  $query="SELECT msp from farmer_crops_trade where Trade_crop='$crop'";
  $result = mysqli_query($conn, $query);
  $row = $result->fetch_assoc();
  $x=$row["msp"]*$quantity;
  
  $query3="SELECT trade_id from farmer_crops_trade where Trade_crop='$crop'";
  $result3=mysqli_query($conn,$query3);
  $row2 = $result3->fetch_assoc();
  $TradeId=$row2["trade_id"]; //trade id
  
    $response = array(
    "flagR" => $flag,
    "xR" => $x,
	"TradeIdR" => $TradeId,
	"cropR" => $crop,
	"quantityR" => $quantity,
  );
  
    echo json_encode($response);



}

?>

				
