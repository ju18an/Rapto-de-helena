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
		session_start();

	if ($_SESSION["rol"] == 'rol_001') {
		echo "<body >";	
 	echo'<ul id="MenuBar1" class="MenuBarVertical">';
   echo ' <li><a class="MenuBarItemSubmenu" href="#">Registros</a>';
     echo ' <ul>';
       echo ' <li><a href="../view/registrar_Guerrero_view.php">Registrar Guerrero</a></li>';
       echo ' <li><a href="../view/registrar_Administrador_view.php">Registrar Administrador</a></li>';
     echo ' </ul>';
   echo ' <li><a class="MenuBarItemSubmenu" href="#">Consultas</a>';
     echo ' <ul>';
      echo '  <li><a href="../view/consultar_Ejercitos_view.php">Consultar Ejercitos</a></li>';
       echo ' <li><a href="../view/consultar_Administrador_view.php">Consultar Administradores</a></li>';
    echo '  </ul>';
   echo ' </li>';
   echo ' <li><a href="../view/simular_partida_view.php">Simular Partida</a></li>';
   echo ' <li><a class="MenuBarItemSubmenu" href="#">Reportes Partidas</a>';
     echo ' <ul>';
       echo ' <li><a href="../view/historial_partidas_view.php">Historial de Partidas</a></li>';
        echo '<li><a href="../view/historial_de_jugador_view.php">Historial de jugador</a></li>';
     echo ' </ul>';
   echo ' </li>';
  echo '</ul></td>';}?>
  
  <?php if ($_SESSION["rol"] == 'rol_002') {
		if ($_SESSION["ejercito"] == 'griego') {
			echo "<body >";			
			echo '<ul id="MenuBar1" class="MenuBarVertical">';
   			echo ' <li><a class="MenuBarItemSubmenu" href="#">Registros</a>';
     		echo ' <ul>';
      		 echo ' <li><a href="../view/registrar_Guerrero_view.php">Registrar Guerrero</a></li>';
     		echo ' </ul>';
   			echo ' <li><a class="MenuBarItemSubmenu" href="#">Consultas</a>';
     echo ' <ul>';
      echo '  <li><a href="../view/consultar_Ejercitos_view.php">Consultar Ejercitos</a></li>';
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
      		 echo ' <li><a href="../view/registrar_Guerrero_view.php">Registrar Guerrero</a></li>';
     		echo ' </ul>';
   			echo ' <li><a class="MenuBarItemSubmenu" href="#">Consultas</a>';
     echo ' <ul>';
      echo '  <li><a href="../view/consultar_Ejercitos_view.php">Consultar Ejercitos</a></li>';
    echo '  </ul>';
   echo ' </li>';
   echo '</td>';
		}
		
	}

?>
  
  <!-- AQUI TERMINA EL MENU VERTICAL -->
  <td colspan="2" align="center" valign="top">


<?php 

	$edad = $_POST["edad"];
	$fuerza =$_POST["fuerza"];
	$estado = $_POST["estado"];

	include "../model/editar_guerrero_model.php";

	$nuevo = new editarGuerrero_model();
	$nuevo -> editar_guerrero($edad, $fuerza, $estado);

if ($_SESSION["rol"] == 'rol_003') {
	if ($_SESSION["ejercito"] == 'griego') 
	 {
		echo "<br>";
		echo "<a href='../view/index_Usuario_Griego_view.php'>Volver</a>";
		echo "<br>";
	}
}

if ($_SESSION["rol"] == 'rol_003') {
	if ($_SESSION["ejercito"] == 'troyano') 
	 {
		echo "<br>";
		echo "<a  class='Volver' href='../view/index_Usuario_Troyano_view.php'>Volver</a>";
	}
}	
	if ($_SESSION["rol"] == 'rol_001') {
		echo "<br>";
		echo "<a class='Volver' href='../view/index_SAdmin_view.php'>Volver</a>";
	}

	if ($_SESSION["rol"] == 'rol_002') {
		if ($_SESSION["ejercito"] == 'griego') {
			echo "<br>";
			echo "<a class='Volver' href='../view/index_Administrador_Griego_view.php'>Volver</a>";
		
	}
}

	if ($_SESSION["rol"] == 'rol_002') {
		if ($_SESSION["ejercito"] == 'troyano') {
			echo "<br>";
			echo "<a class='Volver' href='../view/index_Administrador_Troyano_view.php'>Volver</a>";
		}
		
	}
 ?>
</td>
</tr>
</table>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"../view/SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"../view/SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../view/SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>