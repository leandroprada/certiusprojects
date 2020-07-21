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
	 <h2 class="mb-4">Sales Main Page</h2>
	 
	 
	 <h3 class="mb-4" id="zappix">Zappix</h3>
	 
	 <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
			<div class="text-left">
				<ul style="list-style:none"> 
				
				
				
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#salesSubmenu1" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">See </a>
							The Power of Visual IVR
						<div class="collapse list-unstyled" id="salesSubmenu1">
							<video width="75%" height="450px"  controls>
							  <source src="../../files/zappix/ThePowerofVisualIVR.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						
							
						</div>
					</li>
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#salesSubmenu2" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">See </a>
							Certius - Zappix presentation meeting
						<div class="collapse list-unstyled" id="salesSubmenu2">
							<video width="75%" height="450px"  controls>
							  <source src="../../files/zappix/discoveryMeeting.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						
							<h3 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Visual IVR Brochure</h3>
							<ul>
								<li style="text-decoration:none">
									<a  href="../files/zappix/VisualIVRZappixFactSheet2019.pdf" target="_blank">Visual IVR Fact Sheet </a><a href="../files/zappix/VisualIVRZappixFactSheet2019.pdf" class="btn btn-info" style="color:white;">See</a>
								</li>
								
							</ul>
						</div>
					</li>


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
		
        