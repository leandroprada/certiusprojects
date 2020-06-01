<?php
 session_start();
require 'dbconn.inc.php';
 $userlogged = $_SESSION['name'];
$permissions = $_SESSION['permissions'];
	//The code below parses course list and loops through it	
	$permissions = explode(",",$permissions);

foreach ($permissions as $p_id) 
	{
		$querycd1 = "SELECT permission_description FROM permissions WHERE p_id=";
		$querycd2 = '"'.$p_id.'";';	
		$querycd = $querycd1.$querycd2;
		$resultcd = mysqli_query($conn,$querycd);
		$rowcd = mysqli_fetch_row($resultcd);
		$permissionname = $rowcd[0];

	if ($permissionname != NULL) {
		if ($permissionname == "training"){
		echo '	
	 <h2 class="mb-4">Training Videos</h2>
     
	<div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="video-promo-content text-center">
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Tomcat training</h2>
				<video width="75%" height="450px"  controls>
				  <source src="../files/training/tomcatTraining.mp4" type="video/mp4">
				Your browser does not support the video tag.
				</video>
				
				<video width="75%" height="450px">Test Video<source src="../files/training/tomcatTraining.mp4" type="video/mp4"></video>
				<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Tomcat training - otros materiales de soporte</h3>
				<ul >
					<li style="text-decoration:none">
						<a  href="../content/soportevideos/TomcatConfiguration.pptx" target="_blank">Presentaci&oacute;n Tomcat Configuration </a><a href="../content/soportevideos/TomcatConfiguration.pptx" class="btn btn-info" style="color:white;">Ver</a>
					</li>
					<li style="text-decoration:none">
						<a  href="../content/soportevideos/TomcatConfig.zip" target="_blank">Otra informaci&oacute;n &Uacute;til - Tomcat Configuration </a><a href="../content/soportevideos/TomcatConfig.zip" class="btn btn-info" style="color:white;">Ver</a>
					</li>
				</ul>
              </div>
			  
			  <div class="video-promo-content text-center">
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Avaya CPaaS API webinar</h2>
				<video width="75%" height="450px"  controls>
				  <source src="../files/cpaas/AVAYA_Webinar_APIs_CPaaS_FernandezLopez_210520.mp4" type="video/mp4">
				Your browser does not support the video tag.
				</video>
			  </div>
			  
			  <div class="video-promo-content text-center">
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Black Duck Hub Fundamentals</h2>
				<video width="75%" height="450px"  controls>
				  <source src="../files/training/blackDuckHub06012020.mp4" type="video/mp4">
				Your browser does not support the video tag.
				</video>
			
				<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Black Duck Hub - otro material de soporte </h3>
				<ul >
					<li style="text-decoration:none">
						<a  href="../content/soportevideos/TomcatConfiguration.pptx" target="_blank">Presentaci&oacute;n Black Duck Hub </a><a href="../content/soportevideos/TrainingBlackDuckHub.pdf" class="btn btn-info" style="color:white;">PDF</a> ó <a href="../content/soportevideos/TrainingBlackDuckHub.pptx" class="btn btn-info" style="color:white;">PPT</a>
						
					</li>
					
				</ul>
              </div>
          </div>
        </div>
	</div>
        

		';
	  }
		
		}
	}
	  ?>
		
        