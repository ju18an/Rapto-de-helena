<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrar Guerrero</title>
	<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
	<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<table class = "inicio" width="100%" height="100%"  >
<tr height="50px">
    <th colspan="2" bgcolor="#00A6FF"></th>
    <th width="352" bgcolor="#00A6FF"></th>
  <th width="153"  align="right" valign="middle" bgcolor="#00A6FF"><ul id="MenuBar2" class="MenuBarHorizontal">
    <li><a class="MenuBarItemSubmenu" href="#">Opciones</a>
      <ul>
        <li><a href="../model/cerrar_session.php">Cerrar sesión</a></li>
      </ul>
    </li>
  </ul>
  </th>
  
</tr>
<tr>
  <td width="266" height="565" valign="top" scope="row" bgcolor="#00A6FF">
  
  
  <?php 
		session_start();

	if ($_SESSION["rol"] == 'rol_001') {
		echo "<body >";	
 	echo'<ul id="MenuBar1" class="MenuBarVertical">';
   echo ' <li><a class="MenuBarItemSubmenu" href="#">Registros</a>';
     echo ' <ul>';
       echo ' <li><a href="registrar_Guerrero_view.php">Registrar Guerrero</a></li>';
       echo ' <li><a href="registrar_Administrador_view.php">Registrar Administrador</a></li>';
     echo ' </ul>';
   echo ' <li><a class="MenuBarItemSubmenu" href="#">Consultas</a>';
     echo ' <ul>';
      echo '  <li><a href="consultar_Ejercitos_view.php">Consultar Ejercitos</a></li>';
       echo ' <li><a href="consultar_Administrador_view.php">Consultar Administradores</a></li>';
    echo '  </ul>';
   echo ' </li>';
   echo ' <li><a href="simular_partida_view.php">Simular Partida</a></li>';
   echo ' <li><a class="MenuBarItemSubmenu" href="#">Reportes Partidas</a>';
     echo ' <ul>';
       echo ' <li><a href="historial_partidas_view.php">Historial de Partidas</a></li>';
        echo '<li><a href="historial_de_jugador_view.php">Historial de jugador</a></li>';
     echo ' </ul>';
   echo ' </li>';
  echo '</ul></td>';}?>
  
  <?php if ($_SESSION["rol"] == 'rol_002') {
		if ($_SESSION["ejercito"] == 'griego') {
			echo "<body >";			
			echo '<ul id="MenuBar1" class="MenuBarVertical">';
   			echo ' <li><a class="MenuBarItemSubmenu" href="#">Registros</a>';
     		echo ' <ul>';
      		 echo ' <li><a href="registrar_Guerrero_view.php">Registrar Guerrero</a></li>';
     		echo ' </ul>';
   			echo ' <li><a class="MenuBarItemSubmenu" href="#">Consultas</a>';
     echo ' <ul>';
      echo '  <li><a href="consultar_Ejercitos_view.php">Consultar Ejercitos</a></li>';
    echo '  </ul>';
   echo ' </li>';
   echo '</td>';
		}
		
	}?>
    
    <?php
	if ($_SESSION["rol"] == 'rol_002') {
		if ($_SESSION["ejercito"] == 'troyano') {
			echo "<body >";			
			echo '<ul id="MenuBar1" class="MenuBarVertical">';
   			echo ' <li><a class="MenuBarItemSubmenu" href="#">Registros</a>';
     		echo ' <ul>';
      		 echo ' <li><a href="registrar_Guerrero_view.php">Registrar Guerrero</a></li>';
     		echo ' </ul>';
   			echo ' <li><a class="MenuBarItemSubmenu" href="#">Consultas</a>';
     echo ' <ul>';
      echo '  <li><a href="consultar_Ejercitos_view.php">Consultar Ejercitos</a></li>';
    echo '  </ul>';
   echo ' </li>';
   echo '</td>';
		}
		
	}

?>
  
  <!-- AQUI TERMINA EL MENU VERTICAL -->
  <td colspan="2" align="center" valign="top">
  
  <?php 


	if ($_SESSION["rol"] == 'rol_001') 
	{
		echo "<h1>Bienvenido Súper Administrador</h1>";
	}
	if ($_SESSION["rol"] == 'rol_002') 
	{
		if ($_SESSION["ejercito"] == 'griego') 
		{
			echo "<h1>Bienvenido Administrador Griego</h1>";
		}
	}
	if ($_SESSION["rol"] == 'rol_002') 
	{
		if ($_SESSION["ejercito"] == 'troyano') 
		{
			echo "<h1>Bienvenido Administrador Troyano</h1>";
		}
	}?>
	

	


<h2>Registrar Guerrero</h2>


	<form name="registrar" autocomplete="OFF" action="../controller/registrar_Guerrero_controller.php" method="post">
		
		<h3>Numero de identificación: <input type="text" name="id_guerrero" class="inputs_text"><br></h3>
		
		<h3>Nombre: <input type="text" name="nombre" class="inputs_text"><br></h3>

		<h3>Apellidos: <input type="text" name="apellido" class="inputs_text"><br></h3>

		<h3>Edad: <input type="text" name="edad" class="inputs_text"><br></h3>

		<h3>Fuerza: <input type="text" name="fuerza" class="inputs_text"><br></h3>

		<?php  



			if ($_SESSION["rol"] == 'rol_001') 
			{
				echo "<h3> Ejército:  <select name='ejercito'></h3>";
					echo "<option>Seleccione</option>";
					echo "<option value='griego'>Griego</option>";
					echo "<option value='troyano'>Troyano</option>";
				echo "</select><br><br>";
			}

				if ($_SESSION["rol"] == 'rol_002') 
					{
						if ($_SESSION["ejercito"] == 'griego') 
							{
								echo "<h3> Ejército:  <select name='ejercito'></h3>";
									echo "<option>Seleccione</option>";
									echo "<option value='griego'>Griego</option>";
								echo "</select><br><br>";
							}
					}

				if ($_SESSION["rol"] == 'rol_002') 
					{
						if ($_SESSION["ejercito"] == 'troyano') 
							{
								echo "<h3> Ejército:  <select name='ejercito'></h3>";
									echo "<option>Seleccione</option>";
									echo "<option value='troyano'>Troyano</option>";
								echo "</select><br><br>";
							}
					}
			
			
			?>
            <h3> Clase de guerrero:  <select name='clase'></h3>
					<option value='arquero'>Arquero</option>
					<option value='artillero'>Artillero</option>
                    <option value='caballero'>Caballero</option>
				</select><br><br>

		<h3>Contraseña: <input type="password" name="contrasena" class="inputs_text"><br></h3>

		<input type="submit" class="Enviar" name="enviar">

	</form>
	
	<?php  
		if ($_SESSION["rol"] == 'rol_001') {
			echo "<br>";
			echo "<a  class='Volver' href='../view/index_SAdmin_view.php'>Volver</a>";
		}

		if ($_SESSION["rol"] == 'rol_002') 
					{
						if ($_SESSION["ejercito"] == 'griego') 
							{
								echo "<br>";
								echo "<a  class='Volver' href='../view/index_Administrador_Griego_view.php'>Volver</a>";
							}
					}

		if ($_SESSION["rol"] == 'rol_002') 
					{
						if ($_SESSION["ejercito"] == 'troyano') 
							{
								echo "<br>";
								echo "<a  class='Volver' href='../view/index_Administrador_Troyano_view.php'>Volver</a>";
							}
					}
	?>
   </td>
</tr>
</table>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>