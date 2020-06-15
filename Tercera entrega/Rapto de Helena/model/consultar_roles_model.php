<?php 

	class consultarRoles_model
	{

		public function consultarRoles()
		{

			include "conexion.php";


					$sql = "SELECT * FROM `roles`";


						if(!$result = $db->query($sql))
						{
  							die('Pailas!!! [' . $db->error . ']');
						}

						
						echo "<table CELLSPACING='10'>";

							echo "<thead>";
								echo "<tr>";
									echo "<th>ID del Rol</th>";
									echo "<th>Nombre</th>";
									echo "<th>Estado</th>";
									echo "</tr>";
							echo "</thead>";

							

						while($row = $result-> fetch_assoc())
						{
							

							echo "<tr>";

								 $iid_rol = stripslashes($row["id_rol"]);
								 $nnombre_rol = stripslashes($row["desc_rol"]);
								 $eestado = stripslashes($row["estado_rol"]);


								echo "<td>$iid_rol</td>";
								echo "<td>$nnombre_rol</td>";
								echo "<td>$eestado</td>";
								echo "<td><form action = '#' method = 'POST'><input type= 'submit' name= 'desactivar' value= 'Desactivar'></form></td>";
								echo "<td><form action = '#' method = 'POST'><input type= 'submit' name= 'activar' value= 'Activar'></form></td>";
								echo "</tr>";

										 
										 if (isset($_POST["desactivar"])) 
												{
													mysqli_query($db, "UPDATE `roles` SET `estado_rol` = '0' WHERE `id_rol` = '$iid_rol';");
												}
									
								
										 
										if (isset($_POST["activar"])) 
											{
												mysqli_query($db, "UPDATE `roles` SET `estado_rol` = '1' WHERE `id_rol` = '$iid_rol';");
											}
										 				
						}
						
						
									
								

						echo "</table>";

						echo "<br>";
						echo "<a class='Volver' href='../view/index_SAdmin_view.php'>Volver</a>";

						echo "<br><br>";

						echo "<a href='javascript:window.print(); void 0;' style='color:#006666'>Imprimir o Generar PDF</a>";

						echo "<a class= 'Salir' href='../model/cerrar_session.php'>Cerrar Sesión</a>";
		}

	}



 ?>