<?php
 session_start();
$_SESSION['email'] = $_POST['email'];
$_SESSION['login'] = "validated";


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
  
		<?php if ($_SESSION['login'] != "validated") { 
			<p>You are not authenticated, please <a href="./login/index.php">login here</a></p>
		}
		?>
		<?php else { 	
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

        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                <li class="nav-item active">
                    <a class="nav-link" href="#">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </nav> -->

        <h2 class="mb-4">18tp0001 Wyndham Project
		</h2>
        <p>In this page you will find all documentation for Wyndham hotels</p>
		<h2>Scope of work</h2>


<h4>1  Scope</h4>
        <p>This proposal describes the professional services to be provided by Certius for the Wyndham project, in relation to the voice self-service application specifications received from Waterfield on December 30, 2019.</p>
		<ul><li>WVO call flow draft.pdf</li></ul>

<p>This application has a multilingual directed-dialog ASR (Automated Speech Recognition) user interface.</p>

<h4>1.1 Services</h4>

<p>The following professional services would be provided by Certius within the scope of this project:</p>
<ul>
<li>Translation of the application audio messages texts to Spanish and Portuguese</li>
<li>Deliverable: Excel spreadsheet containing the original messages in English provided by Waterfield, and the corresponding translated messages, one column for each language. Translations would be performed by native speakers</li>
<li>Provision of ASR grammar files for each interaction state in the application: menus and Prompt&Collects, for Spanish and Portuguese</li>
<li>Deliverable: Lumenvox grammar files (uncompiled)</li>
<li>Self-service application QA testing for Spanish and Portuguese through the performance of phone calls to the application, with the objective of verifying the audio messages and the correct performance of the ASR grammars.</li>
<li>Prerequisite: Waterfield should first perform the application QA testing in English</li>
<li>Deliverable: test cases performance report (Excel)</li>
<li>UAT support for end-customer testing in all issues related to Spanish and Portuguese audio messages and grammars</li>
<li> It is assumed that the UAT testing process for the entire application would last two weeks.</li>
</ul>

<p>Unless otherwise indicated in this proposal, all services will be provided by Certius remotely from its offices in Buenos Aires, during normal working hours only: Monday to Friday (excluding national holidays in Argentina) from 9 am to 6 pm Argentina time.</p>

<h4>1.1.1 SERVICES EXCLUSIONS</h4>
<p>The following services are explicitly excluded from this proposal:</p>
<ul>
<li>Services related to ASR tuning</li>
<li>Any warranty on ASR performance levels</li>
<li>Services of any kind once the UAT process has been completed</li>
<li>Deploy of files or performance of configurations in the execution environments</li>
</ul>
<h4>1.2 Requirements</h4>
<p>This proposal assumes that Waterfield would provide the following items/services: </p>
<ul>
<li>Final version of the self-service application specification, containing:</li>
<ul><li>All application messages, including messages related to retries and error states</li>
<li>English vocabulary list for each interaction state</li>
<li>English ASR grammars (for sample purposes only)</li>
</ul>
<li>Testing environment</li>
<li>Deploy of grammar files to the testing environment</li>
<li>DID phone number for making phone calls to the application</li>
<li>Required test data for navigating the self-service application</li>
</ul>

	
      </div>
	  
	  
		</div>
		} endif;?>
		
		
	
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>