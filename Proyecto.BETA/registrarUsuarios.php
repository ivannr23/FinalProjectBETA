<?php
require("cabecera.php");
?>
<center>
<form method="POST" action="altaUsuarios.php">
	<h2>Registrando Usuario Nuevo</h2>
	Usuario: <input type="text" name="usuario"> <br>
	Clave: <input type="password" name ="clave"> <br>
	E-Mail: <input type="text" name="email"> <br>
	<input type="submit" name="Registrar">
</form>
</center>
</html>
