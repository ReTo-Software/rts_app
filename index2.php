<!--Encode and compress Website-->
<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); 

# ESTO ES UNA PRUEBA PARA EL GIT
#segunda modificacion

?>
<!doctype html>

<html lang="en">
<head>

	<!--##################################################-->
	<!--META-->
		<meta charset="UTF-8">
	<!--END META-->
	<!--##################################################-->
	TE QUIERO FRAN..!!!
	<title>TITULO DEL SITE</title>

	<!--##################################################-->
	<!--FAVICON-->
		<!--link rel="shortcut icon" href="images/favicon.ico"-->
	<!--END FAVICON-->
	<!--##################################################-->

	<!--##################################################-->
	<!--STYLESHEETS-->

		<!--Bootstrap-->
			<link rel="stylesheet" href="css/bootstrap.min.css">
			<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<!--End Bootstrap-->

		<!--JQuery-->
			<!-- <link rel="stylesheet" href="css/jquery.tweet.css"> -->
			<!-- <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css"> -->
		<!--End JQuery-->
	
		<!--Plugins-->
			<!--NivoSlider-->
				<!--link rel="stylesheet" href="css/nivo-slider/nivo-slider.css"-->
				<!--link rel="stylesheet" href="css/nivo-slider/themes/default/default.css"-->
			<!--End NivoSlider-->
			<!--Shadowbox-->
				<!--link rel="stylesheet" href="css/shadowbox.css"-->
			<!--End Shadowbox-->
		<!--End Plugins-->

		<!--Local-->
			<link rel="stylesheet" href="css/main.css">
		<!--End Local-->

	<!--END STYLESHEETS-->
	<!--##################################################-->

	<!--##################################################-->
	<!--SCRIPTS-->

		<!--Bootstrap-->
			<!-- <script type="text/javascript" src="js/bootstrap.min.js" ></script> -->
			<!-- <script type="text/javascript" src="js/bootstrap-tab.js"></script> -->
			<!-- <script type="text/javascript" src="js/bootstrap-modal.js"></script> -->
		<!--End Bootstrap-->

		<!--JQuery-->
			<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script> 
			<!-- <script type="text/javascript" src="js/jquery.tweet.js"></script> -->
			<!-- <script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script> -->
			<!-- <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script> -->
			<!-- <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> -->
		<!--End JQuery-->

		<!--Plugins-->
			<!--NivoSlider-->
				<!-- <script type="text/javascript" src="js/nivo-slider/jquery.nivo.slider.js"></script> -->
			<!--End NivoSlider-->
			<!--CkEditor-->
				<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
				<script type="text/javascript" src="js/ckeditor/styles.js"></script>
				<script type="text/javascript" src="js/ckeditor/lang/else.js"></script>
			<!--End CkEditor-->
			<!--Shadowbox-->
				<!-- <script type="text/javascript" src="js/shadowbox.js"></script> -->
			<!--End Shadowbox-->
		<!--End Plugins-->

		<!--Local-->
			<script type="text/javascript" src="js/main.js"></script>

			<script type="text/javascript">
				var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-38701661-1']);
				_gaq.push(['_trackPageview']);

				(function() 
				{
					var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				})();
			</script>
		<!--End Local-->
	<!--END SCRIPTS-->
	<!--##################################################-->
</head>

<!--##################################################-->
<!--CODE-->
<body style="position: relative; z-index: 1;">
<div id="content" class="background1"> 
	<div id="menuContainer"> 
		<div class="wrapper">
			<div id="logosContainer">
				<!--Main logo-->
				<div id="mainlogo">
					<a href="#inicio" data-toggle="tab" onclick="loadBackground1()	"><img id="logo1" src="img/logos/logoMeneses.png" alt="" title=""></a>
				</div>

				<!--Extra Logos-->
				<!--div id="secondarylogos">
					<a href="" target="_blank"><img id="logo2" src="img/logos/logo1.png" alt="" title=""></a>
					<a href="" target="_blank"><img id="logo3" src="img/logos/logo2.png" alt="" title=""></a>
				</div-->
			</div>

			<!--Menú local reference-->
			<!--
			<ul id="mainMenu" class="nav-tab">

				##############TAB##############
				<li class="active">
					<a href="#inicio" data-toggle="tab" onclick="loadBackground1()	">INICIO</a>
				</li>

				##############SEPARATOR##############
				<li class="separator">|</li>
				
				##############DROPDOWN##############
				<li class="dropdown">
				<li>
					<a href="#cirugia" data-toggle="tab" onclick="loadBackground3()">CIRUG&Iacute;A PL&Aacute;STICA</a>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">CIRUG&Iacute;A PL&Aacute;STICA<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#bateriaiq" data-toggle="tab">BATER&Iacute;A INTELIGENTE IQ</a></li>
						<li><a href="#bateriavmf" data-toggle="tab">BATER&Iacute;AS VMF LIBRE MANTENIMIENTO</a></li>
						<li><a href="#cargadores" data-toggle="tab">CARGADORES DE BATER&Iacute;AS VOLT SMART</a></li>
					</ul>
				</li>
				
			</ul>
			-->

			<!--Sotial Networks-->
			<!--
			<div id="redes">
				<a href="http://www.twitter.com/doctormeneses" target="_blank" id="twitter"></a>
				<a href="#" id="facebook"></a>
			</div>
			-->
		</div>
	</div>

	<!--Content--> 
	<div id="mainTab" class="tab-content" stile="position: relative; z-index: 1;">
		
		<!--Content from dinamic display-->

		<?php 
			/*
				include_once('protegido/mysql.php');

				$idTxt = ''; #VARIABLES QUE ALMACENARAN LOS ID'S DEL CONTENIDO

				$bd = new MYSQL;

				#CONECTAR A LA BD
				$bd->conectar();
	
				#INCLUDE AL FILES TO RENDER
				@include_once('protegido/vistas/<VISTA>.php');

				#DESCONECTAR DE LA BD
				$bd->desconectar();
			*/
		?>

	</div>

	</div>

	<div id="footer">
		<div class="wrapper">
			<label>TODOS LOS DERECHOS RESERVADOS</label>
			<a href="http://www.guepgroup.com/" target="_blank"><img src="img/logos/guepGroup.png" ></a>
		</div>
	</div>
</body>
<!--END CODE-->
<!--##################################################-->

</html>