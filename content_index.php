<?php

 session_start();
 $userlogged = $_SESSION['name'];
 
	echo '

<!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <!--<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>-->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./lumenvox.php" target="_blank">Lumenvox</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./wyndham.php">Waterfield</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./anses_ivr.php">Teleperformance</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
		
		<h2 class="mb-4">Certius Projects</h2>
        <p>In this page you will find all non-Avaya project documentation</p>	
	  
	  ';
	  ?>
		
        
      </div>