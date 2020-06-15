<?php 
				$troyano1 = $_POST["troyano1"];
				$troyano2 = $_POST["troyano2"];
				$troyano3 = $_POST["troyano3"];


				$griego1 = $_POST["griego1"];
				$griego2 = $_POST["griego2"];
				$griego3 = $_POST["griego3"];
				
				include "../model/conexion.php";
				
				session_start();
				
				//cosulta 1
				
				$result1 = mysqli_query($db, "SELECT * FROM guerrero WHERE id_guerrero = '$troyano1'");
						while($row1 = $result1 ->fetch_assoc())
						{
							$nnombre1 = stripcslashes ($row1["nombre"]);
							$cclase1 = stripcslashes ($row1["clase"]);	
						}
							$_SESSION["nombreTroyano1"]= $nnombre1;
							$_SESSION["claseTroyano1"]=$cclase1;
							
				//cosulta 2
							
				$result2 = mysqli_query($db, "SELECT * FROM guerrero WHERE id_guerrero = '$troyano2'");
						while($row2 = $result2 ->fetch_assoc())
						{
							$nnombre2 = stripcslashes ($row2["nombre"]);
							$cclase2 = stripcslashes ($row2["clase"]);	
						}
							$_SESSION["nombreTroyano2"]= $nnombre2;
							$_SESSION["claseTroyano2"]=$cclase2;
							
				//cosulta 3
							
				$result3 = mysqli_query($db, "SELECT * FROM guerrero WHERE id_guerrero = '$troyano3'");
						while($row3 = $result3 ->fetch_assoc())
						{
							$nnombre3 = stripcslashes ($row3["nombre"]);
							$cclase3 = stripcslashes ($row3["clase"]);	
						}
							$_SESSION["nombreTroyano3"]= $nnombre3;
							$_SESSION["claseTroyano3"]=$cclase3;
							
				//cosulta 4
				
				$result4 = mysqli_query($db, "SELECT * FROM guerrero WHERE id_guerrero = '$griego1'");
						while($row4 = $result4 ->fetch_assoc())
						{
							$nnombre4 = stripcslashes ($row4["nombre"]);
							$cclase4 = stripcslashes ($row4["clase"]);	
						}
							$_SESSION["nombreGriego1"]= $nnombre4;
							$_SESSION["claseGriego1"]=$cclase4;
							
				//cosulta 5
				
				$result5 = mysqli_query($db, "SELECT * FROM guerrero WHERE id_guerrero = '$griego2'");
						while($row5 = $result5 ->fetch_assoc())
						{
							$nnombre5 = stripcslashes ($row5["nombre"]);
							$cclase5 = stripcslashes ($row5["clase"]);	
						}
							$_SESSION["nombreGriego2"]= $nnombre5;
							$_SESSION["claseGriego2"]=$cclase5;
							
				//cosulta 6
				
				$result6 = mysqli_query($db, "SELECT * FROM guerrero WHERE id_guerrero = '$griego3'");
						while($row6 = $result6 ->fetch_assoc())
						{
							$nnombre6 = stripcslashes ($row6["nombre"]);
							$cclase6 = stripcslashes ($row6["clase"]);	
						}
							$_SESSION["nombreGriego3"]= $nnombre6;
							$_SESSION["claseGriego3"]=$cclase6;
				
				
				
				
				
				
					

						$_SESSION["troyano1"] = $troyano1;
						$_SESSION["troyano2"] = $troyano2;
						$_SESSION["troyano3"] = $troyano3;


						$_SESSION["griego1"] = $griego1;
						$_SESSION["griego2"] = $griego2;
						$_SESSION["griego3"] = $griego3;

						header("location: partida_controller.php")

 ?>