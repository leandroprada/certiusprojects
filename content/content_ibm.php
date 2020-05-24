<?php

 session_start();
require 'dbconn.inc.php';
 $userlogged = $_SESSION['name'];
$permissions = $_SESSION['permissions'];
	//The code below parses course list and loops through it	
	$permissions = explode(",",$permissions);

foreach ($permissions as $p_id) 
	{
		$querycd1 = "SELECT permission_description FROM permissions WHERE p_id=";
		$querycd2 = '"'.$p_id.'";';	
		$querycd = $querycd1.$querycd2;
		$resultcd = mysqli_query($conn,$querycd);
		$rowcd = mysqli_fetch_row($resultcd);
		$permissionname = $rowcd[0];

	if ($permissionname != NULL) {
		if ($permissionname == "projects"){
		echo '	
			 <h2 class="mb-4">20IB0001 IBM - Watson Project</h2>
        
        <p>In this page you will find all documentation for the IBM Watson pilot project</p>
		
		
		<h3 class="mb-4">Documentation</h3>
		<ul>
			<li> <h3 class="mb-4">Base Documentation</h3>
				<ul>
				<li><a href="https://www.ibm.com/watson/how-to-build-a-chatbot" target="_blank">How to build a chatbot for your business</a></li>
				<li><a href="https://cloud.ibm.com/docs/services/assistant?topic=assistant-getting-started#getting-started" target="_blank">Getting started with Watson Assistant</a></li>
				
				<li><h5>Other documentation</h5>
				<ul>
				<li><a href="">More Information</a></li>
				</ul>
				</li>
				</ul>
			</li>
					
				
			
		</ul>
		
		<h3 class="mb-4">Additional Information</h3>
		<p>Soon more information...</p>
		
		';
		}
		
		}
	}
	  ?>


 