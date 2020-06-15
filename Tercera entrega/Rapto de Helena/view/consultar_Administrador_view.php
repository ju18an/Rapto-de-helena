<!DOCTYPE html>
<html>
<head>
	<title>CONSTLTAR Administradores</title>
	<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
	<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<body >

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
        <li><a href="registrar_Guerrero_view.php">Registrar Guerrero</a></li>
        <li><a href="registrar_Administrador_view.php">Registrar Administrador</a></li>
      </ul>
    <li><a class="MenuBarItemSubmenu" href="#">Consultas</a>
      <ul>
        <li><a href="consultar_Ejercitos_view.php">Consultar Ejércitos</a></li>
        <li><a href="consultar_Administrador_view.php">Consultar Administradores</a></li>
      </ul>
    </li>
    <li><a href="simular_partida_view.php">Simular Partida</a></li>
    <li><a class="MenuBarItemSubmenu" href="#">Reportes Partidas</a>
      <ul>
        <li><a href="historial_partidas_view.php">Historial de Partidas</a></li>
        <li><a href="historial_de_jugador_view.php">Historial de jugador</a></li>
      </ul>
    </li>
  </ul></td>
  <td colspan="2" align="center" valign="baseline"><h1>Bienvenido Súper Administrador</h1>

	<h2>Consultar Administradores</h2>

	Ejército de los administradores:<br><br>

	<form action="../controller/consultar_Administrador_controller.php" autocomplete="OFF" method="POST">
		<select name="ejercito">
			<option>Seleccione</option>
			<option value="griego">Griegos</option>
			<option value="troyano">Troyanos</option>
		</select>
		<input type="submit" class="Enviar" name="Enviar">		
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