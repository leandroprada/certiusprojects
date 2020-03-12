<?php
 session_start();
$_SESSION['email'] = $_POST['username'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Certius - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="../css/styleprojects.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="./index.html" aria-expanded="false" >Go back to Certius Projects</a>
	          </li>
			  
			  <li>
	            <li>
	            <a href="#home18tp0001" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">18TP0001 - Teleperformance Anses IVR</a>
	            <ul class="collapse list-unstyled" id="home18tp0001">
                <li>
                    <a href="./wyndham.html">Documentation</a>
                </li>
                <li>
                    <a href="#">Customer Environment</a>
                </li>
                <li>
                    <a href="#">Remote Access</a>
                </li>
				 <li>
                    <a href="#reports_18tp0001" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">18TP0001 Reports</a>
					<ul class="collapse list-unstyled" id="reports_18tp0001">
						<li>
						<a href="#">Report 1</a>
						</li>
						<li>
						<a href="#">Report 2</a>
						</li>
						<li>
						<a href="#">Report 3</a>
						</li>
					</ul>
                </li>
	            </li>
	          
                <li>
                    <a href="#">Internal Project 2</a>
                </li>
                <li>
                    <a href="#">Internal Project 2</a>
                </li>
				 <li>
                    <a href="#">Internal Project 2</a>
                </li>
	            </ul>
	          </li>
			  
	         
			<li>
	            <a href="#home18tp0002" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">18TP0002 - TBD</a>
	            <ul class="collapse list-unstyled" id="home18tp0002">
                <li>
                    <a href="./wyndham.html">Documentation</a>
                </li>
                <li>
                    <a href="#">Customer Environment</a>
                </li>
                <li>
                    <a href="#">Remote Access</a>
                </li>
				 <li>
                    <a href="#reports_18tp0002" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">18tp0002 Reports</a>
					<ul class="collapse list-unstyled" id="reports_18tp0002">
						<li>
						<a href="#">Report 1</a>
						</li>
						<li>
						<a href="#">Report 2</a>
						</li>
						<li>
						<a href="#">Report 3</a>
						</li>
					</ul>
                </li>
	            </li>
	          
                <li>
                    <a href="#">Internal Project 2</a>
                </li>
                <li>
                    <a href="#">Internal Project 2</a>
                </li>
				 <li>
                    <a href="#">Internal Project 2</a>
                </li>
	            </ul>
	          </li>
	          
	        </ul>

	        <div class="footer" >
	        	<p style="color:#024f05;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <div class="limiter">
						<div class="container-login100">
							<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
								<form class="login100-form validate-form flex-sb flex-w" action="signup.php" method="post">
									<span class="login100-form-title p-b-32">
										Login - <?php
																	 if (($_SESSION['login']) != "validated") {
																	 echo '<span style="font-size:0.3em;"> Invalid User - Please try again</span>';}

																	?>
									</span>

									<span class="txt1 p-b-11">
										Email
									</span>
									<div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
										<input class="input100" type="text" name="email" >
										<span class="focus-input100"></span>
									</div>

									<span class="txt1 p-b-11">
										Password
									</span>
									<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
										<span class="btn-show-pass">
											<i class="fa fa-eye"></i>
										</span>
										<input class="input100" type="password" name="password" >
										<span class="focus-input100"></span>
									</div>

									<div class="flex-sb-m w-full p-b-48">
										<div class="contact100-form-checkbox">
											<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
											<label class="label-checkbox100" for="ckb1">
												Remember me
											</label>
										</div>

										<div>
											<a href="#" class="txt3">
												Forgot Password?
											</a>
										</div>
									</div>

									<div class="container-login100-form-btn">
										<button class="login100-form-btn" type="submit" name ="signup-submit">
											Login
										</button>
									</div>

								</form>
							</div>
						</div>
					</div>
        
			</div>
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
