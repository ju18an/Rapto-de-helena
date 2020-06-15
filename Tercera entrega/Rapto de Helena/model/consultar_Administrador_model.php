<?php	

	class consultar_administrador_model
	{


			public function getAdministrador($ejercito)
				{

					include "conexion.php";


					$sql = "SELECT * FROM guerrero WHERE ejercito  = '$ejercito' && roles_id_rol = 'rol_002'";


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
									echo "<th>Ejercito</th>";
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


?>