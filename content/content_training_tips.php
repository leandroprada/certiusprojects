<?php

 session_start();
 $userlogged = $_SESSION['name'];
 
	echo '
	 <h2 class="mb-4">Training Material</h2>
     
	<div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
              <div class="text-left">
                <h4 class="wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Training Tips</h4>
				<ul style="list-style:none">
				<li style="text-decoration:none;padding-bottom:10px;">A01 - Arquitectura Voice Portal RevB <a href="../content/tips/A01.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">A02 - Instalacion Eclipse-Tomcat RevD <a href="../content/tips/A02.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">B11 - Eclipse. Data folder RevC.pptx <a href="../content/tips/B11.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">B12 - Eclipse. Add Libraries from PROD into workspace RevB.ppt <a href="../content/tips/B12.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">B13 - Avaya Copyright RevA.ppt <a href="../content/tips/B13.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">B19 - SVN en OD6 RevC.ppt <a href="../content/tips/B19.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">B20 - SVN de Avaya Forge RevB.ppt <a href="../content/tips/B20.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">B21 - SVN user_pass reset RevB.ppt <a href="../content/tips/B21.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">B22 - SVN trunk_tags_branches RevC.ppt <a href="../content/tips/B22.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">B23 - Update de OD6 RevB.ppt <a href="../content/tips/B23.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">B24 - SVN No Commit RevC.ppt <a href="../content/tips/B24.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">B24 - SVN No Commit RevD.ppt <a href="../content/tips/B24.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">B25 - POM Connector RevD.ppt <a href="../content/tips/B25.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">B26 - Update de OD7 RevB.ppt <a href="../content/tips/B26.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">B30 - Maven Basics I RevC.pptx <a href="../content/tips/B30.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">B35 - Confluence de Avaya Forge (deprecated)RevB.ppt <a href="../content/tips/B35.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">B36 - WS to Java RevA.ppt <a href="../content/tips/B36.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">B38 - REST WS RevA (in progress).ppt <a href="../content/tips/B38.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">B40 - SoapUi - Wsdl RevA.pptx <a href="../content/tips/B40.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C09 - Idiomas y Localizacion RevB.ppt <a href="../content/tips/C09.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C15 - Properties Reader RevB.ppt <a href="../content/tips/C15.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C16 - Uso de Session Properties RevA.ppt <a href="../content/tips/C16.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C18 - Creacion de Session Keys RevB.ppt <a href="../content/tips/C18.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C19 - Uso de Session Keys RevB.ppt <a href="../content/tips/C19.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C21 - Override Audios Externos RevC.ppt <a href="../content/tips/C21.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C22 - Override Gramaticas Externas RevC.ppt <a href="../content/tips/C22.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C23 - Gramaticas Externas RevA.pptx <a href="../content/tips/C23.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C24 - Servlet para Business Layer RevB.ppt <a href="../content/tips/C24.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C25 - Parametros de launchVXML RevB.ppt <a href="../content/tips/C25.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C26 - Ubicacion de archivos RevB.ppt <a href="../content/tips/C26.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C27 - Flush-Bargein-TypeAhead RevA.pptx <a href="../content/tips/C27.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C29 - Export RM RevB.ppt <a href="../content/tips/C29.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C30 - Import RM RevB.ppt <a href="../content/tips/C30.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C30 - Import RM.ppt <a href="../content/tips/C30.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C31 - Uso y nomenclatura de RDMs RevC.pptx <a href="../content/tips/C31.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C33 - Envio de email RevA.pptx <a href="../content/tips/C33.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">C35 - Uso del Oceana Services PDC RevA.pptx <a href="../content/tips/C35.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">D01 - Chequeo Diario RevB.ppt <a href="../content/tips/D01.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">D02 - Deploy en Oracle Weblogic RevB.ppt <a href="../content/tips/D02.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">D03 - Seteo de Licencia del Voice Portal RevB.ppt <a href="../content/tips/D03.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">D04 - Compatibilidad OD6 y Webpshere7 RevB.ppt <a href="../content/tips/D04.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">D05 - Reporte de Application Errors en el Voice Portal RevB.ppt <a href="../content/tips/D05.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">D06 - Seteo de Fetch Timeout en el MPP RevB.ppt <a href="../content/tips/D06.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">D07 - Ver los logs del MPP_2 RevB.ppt <a href="../content/tips/D07.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">D08 - Reporte de Audios Faltantes en el Voice Portal RevB.ppt <a href="../content/tips/D08.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">D09 - Configurar shared libraries en WebSphere RevB.ppt <a href="../content/tips/D09.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">D10 - Habilitar Application Tracing en el Voice Portal RevB.ppt <a href="../content/tips/D10.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">D11 - Habilitar log4j Tracing en WebLogic RevC.ppt <a href="../content/tips/D11.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">D12 - Restart de MPP desde VPMS RevB.ppt <a href="../content/tips/D12.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">D13 - Agregar directorio LIB al CLASSPATH en WebLogic RevB.ppt <a href="../content/tips/D13.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">D15 - Tomcat KeepAlive - Para announcements Largos Rev A.ppt <a href="../content/tips/D15.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">D14 - Tuning de Reconocimiento de Voz (not released) RevB.ppt <a href="../content/tips/D14.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">D20 - Configuracion POM RevA.ppt <a href="../content/tips/D20.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">D24 - Subir test cases a Jira RevA.ppt <a href="../content/tips/D24.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">E01 - Uso de FINDSTR RevB.ppt <a href="../content/tips/E01.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">E02 - Instalar un Certificado en Java RevB.ppt <a href="../content/tips/E02.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">E02 Eng - How to install Certificates RevB.ppt <a href="../content/tips/E02eng.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">E03 - Instalar Tomcat RevB.ppt <a href="../content/tips/E03.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">E05 - Instalar 3CX para Avaya LAB RevA.pptx <a href="../content/tips/E05.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">F01 - Black Duck Hub RevI.ppt <a href="../content/tips/F01.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">F01 - Black Duck RevH.ppt <a href="../content/tips/F01.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">F02 - Confluence RevC.ppt <a href="../content/tips/F02.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">F03 - Jira RevC.ppt <a href="../content/tips/F03.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">F05 - Bamboo RevG.pptx <a href="../content/tips/F05.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">F05 - Bamboo RevI.pptx <a href="../content/tips/F05.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">F05 - Bamboo RevJ.pptx <a href="../content/tips/F05.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">F07 - Sonar RevC.ppt <a href="../content/tips/F07.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">F07 - Sonar RevD.ppt <a href="../content/tips/F07.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">F08 - Coverity RevD.ppt <a href="../content/tips/F08.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">F08 - Coverity RevE.ppt <a href="../content/tips/F08.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">F08 - Coverity RevF.ppt <a href="../content/tips/F08.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">F09 - AOS Portal RevA.ppt <a href="../content/tips/F09.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">F11 - Entorno de testing Avaya lab RevC.pptx <a href="../content/tips/F11.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">F11 - Entorno de testing Avaya lab RevE.pptx <a href="../content/tips/F11.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">F13 - Svn Nexus de Avaya RevB.pptx <a href="../content/tips/F13.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">F14 - Jira Versiones Alfanum‚ricas Rev A Draft.pptx <a href="../content/tips/F14.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">G01 - Development Best Practices RevA.pptx <a href="../content/tips/G01.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">G06 - Conference Calls RevA.pptx <a href="../content/tips/G06.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">G08 - Acceso a SAL RevC.pptx <a href="../content/tips/G08.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">H01 - Quality Assurance.pptx <a href="../content/tips/H01.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">X02 - Nexus 3 RevA.pptx <a href="../content/tips/X02.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">X03 - Armar un Tunel SSH RevA.pptx <a href="../content/tips/X03.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">X03 - Armar un Tunel SSH RevB.pptx <a href="../content/tips/X03.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">X04 - Tomcat Logging RevA.pptx <a href="../content/tips/X04.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">XXX  - Como subir test cases a Jira.ppt <a href="../content/tips/XXX.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">XXX  - POM proyecto outbound configuraci¢n en VoicePortal.ppt <a href="../content/tips/XXX.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">XXX - Breeze configuraci¢n.pptx <a href="../content/tips/XXX.pptx" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>
				<li style="text-decoration:none;padding-bottom:10px;">XXXX - Lectura de Audios.ppt <a href="../content/tips/XXX.ppt" class="btn btn-success btn-sm" style="color:white;">Ver</a></li>

				
				
				
				
				
				</ul>
									
					
              </div>
          </div>
        </div>
	</div>
        

	  ';
	  ?>
		
        
 