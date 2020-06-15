<?php 

	class historialPartidas
		{

			public function historialPartidas_model()
				{

					include "conexion.php";

					$result = mysqli_query($db, "SELECT * FROM partidas");

					echo "	<form action='../controller/historial_partida_controller.php' method='POST'>";
						echo "<select name= 'partida' >
								<option>Seleccione</option>";
						


					while ($row = mysqli_fetch_assoc($result)) 
						{
						
							$iid_partida = stripcslashes($row["id_partida"]);
							echo "<option value = $iid_partida>Partida $iid_partida</option>";
						}

						echo 	"</select>";
							echo "<input type ='submit' name = 'enviar' value = 'Enviar'>";

							echo "</form>";


				}
		}


 ?>