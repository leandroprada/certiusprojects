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
                <ul>
					<li>
						<a class="btn btn-info" style="color:white;">Tip A01</a><a  href="../content/tips/A01.ppt" target="_blank"> - Arquitectura Voice Portal RevB</a>
					</li>
				
				
				
				
				
				
				
				
				</ul>
				
              </div>
          </div>
        </div>
	</div>
        

	  ';
	  ?>
		
        
 