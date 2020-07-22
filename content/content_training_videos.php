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
	 <h2 class="mb-4">Training Videos and other material</h2>
     
	<div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
			<div class="text-left">
				<ul style="list-style:none">
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#trainingVidSubmenu1" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						 Tomcat training
						<div class="collapse list-unstyled" id="trainingVidSubmenu1">
							<video width="75%" height="450px"  controls>
							  <source src="../files/training/tomcatTraining.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						
							<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Tomcat training - otros materiales de soporte</h3>
							<ul>
								<li style="text-decoration:none">
									<a  href="../files/training/TomcatConfiguration.pptx" target="_blank">Presentaci&oacute;n Tomcat Configuration </a><a href="../files/training/TomcatConfiguration.pptx" class="btn btn-info" style="color:white;">Ver</a>
								</li>
								<li style="text-decoration:none">
									<a  href="../files/training/TomcatConfig.zip" target="_blank">Otra informaci&oacute;n &Uacute;til - Tomcat Configuration </a><a href="../files/training/TomcatConfig.zip" class="btn btn-info" style="color:white;">Ver</a>
								</li>
							</ul>
						</div>
					</li>
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#trainingVidSubmenu2" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
							Avaya CPaaS API webinar
						<div class="collapse list-unstyled" id="trainingVidSubmenu2">
							<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Avaya CPaaS API webinar</h3>
							<video width="75%" height="450px"  controls>
							  <source src="../files/cpaas/AVAYA_Webinar_APIs_CPaaS_FernandezLopez_210520.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						</div>
					</li>
			
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#trainingVidSubmenu3" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
							Black Duck Hub Fundamentals
						<div class="collapse list-unstyled" id="trainingVidSubmenu3">
							<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Black Duck Hub Fundamentals</h3>
							<video width="75%" height="450px"  controls>
							  <source src="../files/training/blackDuckHub06012020.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
							
							<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Black Duck Hub - otro material de soporte </h3>
							<ul>
								<li style="text-decoration:none">
									<a  href="../files/training/TrainingBlackDuckHub.pdf" target="_blank">Presentaci&oacute;n Black Duck Hub </a>
									<a href="../files/training/TrainingBlackDuckHub.pdf" class="btn btn-info" style="color:white;">PDF</a> &oacute; <a href="../files/training/TrainingBlackDuckHub.pptx" class="btn btn-info" style="color:white;">PPT</a>
									
								</li>
								
							</ul>
						</div>
					</li>
					
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#trainingVidSubmenu4" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
							QA
						<div class="collapse list-unstyled" id="trainingVidSubmenu4">
						<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">QA Training</h3>
							<video width="75%" height="450px"  controls>
							  <source src="../files/training/QAofVXMLApp.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>

						
						</div>
					</li>
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#trainingVidSubmenu5" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
							Test Cases KT
						<div class="collapse list-unstyled" id="trainingVidSubmenu5">
							<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Test Cases KT <h3>
								<video width="75%" height="450px"  controls>
								  <source src="../files/training/TestCasesKT.mp4" type="video/mp4">
								Your browser does not support the video tag.
								</video>

						
						</div>
					</li>

					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#trainingVidSubmenu6" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						Breeze Setup
							<div class="collapse list-unstyled" id="trainingVidSubmenu6">
								<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Introduction to Breeze - Setup<h3>
									<video width="75%" height="450px"  controls>
									  <source src="../files/training/IntroductiontoBreeze-Setup.mp4" type="video/mp4">
									Your browser does not support the video tag.
									</video>

							
							</div>
					</li>
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#trainingVidSubmenu7" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						UUI explained
							<div class="collapse list-unstyled" id="trainingVidSubmenu7">
								<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">UUI Explained</h3>
									
									<ul>
										<li style="text-decoration:none">
											<a  href="../files/training/AvayaSpecsforUUITransport_COMPAS.pdf" target="_blank">Avaya Specs for UUI Transport COMPAS </a>
											<a href="../files/training/AvayaSpecsforUUITransport_COMPAS.pdf" class="btn btn-info" style="color:white;">Ver</a> 
										</li>
										
										<li style="text-decoration:none">
											<a  href="../files/training/UUIExplainedv1.docx" target="_blank">UUI Explained v1</a>
											<a href="../files/training/UUIExplainedv1.docx" class="btn btn-info" style="color:white;">Ver</a> 
										</li>
									</ul>

							
							</div>
					</li>
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#trainingVidSubmenu8" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
							Reporting in AAEP Avaya Aura Experience Portal
						<div class="collapse list-unstyled" id="trainingVidSubmenu8">
							<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">AAEP Reportes </h3>
							<video width="75%" height="450px"  controls>
							  <source src="../files/training/reportesAAEP.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						</div>
					</li>
							
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#trainingVidSubmenu9" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						CCXML
							<div class="collapse list-unstyled" id="trainingVidSubmenu9">
								<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">CCXML Explained</h3>
									
									<ul>
										<li style="text-decoration:none">
											<a  href="../files/training/CCXML.zip" target="_blank">CCXML incluye ejercicios </a>
											<a href="../files/training/CCXML.zip" class="btn btn-info" style="color:white;">Ver</a> 
										</li>
										
									</ul>

							
							</div>
					</li>
		  
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#trainingVidSubmenu10" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						HTTPS - SSL
							<div class="collapse list-unstyled" id="trainingVidSubmenu10">
								<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">HTTPS y SSL</h3>
								
									<video width="75%" height="450px"  controls>
									  <source src="../files/training/httpsTraining.mp4" type="video/mp4">
									Your browser does not support the video tag.
									</video>
									
									<ul>
										<li style="text-decoration:none">
										Un <a  href="http://www.moserware.com/2009/06/first-few-milliseconds-of-https.html" target="_blank">website </a>que explica todo el proceso de conexión con mucho detalle.
										Presentaci&oacute;n Https y SSL <a href="../files/training/sSLandHTTPS.pdf" class="btn btn-info" style="color:white;">PDF</a> &oacute; <a href="../files/training/sSLandHTTPS.pptx" class="btn btn-info" style="color:white;">PPT</a>
										</li>
										
									</ul>

							
							</div>
					</li>

					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#trainingVidSubmenu11" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						Interacting with Context Store - Oceana
							<div class="collapse list-unstyled" id="trainingVidSubmenu11">
								<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Context Store y Oceana</h3>
								
									<video width="75%" height="450px"  controls>
									  <source src="../files/training/notFound.mp4" type="video/mp4">
									Your browser does not support the video tag.
									</video>
									
									<ul>
										<li style="text-decoration:none">
										Presentaci&oacute;n Send Information to Context Store through Oceana <a href="../files/training/SendInformationtoContextStorethroughOceana.pdf" class="btn btn-info" style="color:white;">PDF</a> &oacute; <a href="../files/training/SendInformationtoContextStorethroughOceana.pptx" class="btn btn-info" style="color:white;">PPT</a>
										</li>
										
									</ul>

							
							</div>
					</li>
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#trainingVidSubmenu12" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						How to set the timezone appropriately in Java
							<div class="collapse list-unstyled" id="trainingVidSubmenu12">
								<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Timezones</h3>
								
									<video width="75%" height="450px"  controls>
									  <source src="../files/training/timezonesInJava.mp4" type="video/mp4">
									Your browser does not support the video tag.
									</video>
							</div>
					</li>
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#trainingVidSubmenu13" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						Auditor&iacute;as de Avaya
							<div class="collapse list-unstyled" id="trainingVidSubmenu13">
								<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Auditor&iacute;as</h3>
								
									<video width="75%" height="450px"  controls>
									  <source src="../files/training/auditoria.mp4" type="video/mp4">
									Your browser does not support the video tag.
									</video>
							</div>
					</li>
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#trainingVidSubmenu14" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						Avaya Tools: Forge, Confluence, Jira, Sonar, Coverity, etc.
							<div class="collapse list-unstyled" id="trainingVidSubmenu14">
								<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Avaya Tools</h3>
								
									<video width="75%" height="450px"  controls>
									  <source src="../files/training/Sonar-Coverity-etc.mp4" type="video/mp4">
									Your browser does not support the video tag.
									</video>
							</div>
					</li>
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#trainingVidSubmenu15" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						Security Assessment parte 1
							<div class="collapse list-unstyled" id="trainingVidSubmenu15">
								<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Security Assessment P.1</h3>
								
									<video width="75%" height="450px"  controls>
									  <source src="../files/training/securityAssesmentPart1.mp4" type="video/mp4">
									Your browser does not support the video tag.
									</video>
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
		
        