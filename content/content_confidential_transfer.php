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
		if ($permissionname == "transfer"){
		echo '	
	 <h2 class="mb-4">Transfer Page</h2>
	 
	 <h3>Below you will find your files, if they do not show up, contact leandro.prada@certiustech.com</h3>
	 <!-- <a  href="#" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;"> Download AAA RTM bundle</a> 
	 <a  href="../files/transfer/meetme-Bundle-08-21-20.zip" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;"> Download Prudential RTM bundle Meet Me</a>
	 <a  href="../files/transfer/sharedServices-Bundle-08-21-20.zip" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;"> Download Prudential RTM bundle Shared Services</a>-->
	  
	 
		';
	  }
	  
	  	  ELSE if ($permissionname == "transferCVS"){
		echo '	
	 <h2 class="mb-4">Transfer Page</h2>
	 
	 <!--<a  href="../files/transfer/cvs.zip" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;"> Download CVS Health POM bundle</a>-->
	 
	 
	 
		';
	  }

	  
		
		}
	}
	  ?>
		
        