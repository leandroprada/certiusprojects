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
		<div class="col-xs-12 col-lg-6"><img src="../files/teleperformance/tp_logo.jpg"> </div>
		
		
	 <h2 class="mb-4">20WT0002 Finish Line Project</h2>
        <p>In this page you will find all documentation for Finish Line</p>
		
		
		<h3 class="mb-4">Documentation</h3>
		<ul>
			<li> <h3 class="mb-4">Sent by Waterfield</h3>
				<ul>
				<li><a href="../files/waterfield/finishline/finishlinecallflow4.17.20.pdf">TO BE COMPLETED</a></li>
				
			
				<li><h5>Superseded</h5>
				<ul>
				<li><a href="../files/waterfield/finishline/old/WVO.vsd">TO BE COMPLETED</a></li>
				</ul>
				</li>
				</ul>
			</li>
				
			<li><h3 class="mb-4">Certius</h3>
				<ul> 
				<li><a href="../files/waterfield/finishline/ServicesForFinishLineprojectRevA.pdf">Certius Quotation Rev A</a></li>
				<li><a href="../files/waterfield/finishline/20WT0002-PLAN-SC-0001_1.0.doc">Initial Schedule - 20WT0002-PLAN-SC-0001_1.0.doc</a></li>
				<li><a href="../files/waterfield/finishline/20WT0002-TEAM-TM-0001_1.0.doc">Project Team - 20WT0002-TEAM-TM-0001_1.0.doc</a></li>
				
				<li><h5>Superseded</h5>
				<ul>
				<li><a href="../files/waterfield/finishline/old/20WT0001-PL-0001_01.xlsx">TO BE COMPLETED</a></li>

				
				</ul>
				
				</li>
				
				</ul>
				
			</li>
				
				
			
		</ul>
		
		<h4>Customer Environment</h4>
			<p>TO BE COMPLETED</p>
			
		<!--Please uncomment the lines before when the email is uploaded -->
		<h3 class="mb-4">Submittal Email</h3>
		<p>You can <!-- <a href="../files/waterfield/finishline/20WT0001 - Waterfield - finishline - Spanish and Portuguese Delivery.htm" target="_blank"> -->view<!-- </a> --> or<!--  <a href="../files/waterfield/finishline/20WT0001-Waterfield-finishline-SpanishandPortugueseDelivery.eml" target="_blank"> -->download<!-- </a> --> the email with submission of documents</p>
		<h3 class="mb-4">Scope of work</h3>





 
<h3>Scope</h3>
<object width="600px" height="450px" data="../files/waterfield/finishline/ServicesForFinishLineprojectRevA.pdf"></object>

	  ';
	  }
		
		}
	}
	  ?>
		
        
 