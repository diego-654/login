<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<?php
	require "header/header.php"
	?>
	<h1>LOGIN</h1>
	<span> o <a href="registrarse.php">Registrate</a></span>
	<form action="login.php" method="post">
	<input type="text" name="email" placeholder="Ingrese su Email">
	<input type="password" name="password" placeholder="Ingrese su contraseña">
	<input type="submit" name="send">
	</form>
</body>
</html>