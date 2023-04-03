<?php
session_start();
require('../sql.php'); // Includes SQL connection script

		if(isset($_POST ['add_to_cart'])){
							$crop=$_POST['crops'];
							$quantity=$_POST['quantity'];
							$tradeID=$_POST['tradeid'];
							$price=$_POST['price'];
							$query4="INSERT INTO `cart`(`cropname`, `quantity`, `price`) 
  							VALUES ('$crop','$quantity','$price');";
  							$result4 = mysqli_query($conn, $query4);
						}

		if(isset($_POST["add_to_cart"]))
		{
			if(isset($_SESSION["shopping_cart"]))
			{
				$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
				if(!in_array($tradeID, $item_array_id))
				{
				
					$item_array = array(
						'item_id'			=>	$tradeID,
						'item_name'			=>	$_POST["crops"],
						'item_price'		=>	$_POST["price"],
						'item_quantity'		=>	$_POST["quantity"]
					);
					array_push($_SESSION['shopping_cart'], $item_array);
				}
				else
				{
					echo '<script>alert("Item Already Added")</script>';
				}
			}
			else
			{
				$item_array = array(
					'item_id'			=>	$tradeID,
					'item_name'			=>	$_POST['crops'],
					'item_price'		=>	$_POST["price"],
					'item_quantity'		=>	$_POST["quantity"]
				);
				$_SESSION["shopping_cart"][0] = $item_array;
			}
			header("Location: cbuy_crops.php?action=add&id=$tradeID");
			

		}


		
?>	