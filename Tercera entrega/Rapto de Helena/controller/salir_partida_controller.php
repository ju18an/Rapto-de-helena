<?php 

	session_start();

				//---TROYANOS---

		unset($_SESSION["troyano1"]);
		unset($_SESSION["troyano2"]);
		unset($_SESSION["troyano3"]);

				//VIDAS TROYANOS

		unset($_SESSION["vidaTroyano1"]);
		unset($_SESSION["vidaTroyano2"]);
		unset($_SESSION["vidaTroyano3"]);

				//DAÑOS TROYANOS

		unset($_SESSION["dañoTroyano1"]);
		unset($_SESSION["dañoTroyano2"]);
		unset($_SESSION["dañoTroyano3"]);
		
				//NOMBRES TROYANOS
				
		unset($_SESSION["nombreTroyano1"]);
		unset($_SESSION["nombreTroyano2"]);
		unset($_SESSION["nombreTroyano3"]);
		
				//CLASES TROYANOS
				
		unset($_SESSION["claseTroyano1"]);
		unset($_SESSION["claseTroyano2"]);
		unset($_SESSION["claseTroyano3"]);



		
				//---GRIEGOS---

		unset($_SESSION["griego1"]);
		unset($_SESSION["griego2"]);
		unset($_SESSION["griego3"]);

				//VIDAS GRIEGOS

		unset($_SESSION["vidaGriego1"]);
		unset($_SESSION["vidaGriego2"]);
		unset($_SESSION["vidaGriego3"]);

				//DAÑOS GRIEGOS

		unset($_SESSION["dañoGriego1"]);
		unset($_SESSION["dañoGriego2"]);
		unset($_SESSION["dañoGriego3"]);
		
				//NOMBRES GRIEGOS
				
		unset($_SESSION["nombreGriego1"]);
		unset($_SESSION["nombreGriego2"]);
		unset($_SESSION["nombreGriego3"]);
		
				//CLASES GRIEGOS
				
		unset($_SESSION["claseGriego1"]);
		unset($_SESSION["claseGriego2"]);
		unset($_SESSION["claseGriego3"]);


		unset($_SESSION["turno"]);

		
		

	header("location: ../view/index_SAdmin_view.php");

 ?>