<?php

 session_start();
 $userlogged = $_SESSION['name'];
 
	echo '
	 <h2 class="mb-4">18tp0001 Wyndham Project</h2>
        <p><?php var_dump($_SESSION['login']); ?></p>
        <p>In this page you will find all documentation for Wyndham hotels</p>
		<h2>Scope of work</h2>


<h4>1  Scope</h4>
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
	  ?>
		
        
 