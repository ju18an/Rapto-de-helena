<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrar Administrador</title>
	<link href="../view/SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
	<link href="../view/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="../view/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<body>
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
  <td colspan="2" align="center" valign="top"><?php
error_reporting(0);

 	$id_admin = $_POST["id_admin"];
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$edad = $_POST["edad"];
	$fuerza = $_POST["fuerza"];
	$ejercito = $_POST["ejercito"];
	$contrasena = $_POST["contrasena"];
	


include "../model/registrar_Administrador_model.php";

$user = new registrar_Administrador_model("$id_admin", "$nombre", "$apellido", "$edad", "$fuerza", "$ejercito", "$contrasena");  

echo "<a  class='Volver' href='../view/index_SAdmin_view.php'>Volver</a>";

?></td>
</tr>
</table>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"../view/SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"../view/SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../view/SpryAssets/SpryMenuBarRightHover.gif"});
</script>
		


</body>
</html>

		