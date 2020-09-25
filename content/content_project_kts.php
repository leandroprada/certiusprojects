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
	 <h2 class="mb-4">Project KTs</h2>
     
	<div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
			<div class="text-left">
				<ul style="list-style:none">
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#projectktsVidSubmenu1" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						 Datamark - KT to CAS (Jun 2020)
						<div class="collapse list-unstyled" id="projectktsVidSubmenu1">
							<video width="75%" height="450px"  controls>
							  <source src="../files/kts/datamarkKTaCAS.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						</div>
					</li>
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#projectktsVidSubmenu1-2" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						 Datamark - KT Interno parte 1 (Sep 2020)
						<div class="collapse list-unstyled" id="projectktsVidSubmenu1-2">
							<video width="75%" height="450px"  controls>
							  <source src="../files/kts/datamarkKTinternoSoporte.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						</div>
					</li>
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#projectktsVidSubmenu1-3" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						 Datamark - KT Interno parte 2 (Codigo fuente) (Sep 2020)
						<div class="collapse list-unstyled" id="projectktsVidSubmenu1-3">
							<video width="75%" height="450px"  controls>
							  <source src="../files/kts/datamarkKTinternoCodigoFuente.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						</div>
					</li>
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#projectktsVidSubmenu2" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						 ACP - Advantage Care Physicians - KT to CAS (Aug 2020)
						<div class="collapse list-unstyled" id="projectktsVidSubmenu2">
							<video width="75%" height="450px"  controls>
							  <source src="../files/kts/ACP_Physicians_KT_ToCAS.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						</div>
					</li>
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#projectktsVidSubmenu2-2" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						 ACP - Advantage Care Physicians - KT to Customer (Sep 2020)
						<div class="collapse list-unstyled" id="projectktsVidSubmenu2-2">
							<video width="75%" height="450px"  controls>
							  <source src="../files/kts/ACP_KTalCliente0925-overview.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						</div>
					</li>
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#projectktsVidSubmenu3" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						 Parallon Inbound Payment IVR Internal KT (Sep 2020)
						<div class="collapse list-unstyled" id="projectktsVidSubmenu3">
							<video width="75%" height="450px"  controls>
							  <source src="../files/kts/parallonKT-inboundPayment.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						</div>
					</li>
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#projectktsVidSubmenu4" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						 Parallon Inbound - Payment Options -  Internal KT (Sep 2020)
						<div class="collapse list-unstyled" id="projectktsVidSubmenu4">
							<video width="75%" height="450px"  controls>
							  <source src="../files/kts/parallonKT-PaymentOptions.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						</div>
					</li>
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#projectktsVidSubmenu5" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						 Parallon Inbound - Enclave IVR -  Internal KT (Sep 2020)
						<div class="collapse list-unstyled" id="projectktsVidSubmenu5">
							<video width="75%" height="450px"  controls>
							  <source src="../files/kts/parallonKT-Enclave.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						</div>
					</li>
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#projectktsVidSubmenu6" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						 Parallon Inbound - TDS -  Internal KT (Sep 2020)
						<div class="collapse list-unstyled" id="projectktsVidSubmenu6">
							<video width="75%" height="450px"  controls>
							  <source src="../files/kts/parallonKTWebServicesTDS.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
						</div>
					</li>
					
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#projectktsVidSubmenu7" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						 Parallon Inbound - Transfer VDNs and Office Open/closed -  Internal KT (Sep 2020)
						<div class="collapse list-unstyled" id="projectktsVidSubmenu7">
							<video width="75%" height="450px"  controls>
							  <source src="../files/kts/parallonKT-VDNtransfersOfficeClosedOpen.mp4" type="video/mp4">
							Your browser does not support the video tag.
							</video>
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
		
        