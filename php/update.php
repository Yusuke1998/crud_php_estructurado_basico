<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crud Basico PHP</title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		*{
			margin: 10px;
			padding: 0px;
		}
	</style>
</head>
<body>
	<?php
		extract($_GET); 
		require_once('config.php');

		$query = "SELECT * FROM usuario WHERE id = '$id'";

		$usuario = mysqli_query($con,$query);

		$fila = mysqli_fetch_array($usuario);
	?>
	<div>
		<h1>Editar</h1>
		<form action="" method="post">
			<input type="text" name="firstname2" value="<?=$fila['firstname'];?>">
			<input type="text" name="lastname2" value="<?=$fila['firstname'];?>">
			<input type="number" name="age2" value="<?=$fila['age'];?>">
			<input type="email" name="email2" value="<?=$fila['email'];?>">
			<input type="submit" name="actualizado" value="actualizar">
		</form>
	</div>
	<?php
	if (!empty($_POST)) {
		extract($_POST);

		$query = "UPDATE usuario SET firstname='$firstname2', lastname ='$lastname2', age ='$age2', email='$email2' WHERE id = $id ";
		if (mysqli_query($con,$query)) {
			header("Location:../index.php");
		}
	}
	?>
</body>
</html>