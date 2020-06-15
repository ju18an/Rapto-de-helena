  <?php
error_reporting(0);	
session_start();

	class consultar_ejercito_model
	{


		public function getGuerreros($ejercito)
		{

					include "conexion.php";

					

				if ($_SESSION["rol"] == 'rol_001') 
				{
					

					$sql = "SELECT * FROM `guerrero` WHERE ejercito = '$ejercito' && roles_id_rol = 'rol_003'";


						if(!$result = $db->query($sql))
						{
  							die('Pailas!!! [' . $db->error . ']');
						}

						echo "<br>";
						echo "<br>";
						echo "<table CELLSPACING='10'>";

							echo "<thead>";
								echo "<tr>";
									echo "<th>Numero de identidad</th>";
									echo "<th>Nombre</th>";
									echo "<th>Apellido</th>";
									echo "<th>Edad</th>";
									echo "<th>Fuerza</th>";
									echo "<th>Ejército</th>";
									echo "<th>Estado</th>";
									echo "<th><a href='../view/editar_Guerrero_view.php'>Editar</a></th>";
								echo "</tr>";
							echo "</thead>";

					
						while($row = $result-> fetch_assoc())
						{
							echo "<tr>";

								 $iid_guerrero = stripslashes($row["id_guerrero"]);
								 $nnombre = stripslashes($row["nombre"]);
								 $aapellido = stripslashes($row["apellido"]);
								 $eedad = stripslashes($row["edad"]);
								 $ffuerza = stripslashes($row["fuerza"]);
								 $eejercito = stripslashes($row["ejercito"]);
								 $eestado = stripslashes($row["estado"]);

								echo "<td>$iid_guerrero</td>";
								echo "<td>$nnombre</td>";
								echo "<td>$aapellido</td>";
								echo "<td>$eedad</td>";
								echo "<td>$ffuerza</td>";
								echo "<td>$eejercito</td>";
								if ($eestado == 1) {
									echo "<td>Vivo</td>";
								}
								if ($eestado == 0) {
									echo "<td>Muerto</td>";
								}
								if ($eestado == 2) {
									echo "<td>Herido</td>";
								}
								
	
								echo "</tr>";

						}
						
						echo "</table>";

						echo "<br>";
			echo "<a  class='Volver' href='../view/index_SAdmin_view.php'>Volver</a>";

			echo "<br><br>";

			echo "<a href='javascript:window.print(); void 0;' style='color:#006666'>Imprimir o Generar PDF</a>";




				}
		}


			public function getGuerreros2(){

echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Súper Administrador</title>
	<link href="../view/SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
	<link href="../view/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="../view/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
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
  <td width="266" height="565" valign="top" scope="row" bgcolor="#00A6FF">
  <ul id="MenuBar1" class="MenuBarVertical">
    <li><a class="MenuBarItemSubmenu" href="#">Registros</a>
      <ul>
        <li><a href="../view/registrar_Guerrero_view.php">Registrar Guerrero</a></li>
      </ul>
    <li><a class="MenuBarItemSubmenu" href="#">Consultas</a>
      <ul>
        <li><a href="../view/consultar_Ejercitos_view.php">Consultar Ejércitos</a></li>
      </ul>
    </li>
   
  </td>
  <td colspan="2" align="center" valign="baseline">';

  session_start();

				include "conexion.php";

			if ($_SESSION["rol"] == 'rol_002') 
			{
				if ($_SESSION["ejercito"] == 'griego') 


				{

					echo "<h2>Consultar Ejército</h2>";

					$sql2 = "SELECT * FROM `guerrero` WHERE ejercito = 'griego' && roles_id_rol = 'rol_003'";


						if(!$result = $db->query($sql2))
						{
  							die('Pailas!!! [' . $db->error . ']');
						}

						
						
						echo "<table>";
							echo "<thead>";
								echo "<tr>";
									echo "<th>Numero de identidad</th>";
									echo "<th>Nombre</th>";
									echo "<th>Apellido</th>";
									echo "<th>Edad</th>";
									echo "<th>Fuerza</th>";
									echo "<th>Ejército</th>";
									echo "<th>Estado</th>";
									echo "<th><a href='../view/editar_Guerrero_view.php'>Editar</a></th>";
								echo "</tr>";
							echo "</thead>";


						while($row = $result-> fetch_assoc())
						{
							

							echo "<tr>";

								 $iid_guerrero = stripslashes($row["id_guerrero"]);
								 $nnombre = stripslashes($row["nombre"]);
								 $aapellido = stripslashes($row["apellido"]);
								 $eedad = stripslashes($row["edad"]);
								 $ffuerza = stripslashes($row["fuerza"]);
								 $eejercito = stripslashes($row["ejercito"]);
								 $eestado = stripslashes($row["estado"]);

								echo "<td>$iid_guerrero</td>";
								echo "<td>$nnombre</td>";
								echo "<td>$aapellido</td>";
								echo "<td>$eedad</td>";
								echo "<td>$ffuerza</td>";
								echo "<td>$eejercito</td>";
								if ($eestado == 1) {
									echo "<td>Vivo</td>";
								}
								if ($eestado == 0) {
									echo "<td>Muerto</td>";
								}
								if ($eestado == 2) {
									echo "<td>Herido</td>";
								}
								
	
								echo "</tr>";
							

						}
						echo "</table>";
						

						echo "<br>";
						echo "<a  class='Volver' href='../view/index_Administrador_Griego_view.php'>Volver</a><br><br>";
						echo "<br><br><a href='javascript:window.print(); void 0;' style='color:#006666'>Imprimir o Generar PDF</a>";
				
				}
			}


			if ($_SESSION["rol"] == 'rol_002') 
			{
				if ($_SESSION["ejercito"] == 'troyano') 
				{

					echo "<h2>Consultar Ejército</h2>";


					$sql3 = "SELECT * FROM `guerrero` WHERE ejercito = 'troyano' && roles_id_rol = 'rol_003'";


						if(!$result = $db->query($sql3))
						{
  							die('Pailas!!! [' . $db->error . ']');
						}

						
						
							echo "<table>";
							echo "<thead>";
								echo "<tr>";
									echo "<th>Numero de identidad</th>";
									echo "<th>Nombre</th>";
									echo "<th>Apellido</th>";
									echo "<th>Edad</th>";
									echo "<th>Fuerza</th>";
									echo "<th>Ejército</th>";
									echo "<th>Estado</th>";
									echo "<th><a href='../view/editar_Guerrero_view.php'>Editar</a></th>";
								echo "</tr>";
							echo "</thead>";


						while($row = $result-> fetch_assoc())
						{
							

							echo "<tr>";

								 $iid_guerrero = stripslashes($row["id_guerrero"]);
								 $nnombre = stripslashes($row["nombre"]);
								 $aapellido = stripslashes($row["apellido"]);
								 $eedad = stripslashes($row["edad"]);
								 $ffuerza = stripslashes($row["fuerza"]);
								 $eejercito = stripslashes($row["ejercito"]);
								 $eestado = stripslashes($row["estado"]);

								echo "<td>$iid_guerrero</td>";
								echo "<td>$nnombre</td>";
								echo "<td>$aapellido</td>";
								echo "<td>$eedad</td>";
								echo "<td>$ffuerza</td>";
								echo "<td>$eejercito</td>";
								if ($eestado == 1) {
									echo "<td>Vivo</td>";
								}
								if ($eestado == 0) {
									echo "<td>Muerto</td>";
								}
								if ($eestado == 2) {
									echo "<td>Herido</td>";
								}
								
	
								echo "</tr>";

						}//Fin del While
						echo "</table>";
					

						echo "<br>";
						echo "<a  class='Volver' href='../view/index_Administrador_Troyano_view.php'>Volver</a>";
						echo "<br><br><a href='javascript:window.print(); void 0;' style='color:#006666'>Imprimir o Generar PDF</a>";
					
				}//fin 2 if
			}//fin 1 if</td>
echo '</tr>';
echo '</table>';

echo '<script type="text/javascript">';
echo 'var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"../view/SpryAssets/SpryMenuBarRightHover.gif"});';
echo 'var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgDown:"../view/SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../view/SpryAssets/SpryMenuBarRightHover.gif"});';
echo '</script>';
echo '</body>';
echo '</html>';
				

		}
								
	}
	if ($_SESSION["rol"] == 'rol_002') 
			{

	$nuevo = new consultar_ejercito_model();
	$nuevo -> getGuerreros2();
	}

?>

