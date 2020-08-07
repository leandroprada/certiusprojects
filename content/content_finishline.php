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
	
	<img src="../files/waterfield/finishline/finishline_logo.png" style="width:100%">
		
		
	 <h2 class="mb-4">20WT0002 Finish Line Project</h2>
        <p>In this page you will find all documentation for Finish Line</p>
		
		
		<h3 class="mb-4">Documentation</h3>
		<ul>
			<li> <h3 class="mb-4">Sent by Waterfield</h3>
				<ul>
				<li><a href="../files/waterfield/finishline/FinishLineVUI_1.4.docx">Finish Line VUI Customer approved Version 1.4</a></li>
				
				<li><a href="../files/waterfield/finishline/IVRCustomPhraseListv1.2.xlsx">IVR Custom Phrase List Version 1.2</a></li>
				<li><a href="../files/waterfield/finishline/specialrecordings.xlsx">Special Recordings</a></li>
				<li><a href="../files/waterfield/finishline/FLIVA_MainStart.pdf">Main Start Call Flow</a></li>
				<li><a href="../files/waterfield/finishline/FLIVA_GiftCard.pdf">Gift Card Call Flow</a></li>
				<li><a href="../files/waterfield/finishline/FLIVA_Loyalty.pdf">Loyalty Call Flow</a></li>
				<li><a href="../files/waterfield/finishline/FLIVA_OrderStatus.pdf">Order Status Call Flow</a></li>
				
			
				<li><h5>Superseded</h5>
				<ul>
				<li><a href="../files/waterfield/finishline/old/FinishLineVUIv1.0.docx">Finish Line VUI Initial draft</a></li>
				<li><a href="../files/waterfield/finishline/old/FinishLineVUIv1.1.docx">Finish Line VUI Customer approved Version 1.1</a></li>
				
				<li><a href="../files/waterfield/finishline/old/IVRCustomPhraseList.xlsx">IVR Custom Phrase List</a></li>
				</ul>
				</li>
				</ul>
			</li>
				
			<li><h3 class="mb-4">Certius</h3>
				<ul> 
				<li><a href="../files/waterfield/finishline/FinishLineVUIv1.4.1_SPA.docx">Finish Line VUI Spanish Version 1.4.1</a></li>
				<li><a href="../files/waterfield/finishline/IVRCustomPhraseListv1.2.1.xlsx">Finish Line IVR Custom PhraseList Spanish Version 1.2.1</a></li>
				<li><a href="../files/waterfield/finishline/specialrecordings_SPA.xlsx">Special Recordings Spanish Version</a></li>
				
				
				<li><a href="../files/waterfield/finishline/20WT0002-PLAN-SC-0001_1.1.doc">Initial Schedule - 20WT0002-PLAN-SC-0001_1.1.doc</a></li>
				<li><a href="../files/waterfield/finishline/20WT0002-TEAM-TM-0001_1.1.doc">Project Team - 20WT0002-TEAM-TM-0001_1.1.doc</a></li>
				<li><a href="../files/waterfield/finishline/ServicesForFinishLineprojectRevA.pdf">Certius Quotation Rev A</a></li>
				
				<li><h5>Superseded</h5>
				<ul>
				<li><a href="../files/waterfield/finishline/old/20WT0002-TEAM-TM-0001_1.0.doc">Project Team - 20WT0002-TEAM-TM-0001_1.0.doc</a></li>
				<li><a href="../files/waterfield/finishline/old/20WT0002-PLAN-SC-0001_1.0.doc">Initial Schedule - 20WT0002-PLAN-SC-0001_1.0.doc</a></li>
				<li><a href="../files/waterfield/finishline/old/FinishLineVUI_SPAv1.1.1.docx">Finish Line VUI Spanish Version 1.1.1</a></li>
				<li><a href="../files/waterfield/finishline/old/IVRCustomPhraseList_SPA.xlsx">Finish Line IVR Custom PhraseList Spanish</a></li>
				
				
				</ul>
				
				</li>
				
				</ul>
				
			</li>
				
				
			
		</ul>
		
		<h4>Customer Environment</h4>
			<p>TO BE COMPLETED</p>
			
		<!--Please uncomment the lines before when the email is uploaded -->
		<h3 class="mb-4">Submittal Email</h3>
		<p>You can 
		<a href="../files/waterfield/finishline/20WT0002-Waterfield-FinishLine-DeliveryofTranslatedVUI.eml" target="_blank"> view </a>  or  <a href="../files/waterfield/finishline/20WT0002-Waterfield-FinishLine-DeliveryofTranslatedVUI.eml" target="_blank"> download </a>  the first email with submission of documents</p>
		<p>You can 
		<a href="../files/waterfield/finishline/20WT0002-Waterfield-FinishLine-DeliveryofTranslatedVUI-2.eml" target="_blank"> view </a>  or  <a href="../files/waterfield/finishline/20WT0002-Waterfield-FinishLine-DeliveryofTranslatedVUI-2.eml" target="_blank"> download </a>  the first email with submission of documents</p>
		<h3 class="mb-4">Scope of work</h3>


 
<h3>Scope</h3>
<object width="600px" height="450px" data="../files/waterfield/finishline/ServicesForFinishLineprojectRevA.pdf"></object>

	  ';
	  }
		
		}
	}
	  ?>
		
        
 