<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesión</title>
</head>
<body>
	<h1>Iniciar sesión</h1>
	<form action="procesarLogin.php" method="post">
		<p><label for="username">Nombre de usuario:</label>
		<input type="text" id="username" name="username" required></p>
		<p><label for="password">Contraseña:</label>
		<input type="password" id="password" name="password" required></p>
		<p><input type="submit" value="Iniciar sesión"></p>
        <p><a href='index.php'>Inicio</a></p>
	</form>
</body>
</html>
