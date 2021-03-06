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
		
		<img src="../files/waterfield/wyndham/wyndham_logo.png" style="width:100%">
		
	 <h2 class="mb-4">20WT0001 Wyndham Project</h2>
        
        <p>In this page you will find all documentation for Wyndham hotels</p>
		
		
		<h3 class="mb-4">Documentation</h3>
		<ul>
			<li> <h3 class="mb-4">Sent by Waterfield</h3>
				<ul>
				<li><a href="../files/waterfield/wyndham/Wyndhamcallflow4.17.20.pdf">Call Flow Version 4.17.20</a></li>
				<li><a href="../files/waterfield/wyndham/WyndhamUtterances.xlsx">WyndhamUtterances.xlsx</a></li>
				<li><a href="../files/waterfield/wyndham/Wyndham_VUI_20200415.docx">Wyndham_VUI_20200415.docx</a></li>
				<li><a href="../files/waterfield/wyndham/Wyndhamphraselistv8.xlsx">Wyndhamphraselistv8.xlsx</a></li>
				<li><a href="../files/waterfield/wyndham/alpha.xml">alpha.xml</a></li>
				<li><a href="../files/waterfield/wyndham/Wyndham Destinations_TestCaseOverview_V6_Template.xlsx">Wyndham Destinations_TestCaseOverview_V6_Template.xlsx</a></li>
				<li><a href="../files/waterfield/wyndham/BlueworxDataRequest05262020.xls">Test Data: BlueworxDataRequest05262020.xls</a></li>
				<li><a href="../files/waterfield/wyndham/154049.docx">154049 - Waterfield - Wyndham Alma (ENG  SPA) to Record FINAL</a></li>
				<li><a href="../files/waterfield/wyndham/154051.docx">154051 - Waterfield - Wyndham Senna (Portuguese) to Record FINAL</a></li>
				<li><a href="../files/waterfield/wyndham/154633.docx">154633 - Waterfield - Wyndham Senna (Portuguese Brazilian) to Record FINAL</a></li>
				
			
				<li><h5>Superseded</h5>
				<ul>
				<li><a href="../files/waterfield/wyndham/old/WVO.vsd">Initial Call Flow Visio</a></li>
				<li><a href="../files/waterfield/wyndham/old/Wyndhamcallflow1.22.20.pdf">Wyndham call flow 1.22.20.pdf</a></li>
				<li><a href="../files/waterfield/wyndham/old/Wyndhamcallflow2.4.20.pdf">Wyndham call flow 2.4.20.pdf</a></li>
				<li><a href="../files/waterfield/wyndham/old/Wyndhamcallflow4.10.20.pdf">Call Flow Version 4.10.20</a></li>
				<li><a href="../files/waterfield/wyndham/old/Wyndham_VUI_20200102.docx">Wyndham_VUI_20200102.docx</a></li>
				<li><a href="../files/waterfield/wyndham/old/Wyndham_VUI_20200302.docx">Wyndham_VUI_20200302.docx</a></li>
				<li><a href="../files/waterfield/wyndham/old/Wyndham_VUI_20200403.docx">Wyndham_VUI_20200403.docx</a></li>
				<li><a href="../files/waterfield/wyndham/old/Wyndhamcallflow3.5.20.pdf">Call Flow Version 3.5.20</a></li>
				<li><a href="../files/waterfield/wyndham/old/Wyndhamphraselistv5.xlsx">Wyndhamphraselistv5.xlsx</a></li>
				<li><a href="../files/waterfield/wyndham/old/BlueworxDataRequest.xls">Test Data: BlueworxDataRequest.xls</a></li>
				</ul>
				</li>
				</ul>
			</li>
				
			<li><h3 class="mb-4">Certius</h3>
				<ul> 
				<li><a href="../files/waterfield/wyndham/tech_proposal_revC.docx">Certius Quotation Tech Only Rev C</a></li>
				<li><a href="../files/waterfield/wyndham/20WT0001-PL-0001_5.0.xlsx">20WT0001-PL-0001_5.0.xlsx</a></li>
				<li><a href="../files/waterfield/wyndham/AlphaFile.zip">Alphas grammars (English Spanish Portuguese)</a></li>
				<li><a href="../files/waterfield/wyndham/Wyndham_VUI_20200415-2_ES.docx">Wyndham_VUI_20200415_ES.docx</a></li>
				<li><a href="../files/waterfield/wyndham/Wyndham_VUI_20200415-2_PT.docx">Wyndham_VUI_20200415_PT.docx</a></li>
				
				<li><h5>Superseded</h5>
				<ul>
				<li><a href="../files/waterfield/wyndham/old/20WT0001-PL-0001_01.xlsx">20WT0001-PL-0001_01.xlsx</a></li>
				<li><a href="../files/waterfield/wyndham/old/20WT0001-PL-0001_2.1.xlsx">20WT0001-PL-0001_2.1.xlsx</a></li>
				<li><a href="../files/waterfield/wyndham/old/20WT0001-PL-0001_2.2.xlsx">20WT0001-PL-0001_2.2.xlsx</a></li>
				<li><a href="../files/waterfield/wyndham/old/20WT0001-PL-0001_2.3.xlsx">20WT0001-PL-0001_2.3.xlsx</a></li>
				<li><a href="../files/waterfield/wyndham/old/20WT0001-PL-0001_2.4.xlsx">20WT0001-PL-0001_2.4.xlsx</a></li>
				<li><a href="../files/waterfield/wyndham/old/20WT0001-PL-0001_2.5.xlsx">20WT0001-PL-0001_2.5.xlsx</a></li>
				<li><a href="../files/waterfield/wyndham/old/20WT0001-PL-0001_3.0.xlsx">20WT0001-PL-0001_3.0.xlsx</a></li>
				<li><a href="../files/waterfield/wyndham/old/20WT0001-PL-0001_3.1.xlsx">20WT0001-PL-0001_3.1.xlsx</a></li>
				<li><a href="../files/waterfield/wyndham/old/20WT0001-PL-0001_3.1.xlsx">20WT0001-PL-0001_3.2.xlsx</a></li>
				<li><a href="../files/waterfield/wyndham/old/20WT0001-PL-0001_4.0.xlsx">20WT0001-PL-0001_4.0.xlsx</a></li>
				<li><a href="../files/waterfield/wyndham/old7Wyndham_VUI_20200403_ES.docx">Wyndham_VUI_20200403_ES.docx</a></li>
				<li><a href="../files/waterfield/wyndham/old7Wyndham_VUI_20200403_PT.docx">Wyndham_VUI_20200403_PT.docx</a></li>
				<li><a href="../files/waterfield/wyndham/old/Wyndham_VUI_20200415_ES.docx">Wyndham_VUI_20200415_ES.docx</a></li>
				<li><a href="../files/waterfield/wyndham/old/Wyndham_VUI_20200415_PT.docx">Wyndham_VUI_20200415_PT.docx</a></li>
				<li><a href="../files/waterfield/wyndham/CertiusTechnologies-TranslationsToPorgutuesePart2RevA.docx">CertiusTechnologies-TranslationsToPorgutuesePart2RevA.docx</a></li>
				
				
				
				</ul>
				
				</li>
				
				</ul>
				
			</li>
				
				
			
		</ul>
		
		<h4>1  Customer Environment</h4>
			<p>Call 862 - 286-0133</p>
			<p>Then select the following numbers for Spanish and Portuguese</p>
			<ul>

			<li>Spanish Main entry – 1002</li>
			<li>Spanish Collections inbound – 1003</li>
			<li>Portuguese main entry – 1004</li>
			<li>Portuguese main Collections inbound - 1005</li>
		
		<h3 class="mb-4">Submittal Email</h3>
		<p>You can <a href="../files/waterfield/wyndham/20WT0001 - Waterfield - Wyndham - Spanish and Portuguese Delivery.htm" target="_blank">view</a> or <a href="../files/waterfield/wyndham/20WT0001-Waterfield-Wyndham-SpanishandPortugueseDelivery.eml" target="_blank">download</a> the email with submission of documents</p>
		<h3 class="mb-4">Scope of work</h3>





 
<h3>1  Scope</h3>
        <p>This proposal describes the professional services to be provided by Certius for the Wyndham project, in relation to the voice self-service application specifications received from Waterfield on December 30, 2019.</p>
		<ul><li>WVO call flow draft.pdf</li></ul>

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
		
        
 