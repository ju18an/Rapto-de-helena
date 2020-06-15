<?php 
error_reporting(0);

	class victoriaTroyanos
		{

			public function victoriaTroyanos_model()
				{						
					session_start();
					
					 if (!$_SESSION["dañoTroyano2"])
					 	{
							$_SESSION["dañoTroyano2"]="0";
						}
						
					if (!$_SESSION["dañoTroyano3"])
					 	{
							$_SESSION["dañoTroyano3"]="0";
						}
						
					if (!$_SESSION["dañoGriego2"])
					 	{
							$_SESSION["dañoGriego2"]="0";
						}
						
					if (!$_SESSION["dañoGriego3"])
					 	{
							$_SESSION["dañoGriego3"]="0";
						}
						

					 $troyano1 = $_SESSION["troyano1"];
					 $troyano2 = $_SESSION["troyano2"];
					 $troyano3 = $_SESSION["troyano3"];

					 $danotroyano1 = $_SESSION["dañoTroyano1"];
					 $danotroyano2 = $_SESSION["dañoTroyano2"];
					 $danotroyano3 = $_SESSION["dañoTroyano3"];

					 $griego1 = $_SESSION["griego1"];
					 $griego2 = $_SESSION["griego2"];
					 $griego3 = $_SESSION["griego3"];

					 $danogriego1 = $_SESSION["dañoGriego1"];
					 $danogriego2 = $_SESSION["dañoGriego2"];
					 $danogriego3 = $_SESSION["dañoGriego3"];
					 
					
					 include "conexion.php";

					 mysqli_query($db, "INSERT INTO partidas (id_partida) VALUES ( NULL ) ") or die(mysqli_error($db));


					 	$result = mysqli_query($db, "SELECT COUNT(*) as cuenta FROM partidas") ;
						$row = mysqli_fetch_assoc($result);
			 			 
			 			 $partida = $row ['cuenta'] ;


					 mysqli_query($db, "INSERT INTO guerrero_has_partidas (guerrero_id_guerrero, partidas_id_partidas, resultado, dano) 
				 						VALUES('$troyano1', '$partida', 'victoria', '$danotroyano1'), ('$troyano2', '$partida', 'victoria', '$danotroyano2'), ('$troyano3', '$partida', 'victoria', '$danotroyano3'), ('$griego1', '$partida', 'derrota', '$danogriego1'), ('$griego2', '$partida', 'derrota', '$danogriego2'), ('$griego3', '$partida', 'derrota', '$danogriego3')") or die(mysqli_error($db));

					 	echo "¡¡¡ EN HORA BUENA HAN GANADO LOS TROYANOS !!!<br><br>";
						
						echo "<a href='../view/index_SAdmin_view.php'>Volver</a>";
					 
				}
	}
 ?>