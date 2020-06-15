<!DOCTYPE html>
<html>
<head>
	<title>Consultar Roles</title>
	<link rel="stylesheet" type="text/css" href="../util/Estilos.css">
</head>
<body background='../util/SAdmin.png' style='background-repeat: no-repeat; background-position: center top; background-size: 50% ;'>
	
		<h1>Bienvenido Súper Administrador</h1>

	<h2>Consultar Roles</h2>

		<?php 

				include "../model/consultar_roles_model.php";

				$nuevo = new consultarRoles_model();
				$nuevo -> consultarRoles();

 		?>
</body>
</html>