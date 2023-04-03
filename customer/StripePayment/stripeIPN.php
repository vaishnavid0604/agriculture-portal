<?php
session_start();
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

	require_once "config.php";

	\Stripe\Stripe::setVerifySslCerts(false);

	// Token is created using Checkout or Elements!
	// Get the payment token ID submitted by the form:
	$productID = $_GET['id'];
	$token = $_POST['stripeToken'];
	$email = $_POST["stripeEmail"];


	if (!isset($_POST['stripeToken']) || !isset($products[$productID])) {
		header("Location: ../cbuy_crops.php");
		exit();
	}




	//Customer Details Query
	$customerquery="SELECT * from custlogin where email='".$userlogin."'";
	$customerresult=mysqli_query($conn,$customerquery);


	$row=mysqli_fetch_array($customerresult);
	$Customername=$row['cust_name'];
	$CustomerAddress = $row['address'];
	$CustomerCity= $row['city'];
	$CustomerPincode=$row['pincode'];
	$CustomerState=$row['state'];
	$CustomerPhone=$row['phone_no'];
	$CustomerEmail=$row['email'];


	

	//Add customer to Stripe :
	$customer =\Stripe\Customer::create(array(
		'email' =>$CustomerEmail,
		'source' =>$token,
		'name'=> $Customername,
		'description' => 'Customer Payment',
		'address' => [
			'line1' => $CustomerAddress,
			'postal_code' => $CustomerPincode,
			'city' => $CustomerCity,
			'state' => $CustomerState,
			'country' => 'IN',
		  ],
	));



	// Charge the user's card:
	$charge = \Stripe\Charge::create(array(
		"customer" => $customer->id,
		"amount" => $products[$productID]["price"],
		"currency" => "inr",
		"description" => $products[$productID]["title"],
		"metadata" => array(
			"order_id" => "1"
		)
	));



	
	header("location: ../cupdatedb.php");
	//send an email
	//store information to the database
	
?>