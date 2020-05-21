<?php

 session_start();
 $userlogged = $_SESSION['name'];
 
	echo '
	 <h2 class="mb-4">Training Material</h2>
     
	<div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="text-center">
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Training Tips</h2>
				
				<div style="text-decoration:none">
						A01 - Arquitectura Voice Portal RevB <a href="../content/tips/A01.ppt" class="btn btn-info" style="color:white;">Ver</a>
				</div>
				<div style="text-decoration:none">
						A02 - Instalacion Eclipse-Tomat RevD <a href="../content/tips/A02.ppt" class="btn btn-info" style="color:white;">Ver</a>
				</div>
				
				
									
					
              </div>
          </div>
        </div>
	</div>
        

	  ';
	  ?>
		
        
 