<?php

$server = "localhost";
$user = "root";
$pass = "";
$bbdd = "bolsatrabajo";

$conexion = mysqli_connect($server,$user,$pass,$bbdd);
if (mysqli_connect_errno()) {
		die ("Error de Conexion a BBDD: ".mysqli_connect_errno());
	}
mysqli_set_charset($conexion,"utf8");

?>
