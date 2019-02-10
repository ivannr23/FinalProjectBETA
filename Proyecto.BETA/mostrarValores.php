<?php
//"hardcodemos" datos de usuario
/*$usuario="emoreno";
$nombre="Esther Moreno";
$ciudad="Madrid";
$hobby="Disfrutar";
*/
require("cabecera.php");
include("conexion.php");
session_start();
$usuario= $_SESSION['usuario'];
$consulta = "SELECT usuario FROM usuarios";

$resultado = mysqli_query($conexion,$consulta);
if (mysqli_errno($conexion)) {
	//die ("Número de Error de consulta:". mysqli_errno($conexion));
 	die ("Error de consulta: ".mysqli_error($conexion));
}
while ($tupla = mysqli_fetch_array($resultado)) {
	if ($tupla['usuario']==$usuario) {
    echo "<center>";
    echo "El usuario conectado es ". $usuario. "<br>";
		echo "Hola <b>".$usuario."<br>";
		echo "Si quiere salir pulse <a href='salir.php'>aqui </a>";
	}
}


?>
