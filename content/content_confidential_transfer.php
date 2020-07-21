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
		if ($permissionname == "sales"){
		echo '	
	 <h2 class="mb-4">Transfer Page</h2>
	 
	 <a  href="../files/zappix/VisualIVRZappixFactSheet2019.pdf" target="_blank">Visual IVR Fact Sheet </a>
	 
	 
		';
	  }
		
		}
	}
	  ?>
		
        