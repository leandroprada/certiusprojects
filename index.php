<?php
 session_start();
 
$name = $_SESSION['name'];
// This section sets the firstname to "usuario" if the name is not in the session variable
if ($_SESSION['name'] == NULL) {
	$_SESSION['name'] =  "usuario";
	
}

 // <--This is the main skeleton for the website, what varies is the "content_index" pages which will contain the actual content to be shown in the right hand side. -->
		
 
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
			
			<?php if (isset($name))  {
				include './content/content_sidebar_logged_in.php';
				echo '<div id="content" class="p-4 p-md-5">';
				include './content/content_topnavbar.php';
				include './content/content_index.php';
				echo '</div>';
				
			}
			
			elseif (!isset($name))  {
				include './content/usernotloggedin.php';
					}
			?>
			
			
		
		</div>
		


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>