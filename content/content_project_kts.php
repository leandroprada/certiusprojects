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
	 <h2 class="mb-4">Project KTs to CAS and customers</h2>
		
		<div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
			<div class="text-left">
				<ul style="list-style:none">
					<li style="text-decoration:none;padding-bottom:10px; "><a  href="https://certiustech.sharepoint.com/:f:/s/KnowledgeDatabase/EiVKoqyiSepMkcaUs7RCHN8BBx-EWBbwS49DONUxkFSrMQ?e=o43gsu"aria-expanded="false" class="btn btn-info btn-sm"  style="color:white;background-color:#825EAB;">Ver </a>
						Please visit the new sharepoint
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
		
        