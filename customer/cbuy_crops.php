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

                    <thead class=" text-white text-center">
                    <tr>
					
                        <th>Crop Name</th>
                        <th>Quantity (in KG)</th>
                        <th>Price (in Rs)</th>
						<th>Add Item</th>
	
                    </tr>
                    </thead>

                    <tbody>
					
                    <tr>
					
			
						 
<form method="POST" action="cbuy_redirect.php">

						<td>
                        <div class="form-group" >						
									<?php  									
						// query database table for crops with quantity greater than zero
						$sql = "SELECT crop FROM production_approx where quantity > 0 ";
						$result = $conn->query($sql);

						// populate dropdown menu options with the crop names
						echo "<select id='crops' name='crops' class='form-control text-dark'>";
						echo "<option value=' '>Select Crop</option>";
						while($row = $result->fetch_assoc()) {							
							echo "<option value='" . $row["crop"] . "'>" . $row["crop"] . "</option>";
						}
						echo "</select>";
						

						?>	
											
						</div>					
						</td>
			
			
<input hidden name="tradeid" id="tradeid"  value="">



						<td>   
						  <div class="form-group">     
							<input id="quantity" type="number" placeholder="Available Quantity" max="10" name="quantity" required class="form-control text-dark">   
						  </div> 
						</td>


                        <td>
                        <div class="form-group" >
                        <input id="price" type="text" value="0" name="price"  readonly class="form-control text-dark">
                        </div>
						</td>	
						
						
						 
						<td>
						 <div class="form-group" >
						<button class="btn btn-success form-control" name="add_to_cart" type="submit" disabled >Add To Cart </button>
						</div>
						</td>
							    
	</form>
	
		
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

					<?php
							$total = $total +  $values["item_price"];
							$_SESSION['Total_Cart_Price']=$total;
						}
					?>
					<tr class="text-dark">
						<td colspan="2" align="right" >Total</td>
						<td align="right">Rs. <?php echo number_format($total,2); ?></td>

						<td>
						
			<?php

						
							require_once "StripePayment/config.php";
							
								$TotalCartPrice=$_SESSION['Total_Cart_Price']*100;
								
								$session = \Stripe\Checkout\Session::create([
									'payment_method_types' => ['card'],
									'line_items' => [[
										'price_data' => [
											'product' => 'prod_NdAYaoDLX3DnMY',
											'unit_amount' => $TotalCartPrice,
											'currency' => 'inr',
										],
										'quantity' => 1,
									]],
									'mode' => 'payment',
									'success_url' => 'http://localhost/agriculture_portal/customer/cupdatedb.php',
									'cancel_url' => 'http://localhost/agriculture_portal/customer/cbuy_crops.php',
								]);

												

    					?>
						<button class="btn btn-info form-control" name="pay" type="submit" id="checkout-button">Pay</button>
											
						
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

													<script src="https://js.stripe.com/v3/"></script>
												<script>
												const stripe = Stripe('<?php echo $stripeDetails['publishableKey']; ?>');

												const checkoutButton = document.getElementById('checkout-button');

												checkoutButton.addEventListener('click', () => {
												  stripe.redirectToCheckout({
													sessionId: '<?php echo $session->id; ?>'
												  }).then(function (result) {
													if (result.error) {
													  alert(result.error.message);
													}
												  });
												});
												</script>
												
												
<script>
				$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

						
<script> 
document.getElementById("crops").addEventListener("change", function() {   
  var crops = jQuery('#crops').val();   
  jQuery.ajax({     
    url: 'ccheck_quantity.php',     
    type: 'post',     
    data: 'crops=' + crops,     
    success: function(result) { 
		      try {
				 var result = JSON.parse(result);
				  
				 var cquantity = parseInt(result.quantityR);
				 var TradeId = parseInt(result.TradeIdR);  
				  console.log(result);

				 if (cquantity > 0) {         
						document.getElementById("quantity").placeholder = cquantity;         
					   
						document.getElementById("tradeid").value = TradeId;
					  } else {         
						document.getElementById("quantity").placeholder = "Select Crop";       
					  } 

			} catch (error) {
				  console.log('Error:', error);
			}

	  
    }   
  }); 
}); 
</script>    

<script>
  document.getElementById("quantity").addEventListener("change", function() {
const addToCartBtn = document.querySelector('[name="add_to_cart"]');
    var quantity = jQuery('#quantity').val();
	  var crops = jQuery('#crops').val();
		
    jQuery.ajax({
      url: 'ccheck_price.php',
      type: 'post',
      data: { crops: crops, quantity: quantity },
      success: function(result) {
			var cprice = parseInt(result);
			if(cprice>0){
				document.getElementById("price").value = cprice;
				addToCartBtn.removeAttribute('disabled');
			}
			else{
				document.getElementById("price").value = "0";
			}
		}
	});
});
</script>

	<script>

const quantityInput = document.getElementById("quantity");

quantityInput.addEventListener("change", () => {
  const max = document.getElementById("quantity").placeholder;
  
  if (quantityInput.value > max) {
    alert(`Maximum quantity exceeded. Please enter a quantity less than or equal to ${max}.`);
    quantityInput.value = max;
  }
});
</script>
	
</body>
</html>						
           