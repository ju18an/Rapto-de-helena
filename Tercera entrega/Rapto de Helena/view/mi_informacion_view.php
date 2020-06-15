<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrar Guerrero</title>
	<link rel="stylesheet" type="text/css" href="../util/Estilos.css">
</head>
<body>
	<h1>Editar Guerrero</h1>

	<h2>Información del guerrero</h2>

	<?php session_start(); ?>

	<form name="registrar" autocomplete="OFF" action="../controller/formularioEditar_Guerrero_controller.php" method="post">
		
		Numero de identificación: <input type="text" value=" <?php echo $_SESSION['id_guerrero']?>" disabled class="inputs_text"><br><br>
		
		Nombre: <input type="text" value=" <?php echo $_SESSION['nombre']?>" disabled class="inputs_text"><br><br>

		Apellidos: <input type="text" value=" <?php echo $_SESSION['apellido']?>" disabled class="inputs_text"><br><br>

		Edad: <input type="text" name="edad" placeholder="<?php echo $_SESSION['edad']?>" class="inputs_text"><br><br>

		Fuerza: <input type="text" name="fuerza" placeholder="<?php echo $_SESSION['fuerza']?>" class="inputs_text"><br><br>

		Ejército: <input type="text" value=" <?php echo $_SESSION['ejercito']?>" disabled class="inputs_text"><br><br>

		Estado <select name="estado">
					<option>Seleccione</option>
					<option value="1">Vivo</option>
					<option value="0">Muerto</option>
					<option value="2">Herido</option>
			</select><br><br>

		Cargo <input type="text" class="inputs_text" value=" <?php if($_SESSION['rol'] == 'rol_001'){echo 'Súper Administrador';}  if($_SESSION['rol'] == 'rol_002'){echo 'Administrador';} if ($_SESSION['rol'] == 'rol_003'){echo 'Guerrero';}?>" disabled ><br><br>

		

		<input type="submit" class="Enviar" name="enviar">

	</form>

<?php  
	if ($_SESSION["ejercito"] == 'griego') 
	 {
		echo "<br>";
		echo "<a  class='Volver' href='../view/index_Usuario_Griego_view.php'>Volver</a>";
	}

	if ($_SESSION["ejercito"] == 'troyano') 
	 {
		echo "<br>";
		echo "<a  class='Volver' href='../view/index_Usuario_Troyano_view.php'>Volver</a>";
	}	

?>
<a class= "Salir" href="../model/cerrar_session.php">Cerrar Sesión</a>

</body>
</html>