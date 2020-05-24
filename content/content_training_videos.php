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
				<iframe width="75%" height="450px" src="../files/training/tomcatTraining.mp4" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
          </div>
        </div>
	</div>
        

		';
	  }
		
		}
	}
	  ?>
		
        