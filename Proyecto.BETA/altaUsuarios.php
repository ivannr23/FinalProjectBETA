<?php
require("cabecera.php");
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$email = $_POST['email'];
//$claveCifrada = crypt($clave,'$2a$07$usesomesillystringforsalt$');
$claveCifrada = password_hash($clave,PASSWORD_BCRYPT);

include("conexion.php");
$consulta = "INSERT INTO usuarios (usuario,clave,email) VALUES ('$usuario','$clave','$email')"; //¡¡OJO TAMAÑO DEL CAMPO CLAVE!!
$resultado = mysqli_query($conexion,$consulta);
if (mysqli_errno($conexion)) {
 	die ("Error de consulta: ".mysqli_error($conexion));
}
echo "<center>";
echo "Insertado usuario.<br>";
$mensaje = "Registro en tuweb.com\n\n";
$mensaje .= "Estos son tus datos de registro:\n";
$mensaje .= "Usuario: $usuario.\n";
$mensaje .= "Contraseña: $clave.\n\n";
//$mensaje .= "Debes activar tu cuenta pulsando este enlace: http://www.tuweb.com/activacion.php?id=$aleatorio";

$asunto = "Activación de tu cuenta en tuweb.com";

mail($email,$asunto,$mensaje);
echo "Se ha enviado un mensaje a tu correo electronico con el código de activación";

?>
