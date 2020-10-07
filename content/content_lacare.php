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
		
		<img src="../files/waterfield/lacare/L.A._Care_Health_Plan_official_logo.png" style="height:150px">
		
	 <h2 class="mb-4">20WT0003 L.A Care Project</h2>
        
        <p>In this page you will find all documentation for L.A. Care Payment app.</p></br>
		
		
		
		<h3 class="mb-4">Documentation</h3>
		<ul>
			<li> <h3 class="mb-4">Sent by Waterfield</h3>
				<ul>
					<li><a href="../files/waterfield/lacare/2.1_LACare_BillPay9.18.pdf">Call Flow 2.1 Version 9.18</a></li>
					<li><a href="../files/waterfield/lacare/LACare_BIlling_PhraseList9.20.xlsx">LACare_BIlling_PhraseList 9.20.xlsx</a></li>
					<li><a href="../files/waterfield/lacare/LACare_VUI9.20.docx">LACare_VUI 9.20.docx</a></li>
					<li><a href="../files/waterfield/lacare/LaCareGrammars.zip">English and DTMF Grammars</a></li>
					<li><a href="../files/waterfield/lacare/LACare_TestCaseOverview_DRAFT.xlsx">English Test Cases</a></li>
					<li><a href="../files/waterfield/lacare/LACare_BIlling_PhraseListRevised.xlsx">LACare_BIlling_Phrase List Revised</a></li>
								
			
					<li><h5>Superseded</h5>
					<ul>
						<li><a href="../files/waterfield/lacare/old/2.1_LACare_BillPay.pdf">Call Flow 2.1_LACare_BillPay </a></li>
						<li><a href="../files/waterfield/lacare/old/LACare_BIlling_PhraseList(1).xlsx">LACare_BIlling_PhraseList(1).xlsx</a></li>
						<li><a href="../files/waterfield/lacare/old/LACare_BIlling_PhraseList.xlsx">LACare_BIlling_PhraseList.xlsx</a></li>
						<li><a href="../files/waterfield/lacare/old/LACare_VUI_Draft(1).docx">LACare_VUI_Draft(1).docx</a></li>
						<li><a href="../files/waterfield/lacare/old/LACare_VUI_Draft.docx">LACare_VUI_Draft.docx</a></li>
					</ul>
					</li>
				</ul>
			</li>
				
			<li><h3 class="mb-4">Certius</h3>
				<ul> 
				<li><a href="../files/waterfield/lacare/LACare_BIlling_PhraseList9.28_ES.xlsx">LACare_BIlling_PhraseList 9.28 (Spanish)</a></li>
				<li><a href="../files/waterfield/lacare/LACare_VUI9.28_ES.docx">VUI LA CARE Version 1.2 (Spanish) 9.28</a></li>
				<li><a href="../files/waterfield/lacare/Waterfield-ServicesforLACareprojectRevB.pdf">Waterfield - Services for LA Care project RevB</a></li>
				<li><a href="../files/waterfield/lacare/2020.10.02.lacare-spanish-grammars.rar">Spanish Grammars first submission</a></li>
				<li><a href="../files/waterfield/lacare/2020.10.05.lacare-spanish-grammars.rar">Spanish Grammars Addenda after customer input</a></li>
				
				
				<li><h5>Superseded</h5>
				<ul>
				<li><a href="../files/waterfield/lacare/old/LACare_BIlling_PhraseList9.2_ES.xlsx">LACare_BIlling_PhraseList 9.2 (Spanish)</a></li>
				<li><a href="../files/waterfield/lacare/old/LACare_VUI9.20_ES.docx">VUI LA CARE Version 1.1 (Spanish)</a></li>
				
				
				
				
				</ul>
				
				</li>
				
				</ul>
				
			</li>
				
				
			
		</ul>
		
		<h4>1  Customer Environment</h4>
			<p>Call TBD</p>
			<p>Then select the following numbers for Spanish</p>
			<ul>

			<li>Spanish Main entry – 1002</li>
		
		
		<h3 class="mb-4">Submittal Email</h3>
		<p>You can <a href="../files/waterfield/lacare/20WT0003-WT-LACare-Submittaloftranslations.msg" target="_blank">view</a> or <a href="../files/waterfield/lacare/20WT0003-WT-LACare-Submittaloftranslations.msg" target="_blank">download</a> the email with submission of documents</p>
		<h3 class="mb-4">Scope of work</h3>





 
<h3>1  Scope</h3>
        <p>This section describes the professional services to be provided by Certius Technologies for the LA Care project, in relation to the Bill Pay voice self-service application to be developed by Waterfield, with multilingual user interface English/Spanish.
The functional scope of this application is defined in the following specification documents received from Mrs. Andrea Stranger on September 4th, 2020:

		<ul>
		<li>LA Care_BillPay (4).pdf</li>
		<li>LACare_VUI_Draft.docx</li>
		<li>LACare_BIlling_PhraseList.xlsx</li>
		</ul>

<p>This application has a multilingual directed-dialog ASR (Automated Speech Recognition) user interface.</p>

<h4>1.1 Services</h4>

<p>The following professional services would be provided by Certius within the scope of this project:</p>
<ul>
<li>Translation of the application audio messages texts to Spanish and Portuguese</li>
<li>Deliverable: Excel spreadsheet containing the original messages in English provided by Waterfield, and the corresponding translated messages, one column for each language. Translations would be performed by native speakers</li>
<li>Provision of ASR grammar files for each interaction state in the application: menus and Prompt&Collects, for Spanish and Portuguese</li>
<li>Deliverable: Lumenvox grammar files (uncompiled)</li>
<li>Self-service application QA testing for Spanish and Portuguese through the performance of phone calls to the application, with the objective of verifying the audio messages and the correct performance of the ASR grammars.</li>
<li>Prerequisite: Waterfield should first perform the application QA testing in English</li>
<li>Deliverable: test cases performance report (Excel)</li>
<li>UAT support for end-customer testing in all issues related to Spanish and Portuguese audio messages and grammars</li>
<li> It is assumed that the UAT testing process for the entire application would last two weeks.</li>
</ul>

<p>Unless otherwise indicated in this proposal, all services will be provided by Certius remotely from its offices in Buenos Aires, during normal working hours only: Monday to Friday (excluding national holidays in Argentina) from 9 am to 6 pm Argentina time.</p>

<h4>1.1.1 SERVICES EXCLUSIONS</h4>
<p>The following services are explicitly excluded from this proposal:</p>
<ul>
<li>Services related to ASR tuning</li>
<li>Any warranty on ASR performance levels</li>
<li>Services of any kind once the UAT process has been completed</li>
<li>Deploy of files or performance of configurations in the execution environments</li>
</ul>
<h4>1.2 Requirements</h4>
<p>This proposal assumes that Waterfield would provide the following items/services: </p>
<ul>
<li>Final version of the self-service application specification, containing:</li>
<ul><li>All application messages, including messages related to retries and error states</li>
<li>English vocabulary list for each interaction state</li>
<li>English ASR grammars (for sample purposes only)</li>
</ul>
<li>Testing environment</li>
<li>Deploy of grammar files to the testing environment</li>
<li>DID phone number for making phone calls to the application</li>
<li>Required test data for navigating the self-service application</li>
</ul>

	  ';
	  }
		
		}
	}
	  ?>
		
        
 