<?php 

	class consultarJugador
		{

			public function consultarJugador_model($jugador)
				{

					include "conexion.php";

					$result = mysqli_query($db, "SELECT partidas_id_partidas, id_guerrero, nombre, apellido, resultado, dano FROM `guerrero_has_partidas` JOIN guerrero ON id_guerrero = guerrero_id_guerrero WHERE guerrero_id_guerrero = '$jugador'");

					echo "<br><br><table>
	 						<thead>
	 							<tr>
		 							<th>Partida</th>
							 		<th>Nombre</th>
							 		<th>Apellido</th>
							 		<th>Resultado</th> 
							 		<th>Daño Provocado</th>
						 		</tr>
						 	</thead>
						 	<tbody>";
	 				while ($row = $result->fetch_assoc()) 
	 				{
	 					
	 						$ppartida = stripcslashes($row["partidas_id_partidas"]);
	 						$nnombre = stripcslashes($row["nombre"]);
	 						$aapellido = stripcslashes($row["apellido"]);
	 						$rresultado = stripcslashes($row["resultado"]);
	 						$ddaño = stripcslashes($row["dano"]);

	 					echo "<tr>
	 							<td>Partida $ppartida</td>
	 							<td>$nnombre</td
>	 							<td>$aapellido</td>
	 							<td>$rresultado</td>
	 							<td>$ddaño</td>
	 						</tr>";
	 				}
	 		
						 	echo "</tbody>
						 </table>";

						 echo "<br><br><a href='../view/index_SAdmin_view.php'>Volver</a>";
				echo "<br><br><a href='javascript:window.print(); void 0;' style='color:#006666'>Imprimir o Generar PDF</a>";
				}
		}


 ?>