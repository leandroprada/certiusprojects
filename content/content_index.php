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
		<h2 class="mb-4">Certius Projects</h2>
		<p>This information moved to Sharepoint</p>	
		';
		}
		if ($permissionname == "transfer"){
		echo '	
		<h2 class="mb-4">Certius Transfers</h2>
		<p>In this page you will find Certius transfer files</p>	
		';
		}
		
		else if ($permissionname == "training"){
		echo '		
		<h2 class="mb-4">Certius Training Material</h2>
		<p>This information moved to Sharepoint</p>
		';
		}
		}
	}
	  ?>
		
        
 