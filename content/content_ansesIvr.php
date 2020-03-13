<?php

 session_start();
 $userlogged = $_SESSION['name'];
 
	echo '
	<img src="../files/teleperformance/tp_logo.jpg">
	
	 <h2 class="mb-4">18TP0001 - Teleperformance Anses IVR</h2>
        <p>In this page you will find all documentation Teleperformance Anses IVR</p>
	
    <h3 class="mb-4">Documentation</h3>
		<ul>
		<li> <h3 class="mb-4">General</h3>
			<ul>
			<li>Project Notes: - <a href="../files/teleperformance/Project Notes_9.0.docx">Project Notes</a></li>
			<li>Customer acceptance: - <a href="../files/teleperformance/project_acceptance.msg">Acceptance Email</a></li>
			
			</ul>
		</li>
		</ul>
		
		<ul>
		<li> <h3 class="mb-4">Qa</h3>
			<ul>
			<li>LIST OF QA TEST CASES: - Survey<a href="../files/teleperformance/18TP0001-TEST-QA-0001_1.0.xlsx">18TP0001-TEST-QA-0001_1.0.xlsx</a></li>
			<li>LIST OF QA TEST CASES: - Survey2<a href="../files/teleperformance/project_acceptance.msg">18TP0002-TEST-QA-0001_1.0.xlsx</a></li>
			<li>LIST OF QA TEST CASES: - Log<a href="../files/teleperformance/survey_qa_10052018.txt">survey_qa_10052018.txt</a></li>
			
			</ul>
		</li>
		</ul>
		
		
		
	  ';
	  ?>
		
        
 