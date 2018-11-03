<?php 
require_once('config.php');
extract($_POST);

if (!empty($_POST) && !empty($firstname) && !empty($lastname) && !empty($age) && !empty($email)) {
	// echo $firstname;
	$query = "INSERT INTO usuario (firstname,lastname,age,email) VALUES ('$firstname', '$lastname', '$age', '$email')";

	if (mysqli_query($con,$query)) {
		header("Location:../index.php");
		return $exito = true;
	}else{
		header("Location:../index.php");
		return $exito = false;
	}

}else{
	echo "<br>No hay datos";
}

 ?>