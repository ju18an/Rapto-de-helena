

<?php 
 
 
	 class registrar_Guerrero_model 
	{


		 function __construct($id_guerrero,$nombre,$apellido,$edad,$fuerza,$ejercito,$contrasena, $clase)
		 {

				 include "conexion.php";

				 session_start();

				 mysqli_query($db, "INSERT INTO guerrero (id_guerrero, nombre, apellido, edad, fuerza, ejercito, clase,  estado, roles_id_rol) VALUES ('$id_guerrero', '$nombre', '$apellido', '$edad', '$fuerza', '$ejercito', '$clase', 1, 'rol_003')") or die(mysqli_error($db));

				 	//echo "SI SE PUDO REGISTRAR EN TABLA GUERRERO";

				 mysqli_query($db, "INSERT INTO login (id_login, contrasena, guerrero_id_guerrero) VALUES (NULL, '$contrasena', '$id_guerrero')") or die(mysqli_error($db));


				 echo "<h2>Se registro correctamente </h2> <br><br>";

				

		}
	}
?>