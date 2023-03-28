<?php
session_start();// Starting Session
require('../sql.php'); // Includes Login Script

// Storing Session
$user = $_SESSION['customer_login_user'];

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../assets/img/logo.png" />
    <title>Agriculture Portal</title>

  <!--     Fonts and icons     -->
  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	
	<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css "/>
	
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

 
  <link rel="stylesheet" href="../assets/css/creativetim.min.css" type="text/css">

</head>

  <body class="bg-white" id="top" onload="send_otp();" >
    <!-- Navbar -->
    <nav
      id="navbar-main"
      class="
        navbar navbar-main navbar-expand-lg
        bg-default
        navbar-light
        position-sticky
        top-0
        shadow
        py-0
      "
    >
      <div class="container">
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item dropdown">
            <a href="../index.php" class="navbar-brand mr-lg-5 text-white">
                               <img src="../assets/img/nav.png" />
            </a>
          </li>
        </ul>

        <button
          class="navbar-toggler bg-white"
          type="button"
          data-toggle="collapse"
          data-target="#navbar_global"
          aria-controls="navbar_global"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="navbar-collapse collapse bg-default" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-10 collapse-brand">
                <a href="../index.html">
                  <img src="../assets/img/nav.png" />
                </a>
              </div>
              <div class="col-2 collapse-close bg-danger">
                <button
                  type="button"
                  class="navbar-toggler"
                  data-toggle="collapse"
                  data-target="#navbar_global"
                  aria-controls="navbar_global"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>

          <ul class="navbar-nav align-items-lg-center ml-auto">
		  
		   <li class="nav-item">
              <a href="../contact.php" class="nav-link">
                <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-address-card"></i> Contact</span
                >
              </a>
            </li>
			
						  <li class="nav-item">
			   <div class="dropdown show ">
		  <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                  <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-user-plus"></i> Sign Up</span
                >
		  </a>

		  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			<a class="dropdown-item" href="../farmer/fregister.php">Farmer</a>
			<a class="dropdown-item" href="cregister.php">Customer</a>
		  </div>
		</div>
			</li>
			
		  
		  	  <li class="nav-item">
			   <div class="dropdown show ">
		  <a class="nav-link dropdown-toggle text-success " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                  <span class="text-success nav-link-inner--text"
                  ><i class="text-success fas fa-sign-in-alt"></i> Login</span
                >
		  </a>

		   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			<a class="dropdown-item" href="../farmer/flogin.php">Farmer</a>
			<a class="dropdown-item" href="clogin.php">Customer</a>
			<a class="dropdown-item" href="../admin/alogin.php">Admin </a>
		  </div>
		</div>
			</li>
           

          
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
 	
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

<div class="container">

 <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-info badge-pill mb-3">Login</span>
          </div>
        </div> 
      
<div class="row ">
<div class=" col-sm-8 mb-3 mx-auto text-center">  
                  
  <div class="nav nav-tabs nav-fill bg-gradient-default" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active font-weight-bold text-warning" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">2 Factor Authentication</a>
  </div>

  
    <div class="tab-content py-3 px-3 px-sm-0 bg-gradient-inf" id="nav-tabContent">

 
         <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
           <div class="card card-body bg-gradient-danger">
 
 
 
<form method=""  action="">
	
					<div class="alert alert-success alert-dismissible fade show text-center" style="display: none;" id="popup" role="alert">
			<strong class="text-center text-dark ">OTP Sent Successfully</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			
			<div class="alert alert-primary alert-dismissible fade show text-center" style="display: none;" id="invalid" role="alert">
			<strong class="text-center text-dark ">Invalid OTP</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
	 
	 
					<div class="form-group row">
                    <label for="name" class="col-md-2 col-form-label"
                      ><h6 class="text-white font-weight-bold">Enter OTP</h6>
                    </label>
					
                    <div class="col-md-6">
                      <input type="text" id="otp"  class="form-control" required placeholder="Enter OTP" name="customer_otp">				   
                    </div>
					
					<div class="offset-md-1 col-md-3">
                      <button class="btn btn-info btn-block text-dark " type="button"   onclick="send_otp()">ReSend OTP</button>
                    </div>
					
                  </div>
				  

					 <div class="form-group row">
                    <div class="offset-md-2 col-md-10">
                      <button
                        type="button"
                        class="btn btn-success btn-block text-dark"
						onclick="submit_otp()"
                      >
                        Submit
                      </button>
					                        		   

                    </div>
					</div>
					
             </form>
				
           </div>
       </div> 
	   


	</div>
	  
                 </div>
                </div>
              </div> 
			  
  
</section>

	    <?php require("footer.php");?>

</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

 function send_otp () {
      $.ajax({
        url:"csend_otp.php", //the page containing php script
        type: "POST", //request type
        success:function(result){
			 $("#popup").css({'display':'block'}); 
			 $("#popup").fadeTo(2000, 500).slideUp(500, function(){
			$("#popup").slideUp(500);
});
       }
     });
 }


function submit_otp(){
	var otp=jQuery('#otp').val();
	jQuery.ajax({
		url:'ccheck_otp.php',
		type:'post',
		data:'otp='+otp,
		success:function(result){
			if(result=='yes'){
				window.location='cprofile.php';
			}
			if(result=='not_exist'){
				$("#invalid").css({'display':'block'});
				$("#invalid").fadeTo(2000, 500).slideUp(500, function(){
			$("#invalid").slideUp(500);
});
			}
		}
	});
}
</script>

</html>
