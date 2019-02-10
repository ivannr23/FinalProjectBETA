<?php
//"harcodear" datos correctos de usuario
//$usuario="emoreno";
//$clave="1234";
require("cabecera.php");

$usuarioForm =$_POST['usuario'];
$claveForm=$_POST['clave'];

include("conexion.php");

$consulta = "SELECT usuario, clave FROM usuarios";

$resultado = mysqli_query($conexion,$consulta);
if (mysqli_errno($conexion)) {
	//die ("Número de Error de consulta:". mysqli_errno($conexion));
 	die ("Error de consulta: ".mysqli_error($conexion));
}

while($tupla=mysqli_fetch_array($resultado)) {
	if ($tupla['usuario']==$usuarioForm && $tupla['clave']==$claveForm) {
		echo "Usario correcto";
		session_start();
		$_SESSION['usuario']=$usuarioForm;
		header('Location:mostrarValores.php');
		}
}

echo "Usuario no identificado <br>";
echo "Si quiere volver a contectarse pulse <a href='index.php'>aqui</a><br><br>";
echo "Si quieres registrarte pulsa <a href='registrarUsuarios.php'>aquí</a>";


?>
