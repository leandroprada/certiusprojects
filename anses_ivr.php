<?php
 session_start();
$_SESSION['email'] = $_POST['email'];



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
  
		<?php if (($_SESSION['login'] != "validated")) { 
			echo '<p>You are not authenticated, please <a href="./login/index.php">login here</a></p>';
		}
			else { 
			echo '<p>You are authenticated, thank you</p>
		';
		}
		endif;
	?>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>