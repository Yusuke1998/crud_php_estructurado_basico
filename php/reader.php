<?php 
	require_once('config.php');

	$query = "SELECT * FROM usuario";

	$lista = mysqli_query($con,$query);
	
	while($row = mysqli_fetch_assoc($lista)):

        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

    endwhile
 ?>