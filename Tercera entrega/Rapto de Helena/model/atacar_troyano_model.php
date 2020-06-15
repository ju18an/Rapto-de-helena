<?php 
error_reporting(0);

	class atacarTroyano_model
	{

		public function atacartroyano()
			{

					$daño = rand(1, 10);
					
					session_start();


						//QUITARLE VIDA A GRIEGO 1

						if (!$_SESSION["vidaGriego1"]) 
							{
								$_SESSION["vidaGriego1"] = "100";
							}
		

					$_SESSION["vidaGriego1"] = $_SESSION["vidaGriego1"] - $daño;


							// DARLE DAÑO AL TROYANO 1

										if (!$_SESSION["dañoTroyano1"]) 
											{
												$_SESSION["dañoTroyano1"] = "0";
											}

										if ($_SESSION["vidaTroyano1"] > 0) 
											{
												$_SESSION["dañoTroyano1"] = $_SESSION["dañoTroyano1"] + $daño;
											}

							
							//QUITARLE VIDA GRIEGO 2

						if ($_SESSION["vidaGriego1"] < 0) 
							{
								

								if (!$_SESSION["vidaGriego2"]) 
									{
										$_SESSION["vidaGriego2"] = "100";
									}


								$_SESSION["vidaGriego2"] = $_SESSION["vidaGriego2"] - $daño;

							}


							// DARLE DAÑO AL TROYANO 2

							if ($_SESSION["vidaTroyano2"] > 0 && $_SESSION["vidaTroyano1"] < 0) 
											{
												if (!$_SESSION["dañoTroyano2"]) 
													{
														$_SESSION["dañoTroyano2"] = "0";
													}
										
												$_SESSION["dañoTroyano2"] = $_SESSION["dañoTroyano2"] + $daño;
											}


								//QUITARLE VIDA GRIEGO 3

						if ($_SESSION["vidaGriego2"] && $_SESSION["vidaGriego2"] < 0) 
							{
								if (!$_SESSION["vidaGriego3"]) 
									{
										$_SESSION["vidaGriego3"] = "100";
									}


								$_SESSION["vidaGriego3"] = $_SESSION["vidaGriego3"] - $daño;

							}	


								//DARLE DAÑO AL TROYANO 3	

							if ($_SESSION["vidaTroyano3"] && $_SESSION["vidaTroyano3"] > 0) 
											{
												if (!$_SESSION["dañoTroyano3"]) 
													{
														$_SESSION["dañoTroyano3"] = "0";
													}
										
												$_SESSION["dañoTroyano3"] = $_SESSION["dañoTroyano3"] + $daño;
											}





			header("location: ../controller/partida_controller.php");

			$_SESSION["turno"]="0";
	
		}
	}

$nuevo = new atacarTroyano_model();
$nuevo -> atacartroyano();

 ?>