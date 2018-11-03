<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crud Basico PHP</title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
	</style>
	<?php $exito=false; ?>
</head>
<body>
	<div>
		<?php
			if (!empty($exito) && $exito=true) {
				echo "Registro exitoso!";
			}elseif (!empty($exito) && $exito=false) {
				echo "Registro fallido!";
			}
		?>
	</div>
	<div  class="formulario">
		<h1 align="center">Formulario</h1>
		<form style="padding:10px;" align="center" action="php/create.php" method="post" accept-charset="utf-8">
			<input type="text" name="firstname" placeholder="Nombre"><br>
			<input type="text" name="lastname" placeholder="Apellido"><br>
			<input type="number" name="age" placeholder="Edad"><br>
			<input type="mail" name="email" placeholder="Correo"><br>
			<button type="submit">Guardar</button>
		</form>
	</div>
	<div>
		<table border="1px" style="padding:2px; margin:auto;">
			<thead>
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Edad</th>
					<th>Correo Electronico</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				require_once('php/config.php');

				$query = "SELECT * FROM usuario";

				$lista = mysqli_query($con,$query);
				
				while($row = mysqli_fetch_assoc($lista)): 

				?>
				<tr>
					<td><?=$row['id'] ?></td>
					<td><?=$row['firstname'] ?></td>
					<td><?=$row['lastname'] ?></td>
					<td><?=$row['age'] ?></td>
					<td><?=$row['email'] ?></td>
					<td>
						<a href="php/update.php?id=<?=$row['id'] ?>">Editar</a>
						<a onclick="return confirm('Eliminar?')" href="php/delete.php?id=<?=$row['id'] ?>">Eliminar</a>
					</td>
				</tr>
				<?php endwhile ?>
			</tbody>
		</table>
	</div>
</body>
</html>