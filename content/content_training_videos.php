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
              </div>
          </div>
        </div>
	</div>
        

	  ';
	  ?>
		
        
 