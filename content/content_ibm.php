<?php

 session_start();
 $userlogged = $_SESSION['name'];
 
	echo '
	 <h2 class="mb-4">20WT0001 Wyndham Project</h2>
        
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
	  ?>
		
        
 