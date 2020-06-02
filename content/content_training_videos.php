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
			<div class="text-left">
				<ul style="list-style:none">
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#telecomSubmenu1" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						 Tomcat training
						<div class="collapse list-unstyled" id="telecomSubmenu1">
							<video width="75%" height="450px"  controls>
							  <source src="../files/training/tomcatTraining.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						
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
					</li>
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#telecomSubmenu2" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
							Avaya CPaaS API webinar
						<div class="collapse list-unstyled" id="telecomSubmenu2">
							<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Avaya CPaaS API webinar</h3>
							<video width="75%" height="450px"  controls>
							  <source src="../files/cpaas/AVAYA_Webinar_APIs_CPaaS_FernandezLopez_210520.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						</div>
					</li>
			
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#telecomSubmenu3" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
							Black Duck Hub Fundamentals
						<div class="collapse list-unstyled" id="telecomSubmenu3">
							<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Black Duck Hub Fundamentals</h3>
							<video width="75%" height="450px"  controls>
							  <source src="../files/training/blackDuckHub06012020.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
							
							<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Black Duck Hub - otro material de soporte </h3>
							<ul >
								<li style="text-decoration:none">
									<a  href="../content/soportevideos/TrainingBlackDuckHub.pdf" target="_blank">Presentaci&oacute;n Black Duck Hub </a>
									<a href="../content/soportevideos/TrainingBlackDuckHub.pdf" class="btn btn-info" style="color:white;">PDF</a> &oacute; <a href="../content/soportevideos/TrainingBlackDuckHub.pptx" class="btn btn-info" style="color:white;">PPT</a>
									
								</li>
								
							</ul>
						</div>
					</li>
		  
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#telecomSubmenu4" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
							QA
						<div class="collapse list-unstyled" id="telecomSubmenu4">
						<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">QA Training</h3>
							<video width="75%" height="450px"  controls>
							  <source src="../files/training/QAofVXMLApp.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>

						
						</div>
					</li>
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#telecomSubmenu5" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
							Test Cases KT
						<div class="collapse list-unstyled" id="telecomSubmenu5">
							<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Test Cases KT <h3>
								<video width="75%" height="450px"  controls>
								  <source src="../files/training/TestCasesKT.mp4" type="video/mp4">
								Your browser does not support the video tag.
								</video>

						
						</div>
					</li>

					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#telecomSubmenu6" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						Breeze Setup
							<div class="collapse list-unstyled" id="telecomSubmenu6">
								<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Introduction to Breeze - Setup<h3>
									<video width="75%" height="450px"  controls>
									  <source src="../files/training/IntroductiontoBreeze-Setup.mp4" type="video/mp4">
									Your browser does not support the video tag.
									</video>

							
							</div>
					</li>
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#telecomSubmenu7" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						UUI explained
							<div class="collapse list-unstyled" id="telecomSubmenu7">
								<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">U<h3>
									
									<ul >
										<li style="text-decoration:none">
											<a  href="../files/training/AvayaSpecsforUUITransport_COMPAS.pdf" target="_blank">Avaya Specs for UUI Transport COMPAS </a>
											<a href="../files/training/AvayaSpecsforUUITransport_COMPAS.pdf" class="btn btn-info" style="color:white;">Ver</a> 
											<a  href="../files/training/UUIExplained v1.docx" target="_blank">UUI Explained v1</a>
											<a href="../files/training/UUIExplained v1.docx" class="btn btn-info" style="color:white;">Ver</a> 
											
										</li>
										
									</ul>

							
							</div>
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
		
        