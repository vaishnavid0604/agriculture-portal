<?php
include ('fsession.php');
ini_set('memory_limit', '-1');

if(!isset($_SESSION['farmer_login_user'])){
header("location: ../index.php");} // Redirecting To Home Page
$query4 = "SELECT * from farmerlogin where email='$user_check'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['farmer_id'];
              $para2 = $row4['farmer_name'];
			  
?>

<!DOCTYPE html>
<html>
<?php require ('fheader.php');  ?>

  <body class="bg-white" id="top">
  
 <script>
  window.addEventListener("load", function() {
    const endpoint = "https://newsapi.org/v2/everything?q=farmers&sortBy=popularity&apiKey=e13c1810209a4e6ca7997d39b797152c";
    fetch(endpoint)
    .then(response => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then(data => {
      console.log(data);
      // do something with the response data here
    })
    .catch(error => {
      console.error("There was a problem fetching data from the API:", error);
    });
  });
</script> 

<?php include ('fnav.php');  ?>
 	
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

<div class="container-fluid ">
    
    	 <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-danger badge-pill mb-3">News</span>
          </div>
        </div>
		
                    <div class="row row-content">
            <div class="col-md-12 mb-3">
    <div class="row">
        <div class="col-md-12">
				<div class="card text-white bg-gradient-secondary mb-3">
				  <div class="card-header">
				  <span class=" text-warning display-4" > News List  </span> 					
				  </div>
				  
				  <div class="card-body text-dark">
				<table class="table table-striped table-hover table-responsive table-bordered bg-gradient-white text-center display" id="myTable">

    <thead>
					<tr class="font-weight-bold text-default">
					<th><center>Image</center></th>
					<th><center>Title</center></th>				
					<th><center>Author</center></th>
					<th><center>Published</center></th>
					<th><center>Visit</center></th>
					

        </tr>
    </thead>
    <tbody>


    <?php
	error_reporting(E_ERROR | E_PARSE);

	       // https://newsapi.org/v2/everything?q=Agriculture&sortBy=popularity&apiKey=e13c1810209a4e6ca7997d39b797152c
	
        $url="https://newsapi.org/v2/everything?q=farmers&sortBy=popularity&apiKey=e13c1810209a4e6ca7997d39b797152c";   //Your API KEY
		
        $response=file_get_contents($url);
        $newsdata= json_decode($response);
    ?>
        <?php
            foreach($newsdata->articles as $news)
            {
        ?>
				 <tr class="text-center">
							 <td> <img class="img img-thumbnail " src="<?php echo $news->urlToImage ?>" alt="News thumbnail" width="100px"> </td>
							 <td class="text-wrap text-justify"> <?php echo $news->title ?> </td>						 
							 <td class="text-wrap text-justify"> <?php echo $news->author  ?> </td>
							 <td class=" text-justify"> <?php echo $news->publishedAt  ?> </td>		
<td>  <button class="btn btn-sm btn-info" > <a  href=<?php echo $news->url ?> class=" nav-link text-white" target="_blank">Visit</a> </button></td>

							</tr>
							
						
        <?php
             }
        ?>   
    </tbody>
</table>

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