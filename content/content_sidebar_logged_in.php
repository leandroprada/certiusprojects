<?php

 session_start();
require 'dbconn.inc.php';
$name = $_SESSION['name'];
$permissions = $_SESSION['permissions'];
 

	//The code below parses course list and loops through it	
	$permissions = explode(",",$permissions);
?>

<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="./index.php" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
				
						
	        <ul class="list-unstyled components mb-5">
	          <li>
	            <a href="./index.php" aria-expanded="false" >Home &nbsp; <i class="fa fa-home"></i></a>
	          </li>
		
<?php
	foreach ($permissions as $p_id) 
	{
		$querycd1 = "SELECT permission_description FROM permissions WHERE p_id=";
		$querycd2 = '"'.$p_id.'";';	
		$querycd = $querycd1.$querycd2;
		$resultcd = mysqli_query($conn,$querycd);
		$rowcd = mysqli_fetch_row($resultcd);
		$permissionname = $rowcd[0];
			
			/*este switch funciona!
			
				switch ($permissionname) {
				  case "projects":
					echo "Your favorite color is red!";
					break;
				  case "training":
					echo "Your favorite color is blue!";
					break;
				  default:
					echo "Your favorite color is neither red, blue, nor green!";
				}
			*/
	
// En el contenido de esta seccion es dinamico de acuerdo al grupo al que pertenece cada usuario
	
		

	if ($permissionname != NULL) {
			if ($permissionname == "projects"){
			echo '			
        	  <li>
	            <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Waterfield Projects</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu2">
                <li>
                    <a href="./wyndham.php">20WT0001 - Wyndham Hotels</a>
                    <a href="./finishline.php">20WT0002 - Finish Line</a>
                </li>               
	            </ul>
	          </li>
	         
			 <li>
              <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Teleperformance Projects</a>
              <ul class="collapse list-unstyled" id="homeSubmenu3">
                <li>
                    <a href="./anses_ivr.php">18TP0001 - Teleperformance Anses IVR</a>
                </li>
              </ul>
	         </li>
			 
			 <li>
              <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">IBM Projects</a>
              <ul class="collapse list-unstyled" id="homeSubmenu4">
                <li>
                    <a href="./ibm.php">20IB0001 - Watson Prototype</a>
                </li>
              </ul>
	         </li>
	         
			<li>
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Internal Projects</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="./lumenvox.php">Lumenvox</a>
                </li>
				<li>
                    <a href="https://sites.google.com/view/certiusprojects/home/internalprojects/2018-1-crm" target="_blank">2018-1 CRM</a>
                </li>
                <li>
                    <a href="https://sites.google.com/view/certiusprojects/home/internalprojects/2018-2-webhost" target="_blank">2018-2 Web Hosting</a>
                </li>
                <li>
                    <a href="https://sites.google.com/view/certiusprojects/home/internalprojects/2018-3-blog" target="_blank">2018-3 Confluence Alternatives</a>
                </li>
				 <li>
                    <a href="https://sites.google.com/view/certiusprojects/home/internalprojects/2018-4-email" target="_blank">2018-4 Email Service</a>
                </li>
	            </ul>
	          </li> 
			'; 
			}
			
			 if ($permissionname == "training"){
			echo '
			<li>
              <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Training Material</a>
              <ul class="collapse list-unstyled" id="homeSubmenu5">
                <li>
                    <a href="./training_telecom.php#zappix">Telecom Basics</a>
                </li>
				<li>
                    <a href="./training_videos.php">Videos and more</a>
                </li>
				<li>
                    <a href="./training_tips.php">Tips</a>
                </li>
              </ul>
	         </li>
			
			';
			}
			
			if ($permissionname == "transfer"){
			echo '
			<li>
              <a href="./confidential_transfer.php">Transfer Page</a>
              
	         </li>
			
			';
			}
			
			if ($permissionname == "sales"){
			echo '
			<li>
              <a href="#homeSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Sales Material</a>
              <ul class="collapse list-unstyled" id="homeSubmenu6">
                <li>
                    <a href="./confidential_sales.php">Zappix</a>
                </li>
				
              </ul>
	         </li>
			
			';
			}
			else if ($permissionname == "confidential"){
			echo '
			<li>
              <a href="#homeSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Confidential</a>
              <ul class="collapse list-unstyled" id="homeSubmenu7">
                <li>
                    <a href="./confidential_tollfree.php">Toll Free Forwarding</a>
                </li>
				
				
              </ul>
	         </li>
			
			';
			}
			 
			}	

}
			 ?>
			   
	        </ul>

	        <div class="footer" >
	        	<p><?php echo $name;?>, you are logged in &nbsp;<a href="./login/logout.php" class = "btn btn-warning btn-sm" >Log Out</a></p>
				<p style="color:#024f05;"><!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>
			
		
		