<?php 

	class editarGuerrero_model
	{

		public function editar_guerrero($edad, $fuerza, $estado)
		{

			include "conexion.php";

			

			$id_user = $_SESSION['id_guerrero'];

		mysqli_query($db, "UPDATE guerrero SET edad = '$edad', fuerza = '$fuerza', estado = '$estado' WHERE id_guerrero = '$id_user' ");

		echo "SI ACTUALIZO";
		
	

		}

	}






 ?>