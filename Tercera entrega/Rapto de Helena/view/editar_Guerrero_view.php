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

	<h2>Editar guerrero </h2>

Numero de Identificación del Guerrero:<br><br>

	<form action="../controller/editar_Guerrero_controller.php" autocomplete="OFF" method="POST">
			
			<input type="text" name="id_guerrero" class="inputs_text">

			<input type="submit" name="Enviar" class="Enviar">


	</form>
    
  </td>
</tr>
</table>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>

