<?php
include ('csession.php');
include ('../sql.php');

ini_set('memory_limit', '-1');

if(!isset($_SESSION['customer_login_user'])){
header("location: ../index.php");} // Redirecting To Home Page
$query4 = "SELECT * from custlogin where email='$user_check'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['cust_id'];
              $para2 = $row4['cust_name'];

unset($_COOKIE["crop"]);
unset($_COOKIE["quantity"]);
unset($_COOKIE["TradeId"]);
unset($_COOKIE["x"]);
unset($_COOKIE["flag"]);			  
?>


<?php 
		if(isset($_POST["add_to_cart"]))
		{
			if(isset($_SESSION["shopping_cart"]))
			{
				$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
				if(!in_array($_GET["id"], $item_array_id))
				{
				
					$item_array = array(
						'item_id'			=>	$_GET["id"],
						'item_name'			=>	$_POST["hidden_name"],
						'item_price'		=>	$_POST["hidden_price"],
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
					'item_id'			=>	$_GET["id"],
					'item_name'			=>	$_POST["hidden_name"],
					'item_price'		=>	$_POST["hidden_price"],
					'item_quantity'		=>	$_POST["quantity"]
				);
				$_SESSION["shopping_cart"][0] = $item_array;
			}
		}

		if(isset($_GET["action"]))
		{
			if($_GET["action"] == "delete")
			{
				foreach($_SESSION["shopping_cart"] as $keys => $values)
				{
					if($values["item_id"] == $_GET["id"])
					{
						unset($_SESSION["shopping_cart"][$keys]);
						$b=$_GET["id"];
						
						$query5="SELECT Trade_crop from farmer_crops_trade where trade_id= $b";
						$result5 = mysqli_query($conn, $query5);
						$row5 = $result5->fetch_assoc(); 
						$a=$row5["Trade_crop"];
						
						
						$query6="DELETE FROM `cart` WHERE `cropname` = '".$a."'";
						$result6 = mysqli_query($conn, $query6); 

						echo '<script>alert("Item Removed")</script>';
						echo '<script>window.location="cbuy_crops.php"</script>';
		

					     
						
					}
				}
			}
		}




?>

<!DOCTYPE html>
<html>
<?php include ('cheader.php');  ?>

  <body class="bg-white" id="top">
  
<?php include ('cnav.php');  ?>
 	
 	
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 shape-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
<!-- ======================================================================================================================================== -->


<div class="container ">
    
    	 <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-danger badge-pill mb-3">Shopping</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class="card text-white bg-gradient-danger mb-3">
				  <div class="card-header">
				  <span class=" text-danger display-4" > Buy Crops </span>
				  
					
				  </div>
				  
				  <div class="card-body ">
			

				                                                                                                                         

                <table class="table table-striped table-bordered table-responsive-md btn-table  ">

                    <thead class=" text-white">
                    <tr>
					
                        <th>Crop Name</th>
                        <th>Quantity (in KG)</th>
						<th>Availability</th>
                        <th>Price (in Rs)</th>
						<th>Add Item</th>
	
                    </tr>
                    </thead>

                    <tbody>
					
                    <tr>
						<form role="form"  id="buycrops"  method="POST" enctype="multipart/form-data">   

						<td>
                        <div class="form-group" >
						<select id="crops" name="crops" class="form-control ">
							<option value="">Select Crop</option>
  							<option value="arhar">Arhar</option>
							<option value="bajra">Bajra</option>  
							<option value="barley">Barley</option>
							<option value="cotton">Cotton</option>	
							<option value="gram">Gram</option>
							<option value="jowar">Jowar</option>
							<option value="jute">Jute</option>
							<option value="lentil">Lentil</option>
							<option value="maize">Maize</option>
							<option value="moong">Moong</option>
							<option value="ragi">Ragi</option>
  							<option value="rice">Rice</option>
							<option value="soyabean">Soyabean</option>
							<option value="urad">Urad</option>
							<option value="wheat">Wheat</option>
						</select>					
						</div>					
						</td>
						
                        <td>
                        <div class="form-group" >
                        <input id="quantity" type="number" name="trade_farmer_cropquantity"  required class="form-control required">
                        </div>
						</td>														

						</form>


	
<script>
document.getElementById("crops").addEventListener("change", function() {
  document.getElementById("quantity").addEventListener("change", function() {
    var quantity = jQuery('#quantity').val();
	  var crops = jQuery('#crops').val();

    jQuery.ajax({
      url: 'ccheck_availability.php',
      type: 'post',
      data: { crops: crops, quantity: quantity },
      success: function(response) {
		      try {
				  var result = JSON.parse(response);
				  
				  var crop = result.cropR;
				  var quantity = result.quantityR;
				  var TradeId = result.TradeIdR;
				  var flag = result.flagR;
				  var x = result.xR;
				  
				  console.log(result);
				      if (flag == 1) {
					  $("#availability").html("Yes, Available");
					  $("#price").html(x);
					} else {
					  $("#availability").html("Out of Stock");
					}
			} catch (error) {
				  console.log('Error:', error);
			}
									$.ajax({
			  url: 'ctest_data.php',
			  type: 'POST',
			  data: { crop: crop, quantity: quantity, TradeId: TradeId, x: x, flag: flag },
			  success: function(new_response) {
					console.log(new_response.crop);
			  }
			});

		}
	});
  });
});
</script>


<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$flag=0;
$x=0;
$quantity=0;
$TradeId=0;
$crop=' ';

	
	$crop = $_COOKIE['crop'];
	$quantity = $_COOKIE['quantity'];
	$TradeId = $_COOKIE['TradeId'];
	$x = $_COOKIE['x'];
	$flag = $_COOKIE['flag'];


echo "The crop is $crop and the quantity is $quantity";


?>




							<td>
						<div id="availability"></div>
						
		
                        
						</td>

						<td>
                       <div id="price"></div>
						
						</td>



						<td>
						<form method="POST" action="buy_crops.php?action=add&id=<?php echo $TradeId ?>">
                            <input hidden name="hidden_name"  value="<?php echo $crop ?>">
							<input hidden name="hidden_price" value="<?php echo $x ?>">
                            <input hidden name="quantity" value="<?php echo $quantity ?>">
    
                            <button class="sc-add-to-cart"
                            <?php if ($flag == '0'){ ?> disabled <?php   } ?>
                            name="add_to_cart" type="submit">
                            Add To Cart
                            </button>
                        </form>

						</td>

						<?php
						if(isset($_POST ['add_to_cart'])){
							$crop=$_POST['hidden_name'];
							$quantity=$_POST['quantity'];
							$price=$_POST['hidden_price'];
							$query4="INSERT INTO `cart`(`cropname`, `quantity`, `price`) 
  							VALUES ('$crop','$quantity','$price');";
  							$result4 = mysqli_query($conn, $query4);
							
							unset($_COOKIE["crop"]);
							unset($_COOKIE["quantity"]);
							unset($_COOKIE["TradeId"]);
							unset($_COOKIE["x"]);
							unset($_COOKIE["flag"]);
						}

						?>

					
						</tr>
						</tbody>

                        </table> 


			<h3 class=" text-white">Order Details</h3>
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-responsive-md btn-table display" id="myTable">
					<tr class=" bg-dange">
						<th width="40%">Item Name</th>
						<th width="10%">Quantity (in KG)</th>
						<th width="20%">Price (in Rs.)</th>
					
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr class=" bg-white">
						<td><?php echo ucfirst($values["item_name"]); ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>Rs. <?php echo $values["item_price"]; ?> </td>
				
						<td><a href="cbuy_crops.php?action=delete&id=<?php echo $values["item_id"]; ?>" type="button" class="btn btn-warning btn-block" >Remove</a></td>
					
					</tr>

					<?php
							$total = $total +  $values["item_price"];
							$_SESSION['Total_Cart_Price']=$total;
						}
					?>
					<tr>
						<td colspan="2" align="right">Total</td>
						<td align="right">Rs. <?php echo number_format($total,2); ?></td>

						<td>
						
						<?php
							require_once "StripePayment/config.php";
						
							foreach ($products as $productID => $attributes) {
								$TotalCartPrice=$_SESSION['Total_Cart_Price']*100;
											echo '
												<br>
												<form action="StripePayment/stripeIPN.php?id='.$productID.'" method="POST">
												<script 
													src="https://checkout.stripe.com/checkout.js" class="stripe-button"
													data-key="'.$stripeDetails['publishableKey'].'"
													data-amount="'.$TotalCartPrice.'"
													data-currency="inr"
													data-name="Agriculture Payment Portal"
													data-description="Crop Payment"
													data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
													data-label="Buy Now"
													data-locale="auto">
												</script>
												</form>
								';
							}
    					?>
							
						
						</td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>








</div>
				</div>				 		  
            </div>
          </div>
        </div>
		 
</section>
	   <?php require("footer.php");?>

	   <script>
				$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

</body>
</html>		

		
					
           