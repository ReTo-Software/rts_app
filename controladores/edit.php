<?php
include("login-update/include/session.php");

if( !( $session->logged_in and $session->isAdmin() and isset( $_POST['Submit'] ) ) ){
	header('Location: ./');
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


include_once('protegido/mysql.php');

# $idTxt = ''; #VARIABLES QUE ALMACENARAN LOS ID'S DEL CONTENIDO
$bd = new MYSQL;

#CONECTAR A LA BD
$bd->conectar();

# QUERY
$q = 'UPDATE contenido SET description =\''. $_POST["textToEdit"] .'\' WHERE id=' . $_POST['edit'];

# EJECUTA EL QUERY
$bd->query($q);

#DESCONECTAR DE LA BD
$bd->desconectar();


header('Location: ./admin.php?v=null');

?>
