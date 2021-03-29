<?php 

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$ccomment=$_POST['ccomment'];
$verificacion=$_POST['verificacion'];
$valora=$_POST['valora'];
$valorb=$_POST['valorb'];
$suma=$valora+$valorb;
if ($suma==$verificacion) {
	$nombre=filter_var($nombre,FILTER_SANITIZE_STRING);
	$email=filter_var($email,FILTER_SANITIZE_EMAIL);
	$tel=filter_var($tel,FILTER_SANITIZE_STRING);
	$ccomment=filter_var($ccomment,FILTER_SANITIZE_STRING);
	include('enviomail.php');
}
else {
	echo '
	<div class="alert error">
	<span class="closebtn">×</span>
	<b>A ocurrido un error!</b> No se pudo enviar tu mensaje asegurate de llenar todo el formulario correctamente y de tener una conexión a internet.
	</div>';
}


?>






