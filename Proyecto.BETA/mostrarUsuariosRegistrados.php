<?php
require("cabecera.php");

include("conexion.php");

$consulta = "SELECT usuario, clave FROM usuarios";

$resultado = mysqli_query($conexion,$consulta);
echo "<center>";
echo "<table border='1'><tr><td>USUARIO</td><td>BORRAR</td></tr>";
while ($tupla=mysqli_fetch_array($resultado)) {
	echo "<center>";
	echo "<tr><td>".$tupla['usuario']."</td><td><a href='borrarUsuario.php'>Borrar</a></td></tr>";
}

echo "</table>";



?>
