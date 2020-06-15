<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
	error_reporting(0);
	session_start(); 
?>

<table width="1286" height="525" bordercolor="#E3BF0C" border="5px">
  <tr>
    <th scope="col">
    	<?php
			if ($_SESSION["vidaTroyano1"] >= 0) 
			{
				echo '<img src = "../util/'.$_SESSION['claseTroyano1'].'.png" width ="500 px" height = "500 px"/>';
				echo  $_SESSION["nombreTroyano1"]; 
				echo "<br>";
				echo "Vida al " . $_SESSION["vidaTroyano1"] . " %";
				echo "<br>";
				if ($_SESSION["turno"] == "1") {echo "<a href = '../model/atacar_troyano_model.php'>Atacar</a>";}
				
			}

		if ($_SESSION["vidaTroyano1"] && $_SESSION["vidaTroyano1"] <= 1 && $_SESSION["vidaTroyano1"] >= -97)
				{
					echo '<img src = "../util/'.$_SESSION['claseTroyano2'].'.png" width ="500 px" height = "500 px" />';
					echo  $_SESSION["nombreTroyano2"]; 
					echo "<br>";
					echo "Vida al " . $_SESSION["vidaTroyano2"] . " %";
					echo "<br>";
					if ($_SESSION["turno"] == "1") {echo "<a href = '../model/atacar_troyano_model.php'>Atacar</a>";}
				}
		
	
		
		if ($_SESSION["vidaTroyano2"] && $_SESSION["vidaTroyano2"] <= 1 && $_SESSION["vidaTroyano2"] >= -93)
				{
					echo '<img src = "../util/'.$_SESSION['claseTroyano3'].'.png" width ="500 px" height = "500 px" />';
					echo  $_SESSION["nombreTroyano3"]; 
					echo "<br>";
					echo "Vida al " . $_SESSION["vidaTroyano3"] . " %";
					echo "<br>";
					if ($_SESSION["turno"] == "1") {echo "<a href = '../model/atacar_troyano_model.php'>Atacar</a>";}
				}
		if ($_SESSION["vidaTroyano3"] && $_SESSION["vidaTroyano3"] <=0 && $_SESSION["vidaTroyano3"] > -30) 
							{
								header("location: victoria_griegos_controller.php");
							}
		?>
    </th>
    <th scope="col" width="50px">
    	
    </th>
    <th scope="col">
    	<?php
			if ($_SESSION["vidaGriego1"] >= 0) 
			{
				echo '<img src = "../util/'.$_SESSION['claseGriego1'].'.png" width ="500 px" height = "500 px"/>';
				echo   $_SESSION["nombreGriego1"]; 
				echo "<br>";
				echo "Vida al " . $_SESSION["vidaGriego1"] . " %";
				echo "<br>";
				if ($_SESSION["turno"] == "0") {echo "<a href = '../model/atacar_griego_model.php'>Atacar</a>";
											echo "<br><a href = 'victoria_troyanos_controller.php'>Retirarse</a>";}
			}

		if ($_SESSION["vidaGriego1"] && $_SESSION["vidaGriego1"] <= 0 && $_SESSION["vidaGriego1"] >= -97)
				{
					echo '<img src = "../util/'.$_SESSION['claseGriego2'].'.png" width ="500 px" height = "500 px" />';
					echo  $_SESSION["nombreGriego2"]; 
					echo "<br>";
					echo "Vida al " . $_SESSION["vidaGriego2"] . " %";
					echo "<br>";
					if ($_SESSION["turno"] == "0") {echo "<a href = '../model/atacar_griego_model.php'>Atacar</a>";
											echo "<br><a href = 'victoria_troyanos_controller.php'>Retirarse</a>";}

				}
		
	
		
		if ($_SESSION["vidaGriego2"] && $_SESSION["vidaGriego2"] <= 0 && $_SESSION["vidaGriego2"] >= -97)
				{
					echo '<img src = "../util/'.$_SESSION['claseGriego3'].'.png" width ="500 px" height = "500 px" />';
					echo "<br>";
					echo  $_SESSION["nombreGriego3"]; 
					echo "<br>";
					echo "Vida al " . $_SESSION["vidaGriego3"] . " %";
					echo "<br>";
					if ($_SESSION["turno"] == "0") {echo "<a href = '../model/atacar_griego_model.php'>Atacar</a>";
											echo "<br><a href = 'victoria_troyanos_controller.php'>Retirarse</a>";}
				}

		if ($_SESSION["vidaGriego3"] && $_SESSION["vidaGriego3"] <= 0 && $_SESSION["vidaGriego3"] > -30) 
							{
								header("location: victoria_troyanos_controller.php");
							}
		?>   
    </th>
  </tr>
</table>



			


<?php

			echo "<br>";
			echo "<br>";
echo "<a href = 'iniciar_partida_controller.php'>Iniciar Partida</a>";
echo "<br>";
echo "<br>";
echo "<a href = 'salir_partida_controller.php'>Terminar Partida</a>";


 ?>
</body>
</html>