<?php
	echo '<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
				
						
	        <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Internal Projects</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="./lumenvox.html" target="_blank">Lumenvox</a>
                </li>
				<li>
                    <a href="https://sites.google.com/view/certiusprojects/home/internalprojects/2018-1-crm" target="_blank">2018-1 CRM</a>
                </li>
                <li>
                    <a href="https://sites.google.com/view/certiusprojects/home/internalprojects/2018-2-webhost" target="_blank">2018-2 Web Hosting</a>
                </li>
                <li>
                    <a href="https://sites.google.com/view/certiusprojects/home/internalprojects/2018-3-blog" target="_blank">2018-3 Confluence Alternatives</a>
                </li>
				 <li>
                    <a href="https://sites.google.com/view/certiusprojects/home/internalprojects/2018-4-email" target="_blank">2018-4 Email Service</a>
                </li>
	            </ul>
	          </li>
			   <li>
	            <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Waterfield Projects</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu2">
                <li>
                    <a href="./wyndham.html">20WT0001 - Wyndham Hotels</a>
                </li>
                <li>
                    <a href="#">Internal Project 2</a>
                </li>
                <li>
                    <a href="#">Internal Project 3</a>
                </li>
				 <li>
                    <a href="#">Internal Project 4</a>
                </li>
	            </ul>
	          </li>
	         
			 <li>
              <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Teleperformance Projects</a>
              <ul class="collapse list-unstyled" id="homeSubmenu3">
                <li>
                    <a href="./anses_ivr.html">18TP0001 - Teleperformance Anses IVR</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>	
                    <a href="#">Page 3</a>
                </li>
              </ul>
	          </li>
	          
	        </ul>

	        <div class="footer" >
	        	<p>' . $userlogged . ', you are logged in &nbsp;<a href="./login/logout.php" class = "btn btn-warning btn-sm" >Log Out</a></p>
				<p style="color:#024f05;"><!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>
		
		<div id="content" class="p-4 p-md-5">

   

        <h2 class="mb-4">Certius Projects</h2>
        <p>In this page you will find all non-Avaya project documentation</p>
        
		</div>'
		
		;
	  ?>