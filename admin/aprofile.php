<?php
session_start();// Starting Session
require('../sql.php'); // Includes Login Script

// Storing Session
$user = $_SESSION['admin_login_user'];

if(!isset($_SESSION['admin_login_user'])){
header("location: ../index.php");} // Redirecting To Home Page
$query4 = "SELECT * from admin where admin_name ='$user'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['admin_id'];
              $para2 = $row4['admin_name'];
			  $para3 = $row4['admin_password'];
			  
?>

<!DOCTYPE html>
<html>
<?php require ('aheader.php');  ?>

  <body class="bg-white" id="top">
  
<?php require ('anav.php');  ?>
 	
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
            <span class="badge badge-danger badge-pill mb-3">Admin</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-4 mb-3">
			
			
				<div class="card">
                <div class="card-body bg-gradient-success">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="../assets/img/admin.png" alt="admin" class="rounded-circle " width="158">
                    <div class="mt-3">
                      <h4>                Welcome     <?php echo $para2 ?></h4>
                      <p class="text-white mb-1">Admin ID: <?php echo $para1 ?> </p>

                    </div>
                  </div>
                </div>
              </div>			 		  
            </div>
			
			
                <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body bg-gradient-white">
				
                  <ol class="text-justify list-group list-group-flush">
               
                <li class="list-group-item">Admin has access to all the data in the Agriculture Portal.</li>
				<li class="list-group-item">Admin can modify and view all the Customer's details when necessory.</li>
				<li class="list-group-item">Admin can manage the farmer's details who provide supplies to the store.</li>
               <li class="list-group-item"> Admin also has access to the sales report and can sort them as required.</li>
                <br>
              </ol>
          
                </div>
              </div>
            </div>
			
          </div>
        </div>
		
  

</section>

    <?php require("footer.php");?>

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
</script>
</html>