<?php 
error_reporting(0);
	class victoriaGriegos
		{

			public function victoriaGriegos_model()
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

					 	echo "¡¡¡ SE CREO LA PARTIDA !!!";
					 	echo "<br>";
					 	echo "<br>";

					 	$result = mysqli_query($db, "SELECT COUNT(*) as cuenta FROM partidas") ;
						$row = mysqli_fetch_assoc($result);
			 			 
			 			 $partida = $row ['cuenta'] ;

			 			 echo "<br>";
					 	 echo "<br>";

					 mysqli_query($db, "INSERT INTO guerrero_has_partidas (guerrero_id_guerrero, partidas_id_partidas, resultado, dano) 
				 						VALUES('$troyano1', '$partida', 'derrota', '$danotroyano1'), ('$troyano2', '$partida', 'derrota', '$danotroyano2'), ('$troyano3', '$partida', 'derrota', '$danotroyano3'), ('$griego1', '$partida', 'victoria', '$danogriego1'), ('$griego2', '$partida', 'victoria', '$danogriego2'), ('$griego3', '$partida', 'victoria', '$danogriego3')") or die(mysqli_error($db));

					 	echo "¡¡¡ SI SE PUDO REGISTRAR EN TABLA GUERRERO_HAS_PARTIDAS !!!";
					 
				}
	}
 ?>