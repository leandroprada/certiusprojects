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
		if ($permissionname == "training"){
		echo '	
	<h2 class="mb-4">Lumenvox Resources</h2>
        <p>In this page you will find all documentation for Lumenvox</p>
		<h3>PDFs</h3>
		<h4>LumenVox Automated Speech Recognizer (ASR)</h4>
		<object width="600px" height="450px" data="../files/lumenvox/OneSheet-ASR.pdf"></object>
		<h4>LumenVox Speech Tuner</h4>
		<object width="600px" height="450px" data="../files/lumenvox/Onesheet-Tuner.pdf"></object>
		<h4>All About Grammars</h4>
		<object width="600px" height="450px" data="../files/lumenvox/Grammars.pdf"></object>
		<h4>Tuning Strategies For speech Recognition</h4>
		<object width="600px" height="450px" data="../files/lumenvox/Tuning-Strategies-for-Speech-Recognition.pdf"></object>
		<h4>Collecting Data for Speech Tuning</h4>
		<object width="600px" height="450px" data="../files/lumenvox/Collecting-Data-for-Speech-Tuning.pdf"></object>
		<h4>Flexible Licensing – Context, Backups and other use information</h4>
		<object width="600px" height="450px" data="../files/lumenvox/FlexibleLicensing.pdf"></object>
		<h4>F.A.Q. – Frequently Asked Questions About Flexible Licensing</h4>
		<object width="600px" height="450px" data="../files/lumenvox/FAQFlexibleLicensing.pdf"></object>
		<h4>Technical Support Guide VERSION 6.02</h4>
		<object width="600px" height="450px" data="../files/lumenvox/LumenVox Technical Support Guide V 6.02.pdf"></object>
		
		
		<h3>Videos</h3>
		<h4>Speech Tuner Training</h4>
		<object width="600px" height="450px" data="../files/lumenvox/LumenVox_Tuner_Training.mp4"></object>
		<h4>Partner Skill Certification - Day 1</h4>
		<object width="600px" height="450px" data="../files/lumenvox/GMT20191210-160125_LumenVox-P_1600x900.mp4"></object>
		<h4>Partner Skill Certification - Day 2</h4>
		<object width="600px" height="450px" data="../files/lumenvox/GMT20191211-155053_LumenVox-P_1920x1080.mp4"></object>
		
	  
	  ';
	  }
		
		}
	}
	  ?>
		
        
 