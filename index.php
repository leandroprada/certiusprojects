<?php
 session_start();
 $userlogged = $_SESSION['name'];
 
 
 
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Certius Projects</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="./css/styleprojects.css">
  </head>
  <body>
		

		
		<div class="wrapper d-flex align-items-stretch">
			
			<?php if (isset($userlogged))  {
				include 'navbar_logged_in.php';
				echo '
			    <h2 class="mb-4">Certius Projects</h2>
				<p>In this page you will find all non-Avaya project documentation</p>
				</div>';}
			
			elseif (isset($userlogged))   {
				include 'usernotlogged.php';} 
			
			endif;
			
			?>
		
		</div>
		


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>