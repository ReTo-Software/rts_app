<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<!-- 
	<meta http-equiv="refresh" content="2;url=http://domain_name.com">
-->
<!--[if !IE]><!-->
<meta charset="UTF-8">
<!--<![endif]-->

<title>Dr. Pedro Meneses</title>

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="css/nivo-slider/nivo-slider.css">
<link rel="stylesheet" href="css/nivo-slider/themes/default/default.css">
<link rel="stylesheet" href="css/shadowbox.css">

<link rel="stylesheet" href="css/main.css">

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/shadowbox.js"></script>
<script type="text/javascript" src="js/bootstrap-tab.js"></script>
<!--
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
-->
<script type="text/javascript" src="js/nivo-slider/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="js/main.js"></script>

<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-38701661-1']);
_gaq.push(['_trackPageview']);

(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>


<script type=
"text/javascript">

function loadBackground1()
{
	$('#content').removeClass();
	$('#content').addClass('background1')/*.fadeOut(200).fadeIn(200)*/;
}

function loadBackground2()
{
	$('#content').removeClass();
	$('#content').addClass('background2')/*.fadeOut(200).fadeIn(200)*/;
}

function loadBackground3()
{
	$('#content').removeClass();
	$('#content').addClass('background3')/*.fadeOut(200).fadeIn(200)*/;
}

function loadBackground4()
{
	$('#content').removeClass();
	$('#content').addClass('background4')/*.fadeOut(200).fadeIn(200)*/;
}

function loadBackground5()
{
	$('#content').removeClass();
	$('#content').addClass('background5')/*.fadeOut(200).fadeIn(200)*/;
}

</script>
</script>
<!-- End of Zopim Live Chat Script -->

</head>
<body style="position: relative; z-index: 1;">

<body>
		<div id="content" class="background1"> 
			<div id="menuContainer"> 
				<div class="wrapper">
					<div id="logosContainer">
						<div id="mainlogo">
							<a href="#inicio" data-toggle="tab" onclick="loadBackground1()	"><img id="logo1" src="img/logos/logoMeneses.png" alt="" title=""></a>
						</div>
						<div id="secondarylogos">
							<a href="http://www1.plasticsurgery.org/find_a_surgeon/" target="_blank"><img id="logo2" src="img/logos/logo1.png" alt="" title=""></a>
							<a href="http://www.sociedadcirugiaplasticavenezolana.org/" target="_blank"><img id="logo3" src="img/logos/logo2.png" alt="" title=""></a>
						</div>
					</div>
					<ul id="mainMenu" class="nav-tab">
						<li class="active">
							<a href="#inicio" data-toggle="tab" onclick="loadBackground1()	">INICIO</a>
						</li>
						<li class="separator">|</li>
						<li>
							<a href="#curriculo" data-toggle="tab"  onclick="loadBackground2()">DR. PEDRO MENESES</a>
						</li>
						<li class="separator">|</li>
						<!--li class="dropdown"-->
						<li>
							<a href="#cirugia" data-toggle="tab" onclick="loadBackground3()">CIRUG&Iacute;A PL&Aacute;STICA</a>
							<!--a href="#" class="dropdown-toggle" data-toggle="dropdown">CIRUG&Iacute;A PL&Aacute;STICA<b class="caret"></b></a-->
							<!--ul class="dropdown-menu">
								<li><a href="#bateriaiq" data-toggle="tab">BATER&Iacute;A INTELIGENTE IQ</a></li>
								<li><a href="#bateriavmf" data-toggle="tab">BATER&Iacute;AS VMF LIBRE MANTENIMIENTO</a></li>
								<li><a href="#cargadores" data-toggle="tab">CARGADORES DE BATER&Iacute;AS VOLT SMART</a></li>
							</ul-->
						</li>
						<li class="separator">|</li>
						<li>
							<a href="#tratamientos" data-toggle="tab" onclick="loadBackground4()">TRATAMIENTOS EST&Eacute;TICOS</a>
						</li>
						<li class="separator">|</li>
						<li >
							<a href="#testimoniales" data-toggle="tab" onclick="loadBackground1()">TESTIMONIALES</a>
						</li>
						<li class="separator">|</li>
						<li>
							<a href="#contacto" data-toggle="tab" onclick="loadBackground5()">CONTACTO</a>
						</li>
						<a href="#noticias" data-toggle="tab" onclick="loadBackground1()" hidden="hidden"></a>
					</ul>
					<div id="redes">
						<a href="http://www.twitter.com/doctormeneses" target="_blank" id="twitter"></a>
						<a href="#" id="facebook"></a>
					</div>
				</div>
			</div>

					<div id="mainTab" class="tab-content" stile="position: relative; z-index: 1;">
						
						<?php 
						include_once('protegido/mysql.php');

						$idTxt = ''; #VARIABLES QUE ALMACENARAN LOS ID'S DEL CONTENIDO

						$bd = new MYSQL;

						#CONECTAR A LA BD
						$bd->conectar();

						@include_once('protegido/vistas/inicio.php');
						@include_once('protegido/vistas/noticias.php');
						@include_once('protegido/vistas/curriculo.php');
						@include_once('protegido/vistas/cirugia.php');
						@include_once('protegido/vistas/tratamiento.php');
						@include_once('protegido/vistas/testimoniales.php');
						@include_once('protegido/vistas/contactanos.php');

						#DESCONECTAR DE LA BD
						$bd->desconectar();
						?>

						<script type="text/javascript">
</script>
					</div>

				</div>

				<div id="footer">
					<div class="wrapper">
						<label>TODOS LOS DERECHOS RESERVADOS</label>
						<a href="http://www.guepgroup.com/" target="_blank"><img src="img/logos/guepGroup.png" ></a>
					</div>
				</div>
			</body>
			</html>