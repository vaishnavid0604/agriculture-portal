<?php
$Total_cart_price=$_SESSION['Total_Cart_Price']*100;

	$product_name="Crops Payment";
	$product_price=$Total_cart_price;

	$products = array(
		"product1" => array(
			"title" => $product_name,
			"price" => $product_price,
		)
	);
?>