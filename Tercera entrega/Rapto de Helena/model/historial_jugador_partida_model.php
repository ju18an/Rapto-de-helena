<?php 

	class historialJugador
		{

			public function historialJugador_model()
				{
					include "conexion.php";

					$result = mysqli_query($db, "SELECT * FROM guerrero WHERE roles_id_rol = 'rol_003'");

					echo "	<form action='../controller/consultar_jugador_partida_controller.php' method='POST'>";
						echo "<select name= 'jugador' >
								<option>Seleccione</option>";
						


					while ($row = mysqli_fetch_assoc($result)) 
						{
						
							$jjugador = stripcslashes($row["id_guerrero"]);
							echo "<option value = $jjugador>$jjugador</option>";
						}

						echo 	"</select>";
							echo "<input type ='submit' name = 'enviar' value = 'Enviar'>";

							echo "</form>";
				}
		}

 ?>