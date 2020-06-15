<?php

	class consultar_ejercito_partida_model
	{


		public function getGuerrerosTroyanos()
		{

					include "conexion.php";	

					//JUGADOR TROYANO 1		

					$result =mysqli_query($db, "SELECT * FROM `guerrero` WHERE ejercito = 'troyano' && roles_id_rol = 'rol_003'") ;

					echo "<h2>Guerreros Troyanos</h2>";

					echo "<form action = '../controller/partidavariables_controller.php' method='POST'> ";

					
					echo " Elejir Primer Guerrero Troyano:
 								<select name = 'troyano1'>
 									<option>Seleccione</option>"	;


						while($row = mysqli_fetch_assoc($result))					
						{				
								$nnombre = stripslashes($row["nombre"]);
								$iid_guerrero = stripcslashes($row["id_guerrero"]);

								echo $nnombre;
								echo $iid_guerrero;
								
							 echo "<option value = '$iid_guerrero'>$nnombre</option>";

						}
						echo "</select>";
						echo "<br><br>";


						//JUGADOR TROYANO 2		

					$result2 =mysqli_query($db, "SELECT * FROM `guerrero` WHERE ejercito = 'troyano' && roles_id_rol = 'rol_003'") ;

					echo "<form action = '../controller/partidavariables_controller.php' method='POST'> ";
					echo " Elejir Segundo Guerrero Troyano:
 								<select name = 'troyano2'>
 									<option>Seleccione</option>"	;


						while($row2 = mysqli_fetch_assoc($result2))					
						{				
								$nnombre = stripslashes($row2["nombre"]);
								$iid_guerrero = stripcslashes($row2["id_guerrero"]);

								echo $nnombre;
								echo $iid_guerrero;
								
							 echo "<option value = '$iid_guerrero'>$nnombre</option>";

						}
						echo "</select>";
						echo "<br><br>";


						//JUGADOR TROYANO 3		

					$result3 =mysqli_query($db, "SELECT * FROM `guerrero` WHERE ejercito = 'troyano' && roles_id_rol = 'rol_003'") ;

					echo "<form action = '../controller/partidavariables_controller.php' method='POST'> ";
					echo " Elejir Tercer Guerrero Troyano:
 								<select name = 'troyano3'>
 									<option>Seleccione</option>"	;


						while($row3 = mysqli_fetch_assoc($result3))					
						{				
								$nnombre = stripslashes($row3["nombre"]);
								$iid_guerrero = stripcslashes($row3["id_guerrero"]);

								echo $nnombre;
								echo $iid_guerrero;
								
							 echo "<option value = '$iid_guerrero'>$nnombre</option>";

						}
						echo "</select>";
						echo "<br><br>";


						//JUGADOR GRIEGO 1

						$result4 =mysqli_query($db, "SELECT * FROM `guerrero` WHERE ejercito = 'griego'") ;

						echo "<h2>Guerreros Griegos</h2>";

						echo "Elejir Primer Guerrero Griego: ";
						echo "<select name = 'griego1'>
 									<option>Seleccione</option>"	;


						while($row4 = mysqli_fetch_assoc($result4))					
						{				
								$nnombre = stripslashes($row4["nombre"]);
								$iid_guerrero = stripcslashes($row4["id_guerrero"]);

								echo $nnombre;
								echo $iid_guerrero;
								
							 echo "<option value = '$iid_guerrero'>$nnombre</option>";

						}
						echo "</select>";


						//JUGADOR GRIEGO 2

						$result5 =mysqli_query($db, "SELECT * FROM `guerrero` WHERE ejercito = 'griego'") ;

						echo "<br><br>Elejir Segundo Guerrero Griego: ";


						echo "<select name = 'griego2'>
 									<option>Seleccione</option>"	;


						while($row5 = mysqli_fetch_assoc($result5))					
						{				
								$nnombre = stripslashes($row5["nombre"]);
								$iid_guerrero = stripcslashes($row5["id_guerrero"]);

								echo $nnombre;
								echo $iid_guerrero;
								
							 echo "<option value = '$iid_guerrero'>$nnombre</option>";

						}
						echo "</select>";


						//JUGADOR GRIEGO 3

						$result6 =mysqli_query($db, "SELECT * FROM `guerrero` WHERE ejercito = 'griego'") ;

						echo "<br><br>Elejir Tercer Guerrero Griego: ";


						echo "<select name = 'griego3'>
 									<option>Seleccione</option>"	;


						while($row6 = mysqli_fetch_assoc($result6))					
						{				
								$nnombre = stripslashes($row6["nombre"]);
								$iid_guerrero = stripcslashes($row6["id_guerrero"]);

								echo $nnombre;
								echo $iid_guerrero;
								
							 echo "<option value = '$iid_guerrero'>$nnombre</option>";

						}
						echo "</select>";


						echo "<br><br><br>";
						echo "<input type ='submit' name = 'enviar' value = 'Comenzar'>";


		echo "</form>";

		}
	}
?>