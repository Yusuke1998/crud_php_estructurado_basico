<?php 
	require_once('config.php');
	extract($_GET);
	$query = "DELETE FROM usuario WHERE id='$id'";
	
	if (mysqli_query($con,$query)) {
		header("Location:../index.php");
	}else{
		echo "No se pudo eliminar!";
	}

 ?>