<?php

 session_start();
 $userlogged = $_SESSION['name'];
 
	echo '
	 <h2 class="mb-4">Training Videos</h2>
     
	<div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="video-promo-content text-center">
                <iframe width="75%"	 height="450px" src="https://youtu.be/5GhmKXS0aYo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
                <h2 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Presentaci&oacute;n</h2>
                <p class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Son s&oacute;lo dos minutos</p>
              </div>
          </div>
        </div>
	</div>
        

	  ';
	  ?>
		
        
 