<?php

 session_start();
 $userlogged = $_SESSION['name'];
 
	echo '

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
           

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home &nbsp; <i class="fa fa-home"></i></a>
                </li>
                
				<li class="nav-item">
                    <a class="nav-link" href="../lumenvox.php">Lumenvox</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="../wyndham.php">Waterfield</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../anses_ivr.php">Teleperformance</a>
                </li>
                
              </ul>
            </div>
          </div>
		</nav>
	  ';
	  ?>
		
        
 