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
	 <h2 class="mb-4">Training - Telecom Basics</h2>
     
	<div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="text-left">
                <h4 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Training Telecom Reference Material</h4>
				<ul style="list-style:none">
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#telecomSubmenu1" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm" href="../content/telephony/ACD_Basics.pdf" style="color:white;background-color:#825EAB;">Ver </a>
					<a  class="btn btn-danger btn-sm " href="../content/telephony/ACD_Basics.pdf" target="_blank" style="color:white;background-color:#C26861">Abrir </a>
					 Automatic Call Distribution (ACD) Basics </li>
						<div class="collapse list-unstyled" id="telecomSubmenu1">
						<h3>
							<a href="./training_telecom.php">Automatic Call Distribution (ACD) Basics </a>
						</h3>
						<object width="75%" height="450px" data="../content/telephony/ACD_Basics.pdf"></object>
						</div>
				</ul>
									
					
              </div>
          </div>
        </div>
	</div>
        

	 
		';
	  }
		
		}
	}
	  ?>
		
        