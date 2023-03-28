<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../assets/img/logo.png" />
    <title>Agriculture Portal - Farmer</title>

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

  <!-- Data Tables -->	
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
		

  <link rel="stylesheet" href="../assets/css/creativetim.min.css" type="text/css">


<script src="../assets/js/state_district_crops_dropdown.js"></script>


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

		  <script>
var settings = {
  "url": "https://newsapi.org/v2/everything?q=farmers&sortBy=popularity&apiKey=e13c1810209a4e6ca7997d39b797152c",
  "method": "GET",
  "timeout": 0,
};

$.ajax(settings).done(function (response) {
  console.log(response);
});

</script>

</head>