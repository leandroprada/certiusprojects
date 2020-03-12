<?php
 session_start();
 $userlogged = $SESSION['email'];
 
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
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
				
				<? if ($userlogged == null): echo <p>Not Logged In</p>?>
				  
				<? elseif ($userlogged != null): echo "<p>".$userlogged."is Logged in"</p>?>
				  
				<? else: ?>
				  <p>Default Content</p>
				<? endif; ?>
				
	        <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Internal Projects</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="./lumenvox.html" target="_blank">Lumenvox</a>
                </li>
				<li>
                    <a href="https://sites.google.com/view/certiusprojects/home/internalprojects/2018-1-crm" target="_blank">2018-1 CRM</a>
                </li>
                <li>
                    <a href="https://sites.google.com/view/certiusprojects/home/internalprojects/2018-2-webhost" target="_blank">2018-2 Web Hosting</a>
                </li>
                <li>
                    <a href="https://sites.google.com/view/certiusprojects/home/internalprojects/2018-3-blog" target="_blank">2018-3 Confluence Alternatives</a>
                </li>
				 <li>
                    <a href="https://sites.google.com/view/certiusprojects/home/internalprojects/2018-4-email" target="_blank">2018-4 Email Service</a>
                </li>
	            </ul>
	          </li>
			   <li>
	            <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Waterfield Projects</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu2">
                <li>
                    <a href="./wyndham.html">20WT0001 - Wyndham Hotels</a>
                </li>
                <li>
                    <a href="#">Internal Project 2</a>
                </li>
                <li>
                    <a href="#">Internal Project 3</a>
                </li>
				 <li>
                    <a href="#">Internal Project 4</a>
                </li>
	            </ul>
	          </li>
	         
			 <li>
              <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Teleperformance Projects</a>
              <ul class="collapse list-unstyled" id="homeSubmenu3">
                <li>
                    <a href="./anses_ivr.html">18TP0001 - Teleperformance Anses IVR</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>	
                    <a href="#">Page 3</a>
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

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./lumenvox.html" target="_blank">Lumenvox</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./wyndham.html">Waterfield</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./anses_ivr.html">Teleperformance</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>

        <h2 class="mb-4">Certius Projects</h2>
        <p>In this page you will find all non-Avaya project documentation</p>
        
      </div>
		</div>
		


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>