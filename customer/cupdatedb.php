<?php
session_start();
date_default_timezone_set("Asia/Calcutta"); 
$userlogin=$_SESSION['customer_login_user'];
$servername="localhost";
$username="root";
$password="";
$dbname="agriculture_portal";

//Create Connection 
$conn =mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$query1="SELECT * from cart";
$result1=mysqli_query($conn,$query1);
$date=date('d/m/Y');

while($row1=$result1->fetch_assoc()){

   $x=$row1['quantity'];



   $query2="UPDATE production_approx SET quantity=`quantity`- '".$row1['quantity']."' WHERE crop='".$row1['cropname']."' ";
   $result2=mysqli_query($conn,$query2);


      while(true){


         $query3="SELECT * from farmer_crops_trade WHERE Trade_crop='".$row1['cropname']."' Limit 1 ";
         $result3=mysqli_query($conn,$query3);
         $row3=$result3->fetch_assoc();


         if($row3['Crop_quantity']==$x){

            $query11="INSERT INTO `farmer_history`(`farmer_id`,`farmer_crop`,`farmer_quantity`,`farmer_price`,`date`) VALUES ('".$row3['farmer_fkid']."',
            '".$row3['Trade_crop']."','".$row3['Crop_quantity']."','".$row1['price']."','".$date."'); ";
            $result11=mysqli_query($conn,$query11);

            $query4="DELETE from farmer_crops_trade WHERE trade_id='".$row3['trade_id']."' " ;
            $result4=mysqli_query($conn,$query4);
            break;
         }

         if($row3['Crop_quantity']>$x){

            $query12="INSERT INTO `farmer_history`(`farmer_id`,`farmer_crop`,`farmer_quantity`,`farmer_price`,`date`) VALUES ('".$row3['farmer_fkid']."',
            '".$row3['Trade_crop']."','".$x."','".$x."'*'".$row3['msp']."','".$date."'); ";
            $result12=mysqli_query($conn,$query12);          

            $query5="UPDATE  farmer_crops_trade SET Crop_quantity=Crop_quantity - '".$x."' WHERE trade_id='".$row3['trade_id']."' " ;
            $result5=mysqli_query($conn,$query5);
            break;

         }

         if($row3['Crop_quantity']<$x){

            $x=$x-$row3['Crop_quantity'];

            $query13="INSERT INTO `farmer_history`(`farmer_id`,`farmer_crop`,`farmer_quantity`,`farmer_price`,`date`) VALUES ('".$row3['farmer_fkid']."',
            '".$row3['Trade_crop']."','".$row3['Crop_quantity']."','".$row3['Crop_quantity']."'*'".$row3['msp']."','".$date."'); ";
            $result13=mysqli_query($conn,$query13);    


            $query6="DELETE from farmer_crops_trade WHERE trade_id='".$row3['trade_id']."' " ;
            $result6=mysqli_query($conn,$query6);

         }


      }


      $a=0.0;
      $y=0;
      $query="SELECT costperkg from farmer_crops_trade where Trade_crop='".$row1['cropname']."' ";
      $result = mysqli_query($conn, $query);
      while($row = $result->fetch_assoc()) {
          $a=$a+$row["costperkg"];
          $y++;
      }
  
      $a=CEIL($a/$y);
      $a=$a+CEIL($a*0.5);
  
      $query7="UPDATE farmer_crops_trade SET msp='$a' where Trade_crop='".$row1['cropname']."' ";
      $result7 = mysqli_query($conn, $query7);
  

header("location: cmoney_transfered.php");


}



?>