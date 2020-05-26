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
	 <h2 class="mb-4">Training Material</h2>
     
	<div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="text-left">
                <h4 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Training Tips</h4>
				<ul style="list-style:none">
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../../files/tips/A01.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a>  A01 - Arquitectura Voice Portal RevB </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/A02.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> A02 - Instalacion Eclipse-Tomcat RevD </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/A07.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> A07 - Tip - Envío de email - RevA </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/B11.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> B11 - Eclipse. Data folder RevC.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/B12.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> B12 - Eclipse. Add Libraries from PROD into workspace RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/B13.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> B13 - Avaya Copyright RevA.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/B19.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> B19 - SVN en OD6 RevC.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/B20.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> B20 - SVN de Avaya Forge RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/B21.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> B21 - SVN user_pass reset RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/B22.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> B22 - SVN trunk_tags_branches RevC.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/B23.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> B23 - Update de OD6 RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/B24.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> B24 - SVN No Commit RevD.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/B25.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> B25 - POM Connector RevD.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/B26.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> B26 - Update de OD7 RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/B30.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> B30 - Maven Basics I RevC.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/B35.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> B35 - Confluence de Avaya Forge (deprecated)RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/B36.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> B36 - WS to Java RevA.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/B38.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> B38 - REST WS RevA (in progress).ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/B40.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> B40 - SoapUi - Wsdl RevA.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C09.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> C09 - Idiomas y Localizacion RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C15.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> C15 - Properties Reader RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C16.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> C16 - Uso de Session Properties RevA.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C18.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> C18 - Creacion de Session Keys RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C19.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> C19 - Uso de Session Keys RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C21.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> C21 - Override Audios Externos RevC.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C22.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> C22 - Override Gramaticas Externas RevC.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C23.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> C23 - Gramaticas Externas RevA.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C24.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> C24 - Servlet para Business Layer RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C25.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> C25 - Parametros de launchVXML RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C26.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> C26 - Ubicacion de archivos RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C27.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> C27 - Flush-Bargein-TypeAhead RevA.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C29.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> C29 - Export RM RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C30.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> C30 - Import RM RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C30.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> C30 - Import RM.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C31.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> C31 - Uso y nomenclatura de RDMs RevC.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C33.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> C33 - Envio de email RevA.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/C35.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> C35 - Uso del Oceana Services PDC RevA.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/D01.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> D01 - Chequeo Diario RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/D02.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> D02 - Deploy en Oracle Weblogic RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/D03.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> D03 - Seteo de Licencia del Voice Portal RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/D04.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> D04 - Compatibilidad OD6 y Webpshere7 RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/D05.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> D05 - Reporte de Application Errors en el Voice Portal RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/D06.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> D06 - Seteo de Fetch Timeout en el MPP RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/D07.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> D07 - Ver los logs del MPP_2 RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/D08.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> D08 - Reporte de Audios Faltantes en el Voice Portal RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/D09.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> D09 - Configurar shared libraries en WebSphere RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/D10.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> D10 - Habilitar Application Tracing en el Voice Portal RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/D11.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> D11 - Habilitar log4j Tracing en WebLogic RevC.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/D12.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> D12 - Restart de MPP desde VPMS RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/D13.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> D13 - Agregar directorio LIB al CLASSPATH en WebLogic RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/D15.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> D15 - Tomcat KeepAlive - Para announcements Largos Rev A.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/D14.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> D14 - Tuning de Reconocimiento de Voz (not released) RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/D20.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> D20 - Configuracion POM RevA.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/D24.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> D24 - Subir test cases a Jira RevA.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/E01.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> E01 - Uso de FINDSTR RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/E02.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> E02 - Instalar un Certificado en Java RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/E02eng.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> E02 Eng - How to install Certificates RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/E03.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> E03 - Instalar Tomcat RevB.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/E05.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> E05 - Instalar 3CX para Avaya LAB RevA.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/F01.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> F01 - Black Duck Hub RevI.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/F02.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> F02 - Confluence RevC.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/F03.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> F03 - Jira RevC.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/F05.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> F05 - Bamboo RevJ.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/F07.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> F07 - Sonar RevD.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/F08.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> F08 - Coverity RevF.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/F09.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> F09 - AOS Portal RevA.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/F11.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> F11 - Entorno de testing Avaya lab RevE.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/F13.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> F13 - Svn Nexus de Avaya RevB.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/F14.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> F14 - Jira Versiones Alfanum‚ricas Rev A Draft.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/G01.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> G01 - Development Best Practices RevA.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/G06.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> G06 - Conference Calls RevA.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/G08.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> G08 - Acceso a SAL RevC.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/H01.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> H01 - Quality Assurance.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/X02.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> X02 - Nexus 3 RevA.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/X03.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> X03 - Armar un Tunel SSH RevB.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/X04.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> X04 - Tomcat Logging RevA.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/Q01.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> Q01  - Como subir test cases a Jira.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/X05.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> X05  - POM proyecto outbound configuraci¢n en VoicePortal.ppt </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/XX06.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a> X06 - Breeze configuraci&oacute;n.pptx </li>
				<li style="text-decoration:none;padding-bottom:10px;"><a href="../content/tips/XXX.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a> XXXX - Lectura de Audios.ppt </li>
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
		
        