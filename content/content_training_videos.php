<?php

 session_start();
 $userlogged = $_SESSION['name'];
 
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
						<a  href="../content/soportevideos/TomcatConfiguration.pptx" target="_blank">Presentaci&oacute;n Tomcat Configuration</a><a href="../content/soportevideos/TomcatConfiguration.pptx" class="btn btn-info" style="color:white;">Ver</a>
					</li>
					<li style="text-decoration:none">
						<a  href="../content/soportevideos/TomcatConfig.zip" target="_blank">Otra informaci&oacute;n &Uacute;til - Tomcat Configuration</a><a href="../content/soportevideos/TomcatConfig.zip" class="btn btn-info" style="color:white;">Ver</a>
					</li>
				
				
				
				
				
				
				
				
				</ul>
              </div>
          </div>
        </div>
	</div>
        

	  ';
	  ?>
		
        
 