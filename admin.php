<?php
include("login-update/include/session.php");

if( ( $session->logged_in and $session->isAdmin() ) ){
	// header( 'Location: ./' );
	# Agregar la ruta de la pag de administración:
}
#
# Codificar:
# 'RT' Prefijo
# base64_encode($id); - (ID TXT)
# calcular uniqueid, substr($uuid,7,6);
# Concatenar
#
function rt_id_encode( $id ){
	return 'RT' . base64_encode( $id ) . substr( uniqid() , 7 , 6 );
}
#
# Decodificar:
# substr($codigo,2,4);
# base64_decode($id);
#
function rt_id_decode( $id ){
	return base64_decode( substr( $id , 2 , 4 ) );
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Dr. Pedro Meneses</title>
	<link rel="shortcut icon" href="images/favicon.ico">

	<!-- <link rel="stylesheet" href="css/jquery.tweet.css"> -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<!-- <link rel="stylesheet" href="css/nivo-slider/nivo-slider.css"> -->
	<!-- <link rel="stylesheet" href="css/nivo-slider/themes/default/default.css"> -->
	<!-- <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css"> -->

	<link rel="stylesheet" href="css/main.css">

	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script> 
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> -->
	<!-- <script type="text/javascript" src="js/bootstrap.min.js" ></script> -->
	<!-- <script type="text/javascript" src="js/jquery.tweet.js"></script> -->
	<!-- <script type="text/javascript" src="js/bootstrap-tab.js"></script> -->
	<!-- <script type="text/javascript" src="js/nivo-slider/jquery.nivo.slider.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script> -->
	
	<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="js/ckeditor/styles.js"></script>
	<script type="text/javascript" src="js/ckeditor/lang/else.js"></script>

	<script type="text/javascript" src="js/main.js"></script>

</head>
<body >
	<?php 
		if( ($session->logged_in and $session->isAdmin()) )
		{
			echo "Bienvenido <b>$session->username</b>.";
			echo "[<a href=\"login-update/process.php\">Cerrar sesi&oacute;n</a>]";
		}		
	?>

<div id="content">
	<div id="menuContainer">
		<div class="wrapper">
			<a href="./">					
				<img id="logo" src="img/Logo.png" title="Regresar" alt="UDM Logo">
			</a>
		</div>
	</div>
	<?php
		if($session->logged_in)
		{
			$a = 'null';
			if ( isset( $_GET['v'] ) ) 
			{
				$a = $_GET['v'];
			}
	?>
			<div id="mainTab" class="tab-content bgFade">
				<H3 style="text-align: center; display: inline;">M&oacute;dulo de administraci&oacute;n</H3>

				<select name="" id="" style="margin: 0 12px 10px;width: 320px;" onchange="window.location.href=this.options[this.selectedIndex].value">

					<option selected value="./admin.php?v=null"> -- Seleccione -- </option>				
					<option disabled>Dr Pedro Meneses</option>				
					<option value="./admin.php?v=educacion" <?php echo ($a == 'educacion' or $a == '') ? 'selected="selected"':''?> > - Educaci&oacute;n</option>
					<option value="./admin.php?v=postgrado" <?php echo ($a == 'postgrado' or $a == '') ? 'selected="selected"':''?> > - Cursos de Postgrado</option>					
					<option value="./admin.php?v=investigacion" <?php echo ($a == 'investigacion' or $a == '') ? 'selected="selected"':''?> > - Investigaci&oacute;n</option>
					<option value="./admin.php?v=certificaciones" <?php echo ($a == 'certificaciones' or $a == '') ? 'selected="selected"':''?> > - Licencias y cerificaciones</option>
					<option value="./admin.php?v=honores" <?php echo ($a == 'honores' or $a == '') ? 'selected="selected"':''?> > - Honores</option>
					<option value="./admin.php?v=sociedades" <?php echo ($a == 'sociedades' or $a == '') ? 'selected="selected"':''?> > - Sociedades Profesionales</option>
					<option value="./admin.php?v=bibliografia" <?php echo ($a == 'bibliografia' or $a == '') ? 'selected="selected"':''?> > - Bibliograf&iacute;a</option>

					<option disabled>Cirug&iacute;as Pl&aacute;stica</option>	
					<option value="./admin.php?v=abdominoplastia" <?php echo ($a == 'abdominoplastia' or $a == '') ? 'selected="selected"':''?> >
					 - Abdominoplastia
					</option>
					<option value="./admin.php?v=liposuccion" <?php echo ($a == 'liposuccion' or $a == '') ? 'selected="selected"':''?> > - Liposucci&oacute;n</option>
					<option value="./admin.php?v=mamoplastiaAumento" <?php echo ($a == 'mamoplastiaAumento' or $a == '') ? 'selected="selected"':''?> > - Mamoplastia de Aumento</option>
					<option value="./admin.php?v=mamoplastiaReductora" <?php echo ($a == 'mamoplastiaReductora' or $a == '') ? 'selected="selected"':''?> > - Mamoplastia Reductora</option>
					<option value="./admin.php?v=mastopexia" <?php echo ($a == 'mastopexia' or $a == '') ? 'selected="selected"':''?> > - Mastopexia</option>
					<option value="./admin.php?v=rinoplastia" <?php echo ($a == 'rinoplastia' or $a == '') ? 'selected="selected"':''?> > - Rinoplastia</option>

					<option disabled>Tratamientos Est&eacute;ticos</option>	
					<option value="./admin.php?v=radiofrecuencia" <?php echo ($a == 'radiofrecuencia' or $a == '') ? 'selected="selected"':''?> >
					 - Radiofrecuencia
					</option>
					<option value="./admin.php?v=ultracavitacion" <?php echo ($a == 'ultracavitacion' or $a == '') ? 'selected="selected"':''?> > - Ultra Cavitaci&oacute;n</option>
					<option value="./admin.php?v=botox" <?php echo ($a == 'botox' or $a == '') ? 'selected="selected"':''?> > - Botox</option>
					<option value="./admin.php?v=plasma" <?php echo ($a == 'plasma' or $a == '') ? 'selected="selected"':''?> > - Plasma Rico en Plaquetas</option>

					<option disabled>Testimoniales</option>
					<option value="./admin.php?v=testimonialesAdd" <?php echo ($a == 'testimonialesAdd' or $a == '') ? 'selected="selected"':''?> > - Agregar Testimonio</option>
					<option value="./admin.php?v=testimonialesDel" <?php echo ($a == 'testimonialesDel' or $a == '') ? 'selected="selected"':''?> > - Eliminar Testimonio</option>
					<option value="./admin.php?v=testimonialesMod" <?php echo ($a == 'testimonialesMod' or $a == '') ? 'selected="selected"':''?> > - Modificar Testimonio</option>

					<option disabled>Noticias</option>
					<option value="./admin.php?v=noticiaAdd" <?php echo ($a == 'noticiaAdd' or $a == '') ? 'selected="selected"':''?> > - Agregar Noticia</option>
					<option value="./admin.php?v=noticiaDel" <?php echo ($a == 'noticiaDel' or $a == '') ? 'selected="selected"':''?> > - Eliminar Noticia</option>
					<option value="./admin.php?v=noticiaMod" <?php echo ($a == 'noticiaMod' or $a == '') ? 'selected="selected"':''?> > - Modificar Noticia</option>
			</select>
			<p>admin6meneses</p>
	<?php
		# SE HA INICIADO SESION:
		   echo "Bienvenido <b>$session->username</b>. &nbsp;&nbsp;[<a href=\"login-update/useredit.php\">Cambiar contrase&ntilde;a</a>] &nbsp;&nbsp;";
		   echo "[<a href=\"login-update/process.php\">Cerrar sesi&oacute;n</a>]"; // SI
		   echo '<br><hr style="margin: 0 0 20px 0;">';

		   include_once('protegido/mysql.php');
			$idTxt = ''; #VARIABLES QUE ALMACENARAN LOS ID'S DEL CONTENIDO
			$bd = new MYSQL;

			#CONECTAR A LA BD
			$bd->conectar();
			$msjNotFound = 'Lo sentimos, el contenido no pudo ser encontrado.';

			switch ($a) 
			{
				case "":
		   		break;   	

				case "educacion":
				@include_once('protegido/vistas/admin/educacion.php');
				break;

				case "postgrado":
				@include_once('protegido/vistas/admin/postgrado.php');
				break;

				case "investigacion":
				@include_once('protegido/vistas/admin/investigacion.php');
				break;

				case "certificaciones":
				@include_once('protegido/vistas/admin/certificaciones.php');
				break;

				case "honores":
				@include_once('protegido/vistas/admin/honores.php');
				break;

				case "sociedades":
				@include_once('protegido/vistas/admin/sociedades.php');
				break;

				case "bibliografia":
				@include_once('protegido/vistas/admin/bibliografia.php');
				break;

				case "abdominoplastia":
				@include_once('protegido/vistas/admin/abdominoplastia.php');
				break;

				case "liposuccion":
				@include_once('protegido/vistas/admin/liposuccion.php');
				break;

				case "mamoplastiaAumento":
				@include_once('protegido/vistas/admin/mamoplastiaAumento.php');
				break;

				case "mamoplastiaReductora":
				@include_once('protegido/vistas/admin/mamoplastiaReductora.php');
				break;

				case "mastopexia":
				@include_once('protegido/vistas/admin/mastopexia.php');
				break;

				case "rinoplastia":
				@include_once('protegido/vistas/admin/rinoplastia.php');
				break;

				case "testimonialesAdd":
				@include_once('protegido/vistas/admin/testimonialesAdd.php');
				break;

				case "testimonialesDel":
				@include_once('protegido/vistas/admin/testimonialesDel.php');
				break;

				case "testimonialesMod":
				@include_once('protegido/vistas/admin/testimonialesMod.php');
				break;

				case "noticiaAdd":
				@include_once('protegido/vistas/admin/noticiaAdd.php');
				break;

				case "noticiaDel":
				@include_once('protegido/vistas/admin/noticiaDel.php');
				break;

				case "noticiaMod":
				@include_once('protegido/vistas/admin/noticiaMod.php');
				break;

				case "radiofrecuencia":
				@include_once('protegido/vistas/admin/radiofrecuencia.php');
				break;

				case "ultracavitacion":
				@include_once('protegido/vistas/admin/ultracavitacion.php');
				break;

				case "botox":
				@include_once('protegido/vistas/admin/botox.php');
				break;

				case "plasma":
				@include_once('protegido/vistas/admin/plasma.php');
				break;
			}

			#DESCONECTAR DE LA BD
			$bd->desconectar();

		}else
		{
	?>
		<div id="mainTab" class="tab-content">
			<div style="margin: 0 auto; width: 400px;" class="bgFade">
				<H3 style="text-align: center;">M&oacute;dulo de administraci&oacute;n</H3>
				<hr style="margin: 0 0 20px 0;">
				<form action="login-update/process.php" method="POST">
					<table border="0" cellspacing="0" cellpadding="3" style="margin: 0 auto;">
						<tr><td>Usuario:</td><td><input id="usuario" required="required" type="text" name="user" maxlength="30" value="<?php echo $form->value("user"); ?>"></td><td><?php echo $form->error("user"); ?></td></tr>
						<tr><td>Contrase&ntilde;a:</td><td><input required="required" type="password" name="pass" maxlength="30" value="<?php echo $form->value("pass"); ?>"></td><td><?php echo $form->error("pass"); ?></td></tr>
						<tr><td colspan="2" align="left" style="text-align: right;">
 						<?php if($form->value("remember") != ""){ echo "checked"; } ?>
						<input type="hidden" name="sublogin" value="1">
						<input class="btn" type="submit" value="Ingresar"></td></tr>
					</table>
				</form>

				<script type="text/javascript">
					$("#usuario").focus();
				</script>

			</div>
	<?php 
	}
	?>

		</div>

<div id="footer" style="height: 79px;">
	<span>
		Todos los derechos reservados <?php echo date("Y")?>.
	</span>
</div>

</body>
</html>