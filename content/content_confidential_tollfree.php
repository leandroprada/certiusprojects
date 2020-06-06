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
		if ($permissionname == "confidential"){
		echo '	
	 <h2 class="mb-4">Toll Free Forwarding - IVR en EE.UU.</h2>
     
	<div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="text-left">
                <h4 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Toll Free Forwarding</h4>
				<ul style="list-style:none">
				<a  class="btn btn-danger btn-sm " href="../../files/tollFree/tollfreenewaudios.rar" target="_blank" style="color:white;background-color:#C26861">Abrir </a>
					 Recordings for the IVR
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="#tollFreeSubmenu1" data-toggle="collapse" aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver Info </a>
					
						<div class="collapse list-unstyled" id="tollFreeSubmenu1">
						<h3>
							1-888-881-4094
						</h3>
						<p>
						Para acceder a la configuración (el seteo del IVR/ o qué acción ejecutar cuando se atiende en ese número) es en
						<a href="https://tollfreeforwarding.com/secure/customer/callcontrol/phonenumbers.cfm" target="_blank"> Toll Free Forwarding </a>
						Usuario: leandro.prada@certiustech.com
						Contraseña 8636
						</p>
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
		
        