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
  <td width="266" height="565" valign="top" scope="row" bgcolor="#00A6FF"><ul id="MenuBar1" class="MenuBarVertical">
    <li><a class="MenuBarItemSubmenu" href="#">Registros</a>
      <ul>
        <li><a href="../view/registrar_Guerrero_view.php">Registrar Guerrero</a></li>
        <li><a href="../view/registrar_Administrador_view.php">Registrar Administrador</a></li>
      </ul>
    <li><a class="MenuBarItemSubmenu" href="#">Consultas</a>
      <ul>
        <li><a href="../view/consultar_Ejercitos_view.php">Consultar Ejercitos</a></li>
        <li><a href="../view/consultar_Administrador_view.php">Consultar Administradores</a></li>
      </ul>
    </li>
    <li><a href="../view/simular_partida_view.php">Simular Partida</a></li>
    <li><a class="MenuBarItemSubmenu" href="#">Reportes Partidas</a>
      <ul>
        <li><a href="../view/historial_partidas_view.php">Historial de Partidas</a></li>
        <li><a href="../view/historial_de_jugador_view.php">Historial de jugador</a></li>
      </ul>
    </li>
  </ul></td>
  <td colspan="2" align="center" valign="top"><h1> <?php 
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
</body>
</html>

<?php
error_reporting(0);

 	$id_guerrero = $_POST["id_guerrero"];
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$edad = $_POST["edad"];
	$fuerza = $_POST["fuerza"];
	$ejercito = $_POST["ejercito"];
	$contrasena = $_POST["contrasena"];
	$clase = $_POST["clase"];

	if ($edad <15 || $edad > 60 ) {
		$edad = 25;
	}

	if ($fuerza  <1 || $edad  >10) {
		$fuerza = 5;
	}
	

include "../model/registrar_Guerrero_model.php";

$user = new registrar_Guerrero_model("$id_guerrero", "$nombre", "$apellido", "$edad", "$fuerza", "$ejercito", "$contrasena",  "$clase");  
echo "<br>";
echo "<a  class='Volver' href='../view/registrar_Guerrero_view.php'>Volver</a>"

?></h1></td>
</tr>
</table>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"../view/SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"../view/SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../view/SpryAssets/SpryMenuBarRightHover.gif"});
</script>
