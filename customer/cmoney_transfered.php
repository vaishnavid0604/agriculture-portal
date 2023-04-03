<?php
include ('csession.php');
include ('../sql.php');

ini_set('memory_limit', '-1');
date_default_timezone_set("Asia/Calcutta"); 

if(!isset($_SESSION['Total_Cart_Price'])){
header("location: cprofile.php");} // Redirecting To Home Page
$query4 = "SELECT * from custlogin where email='$user_check'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['cust_id'];
              $para2 = $row4['cust_name'];
              $para3 = $row4['password'];
			  $para5 = $row4['email'];
			  $para6 = $row4['phone_no'];
			  $para7 = $row4['state'];
			  $para8 = $row4['city'];
			  $para9 = $row4['address'];
			  $para10 = $row4['pincode'];

$totalPrice = $_SESSION['Total_Cart_Price'];
unset($_SESSION['Total_Cart_Price']); 

//Cart Details Query
$Cartquery="SELECT * from cart";
$cartresult=mysqli_query($conn,$Cartquery);



#Update Queries for Production approx and Farmer_trade_crops
?>

<!DOCTYPE html>
<html>
<?php include ('cheader.php');  ?>
<style>


.invoice {
    background: #fff;
    padding: 20px
}

.invoice-company {
    font-size: 20px
}

.invoice-header {
    margin: 0 -20px;
    background: #f0f3f4;
    padding: 20px
}

.invoice-date,
.invoice-from,
.invoice-to {
    display: table-cell;
    width: 1%
}

.invoice-from,
.invoice-to {
    padding-right: 20px
}

.invoice-date .date,
.invoice-from strong,
.invoice-to strong {
    font-size: 16px;
    font-weight: 600
}

.invoice-date {
    text-align: right;
    padding-left: 20px
}

.invoice-price {
    background: #f0f3f4;
    display: table;
    width: 100%
}

.invoice-price .invoice-price-left,
.invoice-price .invoice-price-right {
    display: table-cell;
    padding: 20px;
    font-size: 20px;
    font-weight: 600;
    width: 75%;
    position: relative;
    vertical-align: middle
}

.invoice-price .invoice-price-left .sub-price {
    display: table-cell;
    vertical-align: middle;
    padding: 0 20px
}

.invoice-price small {
    font-size: 12px;
    font-weight: 400;
    display: block
}

.invoice-price .invoice-price-row {
    display: table;
    float: left
}

.invoice-price .invoice-price-right {
    width: 25%;
    background: #2d353c;
    color: #fff;
    font-size: 28px;
    text-align: right;
    vertical-align: bottom;
    font-weight: 300
}

.invoice-price .invoice-price-right small {
    display: block;
    opacity: .6;
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 12px
}

.invoice-footer {
    border-top: 1px solid #ddd;
    padding-top: 10px;
    font-size: 10px
}

.invoice-note {
    color: #999;
    margin-top: 80px;
    font-size: 85%
}

.invoice>div:not(.invoice-footer) {
    margin-bottom: 20px
}

.btn.btn-white, .btn.btn-white.disabled, .btn.btn-white.disabled:focus, .btn.btn-white.disabled:hover, .btn.btn-white[disabled], .btn.btn-white[disabled]:focus, .btn.btn-white[disabled]:hover {
    color: #2d353c;
    background: #fff;
    border-color: #d9dfe3;
}
</style>
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
            <span class="badge badge-danger badge-pill mb-3">Invoice</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class="card text-dark bg-gradient-secondary mb-3">
				  <div class="card-header">
				  <span class=" text-warning display-4" > Invoice </span>
				  
					
				  </div>
				  
				  <div class="card-body ">
			  
      <div class="invoice">
         <!-- begin invoice-company -->
         <div class="invoice-company text-inverse f-w-600">
            <span class="pull-right hidden-print">
            <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
			<a  class="btn btn-sm btn-default m-b-10 p-l-5" href="cprofile.php"> <i class="fa fa-rotate-left t-plus-1 fa-fw fa-lg"></i> Home</a>
            </span>
            Agriculture Portal 
         </div>
         <!-- end invoice-company -->
         <!-- begin invoice-header -->
         <div class="invoice-header">
            <div class="invoice-to">
               <small>To</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse"><?php echo $para2;?></strong><br>
                  <?php echo $para9;?><br>
                  <?php echo $para8;?>, <?php echo $para10;?><br>
                  Phone: <?php echo $para6;?><br>
               </address>
            </div>
            <div class="invoice-date">
               <small>Invoice </small>
               <div class="date text-inverse m-t-5"><?php echo $date = date('d/m/Y'); ?></div>
               <div class="date text-inverse m-t-5"><?php echo $date = date('H:i:s'); ?></div>
               <div class="invoice-detail">
                  #0000123DSS<br>
               </div>
            </div>
         </div>
         <!-- end invoice-header -->
         <!-- begin invoice-content -->
         <div class="invoice-content">
            <!-- begin table-responsive -->
            <div class="table-responsive">
               <table class="table table-invoice">
                  <thead>
                     <tr>
                        <th>Product Name</th>
                        <th class="text-center" width="10%">Quantity</th>
                        <th class="text-center" width="10%">Price</th>
                     
                     </tr>
                  </thead>
                  <tbody>

                    <?php
                        while($rows=mysqli_fetch_assoc($cartresult))
                        {
                    ?>

                            <tr>
                                <td class="text-inverse"><?php echo ucfirst($rows['cropname']); ?></td>
                                <td class="text-center"><?php echo $rows['quantity']; ?></td>
                                <td class="text-center"><?php echo $rows['price']; ?></td>
                            </tr>
                    <?php
                        }
                     ?>
                  

                  </tbody>
               </table>
            </div>
            <!-- end table-responsive -->
            <!-- begin invoice-price -->
            <div class="invoice-price">
               <div class="invoice-price-left">
                  <div class="invoice-price-row">
                     <p>Amount Paid</p>
                  </div>
               </div>
               <div class="invoice-price-right">
                  <small>TOTAL</small> <span class="f-w-600">Rs.&nbsp<?php echo $totalPrice ?></span>
               </div>
            </div>
            <!-- end invoice-price -->
         </div>
         <!-- end invoice-content -->
     
         <!-- begin invoice-footer -->
         <div class="invoice-footer">
            <p class="text-center m-b-5 f-w-600">
               THANK YOU FOR YOUR BUSINESS
            </p>
			
         </div>
        
         <!-- end invoice-footer -->
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

