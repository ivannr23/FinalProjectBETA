<?php
require("cabecera.php");
include("conexion.php");
$consulta="SELECT usuario, clave FROM usuarios";

$resultado = mysqli_query($conexion,$consulta);

if (mysqli_errno($conexion)) {
 	die ("Error de consulta: ".mysqli_error($conexion));
 }

if ($tupla=mysqli_fetch_array($resultado)) {
  $usuarioTupla=$tupla['usuario'];
  $consulta="DELETE FROM usuarios WHERE usuario='$usuarioTupla'";

  $resultado = mysqli_query($conexion,$consulta);

  if (mysqli_errno($conexion)) {
 	die ("Error de consulta: ".mysqli_error($conexion));
  }
echo "<center>";
  echo "Usuario '$usuarioTupla' borrado<br>";

} else {
  echo "<center>";
	echo "Usuario $usuarioTupla no existe en BBDD";
}

?>
