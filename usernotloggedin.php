<?php


echo '	<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
		
	        <div class="footer" >
	        	<p style="color:#024f05;"><!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0 --></p>
	        </div>
	      </div>
    	</nav>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
					 <a class = "btn btn-primary" href="./login/login.php" >Login</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
		<h2>This is a restricted area - Only Authorized Accounts</h2>
        <p class="mb-4">Please login
        <a class="btn btn-dark" href="./login/login.php" > Here </a></p>
		
      </div>'
	  
			?>