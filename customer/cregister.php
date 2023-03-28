<?php
include('cregisterScript.php'); // Includes Login Script
require_once("../sql.php");
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
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>


		  <script>
function getdistrict(val) {
	$.ajax({
	type: "POST",
	url: "cget_district.php",
	data:'state_id='+val,
	success: function(data){
		$("#district-list").html(data);
	}
	});
}

</script>	
</head>

  <body class="bg-white" id="top" >
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
		  <a class="nav-link dropdown-toggle text-success " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                  <span class="text-success nav-link-inner--text"
                  ><i class="text-success fas fa-user-plus"></i> Sign Up</span
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
		  <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                  <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-sign-in-alt"></i> Login</span
                >
		  </a>

		   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			<a class="dropdown-item" href="flogin.php">Farmer</a>
			<a class="dropdown-item" href="../customer/clogin.php">Customer</a>
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
            <span class="badge badge-info badge-pill mb-3">Register</span>
          </div>
        </div> 
      
<div class="row">
<div class="col-sm-12 mb-3">  
			  
  <div class="nav nav-tabs nav-fill bg-gradient-default" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active font-weight-bold text-warning" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">User Singup</a>

  </div>
                  
                		  
      <div class="tab-content py-3 px-3 px-sm-0 bg-gradient-inf" id="nav-tabContent">

 
         <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
           <div class="card card-body bg-gradient-warning">
 


<form name="insert" action="" method="post">	
		
		  <div id="success"> <?php echo $error; ?>    </div>
		 <script>		
			$("#success").fadeTo(2000, 500).slideUp(500, function(){
    $("#success").slideUp(500);
});
 </script>

			   <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Customer Name <strong class="text-default"> *</strong></label>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="name"  required="true"/>
                </div>				
              </div>
			  
			  <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Email Address <strong class="text-default"> *</strong></label>
                <div class="col-md-9">
                  <input class="form-control" type="email" name="email" required="true" />
				    
                </div>

              </div>
			  
			  <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Mobile No <strong class="text-default"> *</strong></label>
                <div class="col-md-9">
                  <input class="form-control" type="number" name="mobile" pattern="[6789][0-9]{9}" required="true" />
                </div>
              </div>
			  
			  
			  
			  <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" required="true"> State <strong class="text-default"> *</strong></label>
                <div class="col-md-9">
                 <select onChange="getdistrict(this.value);"  name="state" id="state" class="form-control" >
                    <option value="">Select State</option>
                   	<?php $query =mysqli_query($conn,"SELECT * FROM state");
					while($row=mysqli_fetch_array($query))
					{ ?>
					<option value="<?php echo $row['StCode'];?>"><?php echo $row['StateName'];?></option>
					<?php
					}
					?>
                    </select>

                </div>
              </div>
			  
			  <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" required="true"> City <strong class="text-default"> *</strong></label>
                <div class="col-md-9">
	<select  name="city" id="district-list" class="form-control">
<option value="">Select City</option>
</select>
                </div>
              </div>
			  
			  			  <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Address <strong class="text-default"> *</strong></label>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="address" required="true" />
                </div>
              </div>
			  
			  	  <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Pincode <strong class="text-default"> *</strong></label>
                <div class="col-md-9">
                  <input class="form-control" type="number" min="0" min="6" name="pincode" required="true" />
                </div>
              </div>
			  
			  		 <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Password <strong class="text-default"> *</strong></label>
			   <div class="col-9">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input name="password" type="password"  class="input form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
              <div class="input-group-append">
                <span class="input-group-text" onclick="password_show_hide();">
                  <i class="fas fa-eye" id="show_eye"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                </span>
              </div>
			  			  <span class="text-white d-block"> Use minimum 8 Characters with atleast 1 numericals, Capital letter and Special Character.  </span>
            </div>		
          </div>
		   </div>
	
			  		 <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" >Confirm Password <strong class="text-default"> *</strong></label>
			   <div class="col-9">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
              <input name="confirmpassword" type="password"  class="input form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" id="cpassword" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
              <div class="input-group-append">
                <span class="input-group-text" onclick="password_show_hide2();">
                  <i class="fas fa-eye" id="show_eye2"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye2"></i>
                </span>
              </div>
            </div>
          </div>
		  					   

		   </div>
		   
			  
			   <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" >  </label>
                <div class="col-md-9">
            <button name="customerregister" class=" btn-block btn btn-success">
			<span class="glyphicon glyphicon-edit"></span> Submit</button>		
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

	 <footer class="footer">
        <div class="container">
                    <div class="row">         
                <div class="col-4 col-md-2   align-self-center">				
                    <img class="align-text-center img-fluid"  src="../assets/img/footer-logo.png" />               
                </div>				
                <div class="offset-sm-2 col-5 ">
                    <h5>Our Address</h5>
                    <address>
		              Vishwothama Nagar, Bantakal<br>
		              Udupi - 574 115, Karnataka<br>		              
		              <div class="btn-group text-center" role="group">
                    <a role="button" class="btn btn-primary" href="tel:+919448936339"><i class="fa fa-phone"></i> Call</a>
                    <a role="button" class="btn btn-info" href="tel:+918233294006"> <i class="fa fa-fax"></i> Fax</a>
                    <a role="button" class="btn btn-success" href="mailto:info@sode-edu.in"> <i class="fa fa-envelope-o"></i> Email</a>
                </div>
		           </address>
                </div>				
                <div class="col-12 col-md-3 align-self-center">
            <div class="social-network  text-center">
				           
       <button target="_blank" href="/" rel="nofollow" class="btn btn-icon-only btn-linkedin rounded-circle" data-toggle="tooltip" data-original-title="Mail Us">
            <span class="btn-inner--icon"><i class="fas fa-envelope"></i></span>
          </button>
          <button target="_blank" href="/" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
            <span class="btn-inner--icon"><i class="fab fa-twitter"></i></span>
          </button>
          <button target="_blank" href="/" rel="nofollow" class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
            <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
          </button>
          <button target="_blank" href="/" rel="nofollow" class="btn btn-icon-only btn-instagram rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
            <span class="btn-inner--icon"><i class="fab fa-instagram "></i></span>
          </button>
          <button target="_blank" href="/" rel="nofollow" class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip" data-original-title="Star on Github">
            <span class="btn-inner--icon"><i class="fab fa-github"></i></span>
          </button>
             
           			
				</div>				
				</div>
           </div>		    
		   <hr>
           <div class="row justify-content-center">             
                     <div class="col-auto">					
                    <p>&copy; Copyright 2023 AGRICULTURE PORTAL, All Rights Reserved </p>
                </div>
           </div>
        </div>
    </footer>


</body>

  <script>
  function password_show_hide() {
  var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}

  function password_show_hide2() {
  var x = document.getElementById("cpassword");
  var show_eye = document.getElementById("show_eye2");
  var hide_eye = document.getElementById("hide_eye2");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
</script>

</html>
