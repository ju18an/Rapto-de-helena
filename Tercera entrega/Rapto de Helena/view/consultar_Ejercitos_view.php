<!DOCTYPE html>
<html>
<head>
	<title>CONSTLTAR EJÉRCITOS</title>
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
  <td colspan="2" align="center" valign="baseline"><?php 

		session_start();

	if ($_SESSION["rol"] == 'rol_001') {
		echo "<body>";
		echo "<h1>Bienvenido Súper Administrador</h1>";
	}

	if ($_SESSION["rol"] == 'rol_002') {
		if ($_SESSION["ejercito"] == 'griego') {
			echo "<body>";
			echo "<h1>Bienvenido Administrador Griego</h1>";
		}
		
	}

	if ($_SESSION["rol"] == 'rol_002') {
		if ($_SESSION["ejercito"] == 'troyano') {
			echo "<body>";
			echo "<h1>Bienvenido Administrador Troyano</h1>";
		}
		
	}

?>

	<h2>Consultar Ejército</h2>

	<?php 
error_reporting(0);
	session_start();


	if ($_SESSION["rol"] == 'rol_001') {

		echo "Seleccione el Ejército a consultar <br><br>";

	echo "<form action='../controller/consultar_Ejercitos_controller.php' autocomplete='OFF' method='POST'>";
		echo"<select name='ejercito'>";
			echo"<option>Seleccione</option>";
			echo"<option value='griego'>Griegos</option>";
			echo"<option value='troyano'>Troyanos</option>";
		echo"</select>";
		echo"<input type='submit' class='Enviar' name='Enviar'>";		
	echo"</form>";

	//echo "<a classs='Volver' href='index_SAdmin_view.php'>Volver</a>";

			
	} 

		else
		{

			header("location: ../model/consultar_Ejercitos_model.php");
		}


	?></td>
</tr>
</table>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>