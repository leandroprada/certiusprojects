<?php
 session_start();


require 'dbconn.inc.php';
$email = $_SESSION['email'];
echo "este es el valor que viene de session ".$email;
 // $sql = "SELECT email FROM usr WHERE email=?";
 $sql = "SELECT * FROM usr WHERE email=?";
 $stmt = mysqli_stmt_init($conn);

 if (!mysqli_stmt_prepare($stmt, $sql)){
	  header("Location: login.php?error=wrongusername");
	  echo "Cannot access database";
	  exit();
	  }
	  	  else {
		  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
		  
		  mysqli_stmt_bind_param ($stmt, "s", $email);
		  mysqli_stmt_execute($stmt);
		  mysqli_stmt_store_result($stmt);
		  mysqli_fetch_all();
		  $all = mysqli_fetch_all();
		  $result = mysqli_stmt_store_result($stmt);
		  $resultCheck = mysqli_stmt_num_rows($stmt);
		  if ($resultCheck >= 1) {
				$_SESSION['login'] = "validated";
				var_dump ($all);
				
				/* echo "probando conseguir el nombre";
				$nombredelabase = "no se como se hace";
				var_dump ($nombredelabase); 
				echo "aca va el vardump de result";
				echo $result; 
				echo "aca va el vardump de resultCheck rows";
				var_dump ($resultCheck);
				$userloggedname = $_SESSION['name'];
				echo "este es el valor que viene del query ".$resultofthequery;
				echo $userloggedname; */
			   // header("Location: getname.php");
		  }
		  else {
			  header("Location: ../index.php?error=sqlcouldnotexecute");
		  }

	  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Get Name page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-css/util.css">
	<link rel="stylesheet" type="text/css" href="login-css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
