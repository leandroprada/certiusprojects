<?php

 session_start();
 $userlogged = $_SESSION['name'];
 
	echo '
	<img src="../files/teleperformance/tp_logo.jpg">
	
	 <h2 class="mb-4">18TP0001 - Teleperformance Anses IVR</h2>
        <p>In this page you will find all documentation Teleperformance Anses IVR</p>
	
    <h3 class="mb-4">Documentation</h3>
		<ul>
		<li>Project Notes: - <a href="="../files/teleperformance/">Project Notes</a></li>
		<li>Customer acceptance: - <a href="="../files/teleperformance/project_acceptance.msg">Acceptance Email</a></li>
		
		</ul>

	  ';
	  ?>
		
        
 