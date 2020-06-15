<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrar Guerrero</title>
	<link href="../view/SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
	<link href="../view/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="../view/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
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

	error_reporting(0);
	
		session_start();

	if ($_SESSION["rol"] == 'rol_001') {
		echo "<body >";
		echo "<h1>Bienvenido Súper Administrador</h1>";
	}

	if ($_SESSION["rol"] == 'rol_002') {
		if ($_SESSION["ejercito"] == 'griego') {
			echo "<body >";
			echo "<h1>Bienvenido Administrador Griego</h1>";
		}
		
	}

	if ($_SESSION["rol"] == 'rol_002') {
		if ($_SESSION["ejercito"] == 'troyano') {
			echo "<body >";
			echo "<h1>Bienvenido Administrador Troyano</h1>";
		}
		
	}

?>
	<h1>Editar Guerrero</h1>

	<h2>Información del guerrero</h2>

	<form name="registrar" autocomplete="OFF" action="../controller/formularioEditar_Guerrero_controller.php" method="POST">
		
		<h3>Numero de identificación: <input type="text" value=" <?php echo $_SESSION['iid_guerrero']?>" disabled class="inputs_text"><br></h3>
		
		<h3>Nombre: <input type="text" value=" <?php echo $_SESSION['nnombre']?>" disabled class="inputs_text"><br></h3>

		<h3>Apellidos: <input type="text" value=" <?php echo $_SESSION['aapellido']?>" disabled class="inputs_text"><br></h3>

		<h3>Edad: <input type="text" name="edad" placeholder="<?php echo $_SESSION['eedad']?>" class="inputs_text"><br></h3>

		<h3>Fuerza: <input type="text" name="fuerza" placeholder="<?php echo $_SESSION['ffuerza']?>" class="inputs_text"><br></h3>

		<h3>Ejército: <input type="text" value=" <?php echo $_SESSION['eejercito']?>" disabled class="inputs_text"><br></h3>

		<h3>Estado <select name="estado">
					<option>Seleccione</option>
					<option value="1">Vivo</option>
					<option value="0">Muerto</option>
					<option value="2">Herido</option>
			</select><br></h3>

		<h3>Cargo <input type="text" class="inputs_text" value=" <?php if($_SESSION['rrol'] == 'rol_001'){echo 'Súper Administrador';}  if($_SESSION['rrol'] == 'rol_002'){echo 'Administrador';} if ($_SESSION['rrol'] == 'rol_003'){echo 'Guerrero';}?>" disabled ><br></h3>

		

		<input type="submit" class="Enviar" name="enviar">

	</form>

</td>
</tr>
</table>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"../view/SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"../view/SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../view/SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
