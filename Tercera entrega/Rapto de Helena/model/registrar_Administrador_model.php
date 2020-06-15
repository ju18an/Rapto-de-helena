<?php 
 
	 class registrar_Administrador_model 
	{


		 function __construct($id_admin,$nombre,$apellido,$edad,$fuerza,$ejercito,$contrasena)
		 {

				 include "conexion.php";

				 session_start();

				 mysqli_query($db, "INSERT INTO guerrero (id_guerrero, nombre, apellido, edad, fuerza, ejercito, estado, roles_id_rol) VALUES ('$id_admin', '$nombre', '$apellido', '$edad', '$fuerza', '$ejercito' , 1, 'rol_002')") or die(mysqli_error($db));

				 	//echo "SI SE PUDO REGISTRAR EN TABLA GUERRERO";

				 mysqli_query($db, "INSERT INTO login (id_login, contrasena, guerrero_id_guerrero) VALUES ( NULL, '$contrasena', '$id_admin')") or die(mysqli_error($db));

				echo "<h2>Se registro correctamente </h2> <br><br>";

				
		}
	}
?>