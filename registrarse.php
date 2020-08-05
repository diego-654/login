
<?php
	$mensaje = '';
	require "conexion.php";

	if(!empty($_POST['email']) && !empty($_POST['password'])){
		
	$sql = "INSERT INTO usuarios (email, password) VALUES (:email, :password)";
	$stmt = $conexion->prepare($sql);
	$stmt -> bindParam(':email',$_POST['email']);


	$password = password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 4]);
	
	$stmt->bindParam(':password',$password);

	if($stmt->execute()){
		$mensaje ="Usuario creado correctamente";
	}else{
		$mensaje = "ocurrio un error al registrar";
	}
}


?>

<!DOCTYPE html>

<html>
<meta charset="utf-8">
<head>
	<title>Registrate</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<?php
require "header/header.php";
?>
	
	<?php if(!empty($mensaje)){ ?>

	<p><?php echo $mensaje;} ?></p>
	<h1>REGISTRATE</h1>
	<span> o <a href="login.php">Login</a></span>


	<form action="registrarse.php" method="post">
	<input type="text" name="email" maxlength="50" placeholder="Ingrese su Email">
	<input type="password" name="password" maxlength="15" placeholder="Ingrese su contraseña">
	<input type="password" name="confirm_password" maxlength="15" placeholder="Confirme su contraseña">
	<input type="submit" name="send">
	</form>
</body>
</html>