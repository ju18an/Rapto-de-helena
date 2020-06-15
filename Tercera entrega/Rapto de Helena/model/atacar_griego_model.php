<?php 
error_reporting(0);

	class atacarGriego_model
	{

		public function atacarGriego()
			{

					$daño = rand(1, 10);
					
					session_start();

					// QUITARLE VIDA AL TROYANO 1

						if (!$_SESSION["vidaTroyano1"]) 
							{
								$_SESSION["vidaTroyano1"] = "100";
							}
		

					$_SESSION["vidaTroyano1"] = $_SESSION["vidaTroyano1"] - $daño;


										// DARLE DAÑO AL GRIEGO 1

										if (!$_SESSION["dañoGriego1"]) 
											{
												$_SESSION["dañoGriego1"] = "0";
											}

										if ($_SESSION["vidaGriego1"] > 0) 
											{
												$_SESSION["dañoGriego1"] = $_SESSION["dañoGriego1"] + $daño;
											}


								//QUITARLE VIDA AL TROYANO 2
		
						if ($_SESSION["vidaTroyano1"] < 0) 
							{
								

								if (!$_SESSION["vidaTroyano2"]) 
									{
										$_SESSION["vidaTroyano2"] = "100";
									}


								$_SESSION["vidaTroyano2"] = $_SESSION["vidaTroyano2"] - $daño;

							}

							// DARLE DAÑO AL GRIEGO 2

							if ($_SESSION["vidaGriego2"] > 0 && $_SESSION["vidaGriego1"] < 0) 
											{
												if (!$_SESSION["dañoGriego2"]) 
													{
														$_SESSION["dañoGriego2"] = "0";
													}
										
												$_SESSION["dañoGriego2"] = $_SESSION["dañoGriego2"] + $daño;
											}

							

							
								//QUITARLE VIDA AL TROYANO 3

						if ($_SESSION["vidaTroyano2"] && $_SESSION["vidaTroyano2"] < 0) 
							{
								if (!$_SESSION["vidaTroyano3"]) 
									{
										$_SESSION["vidaTroyano3"] = "100";
									}


							$_SESSION["vidaTroyano3"] = $_SESSION["vidaTroyano3"] - $daño;

									
							}	

								//DARLE DAÑO AL GRIEGO 3

							if ($_SESSION["vidaGriego3"] && $_SESSION["vidaGriego3"] > 0) 
											{
												if (!$_SESSION["dañoGriego3"]) 
													{
														$_SESSION["dañoGriego3"] = "0";
													}
										
												$_SESSION["dañoGriego3"] = $_SESSION["dañoGriego3"] + $daño;
											}
		



			header("location: ../controller/partida_controller.php");

			$_SESSION["turno"]="1";
	
		}
	}

$nuevo = new atacarGriego_model();
$nuevo -> atacarGriego();

 ?>