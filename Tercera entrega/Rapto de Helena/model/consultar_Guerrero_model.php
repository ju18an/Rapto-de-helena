<?php 

	class consultarGuerrero_model
	{

		public function consultaGuerrero($id_guerrero)
		{
			include "conexion.php";


				$sql = "SELECT * FROM guerrero WHERE id_guerrero = '$id_guerrero'";

						if(!$result = $db->query($sql))
						{
  							die('Pailas!!! [' . $db->error . ']');
						}

						while($row = $result->fetch_assoc())
						{
							$iid_guerrero = stripslashes($row["id_guerrero"]);
							$nnombre = stripslashes($row["nombre"]); 
							$aapellido = stripslashes($row["apellido"]);
							$eedad = stripslashes($row["edad"]);
							$ffuerza = stripslashes($row["fuerza"]);
							$eejercito = stripslashes($row["ejercito"]);
							$eestado = stripslashes($row["estado"]);
							$rrol = stripslashes($row["roles_id_rol"]);

							session_start();

							$_SESSION["iid_guerrero"] = $iid_guerrero;
							$_SESSION["nnombre"] = $nnombre;
							$_SESSION["aapellido"] = $aapellido;
							$_SESSION["eedad"] = $eedad;
							$_SESSION["ffuerza"] = $ffuerza;
							$_SESSION["eejercito"] = $eejercito;
							$_SESSION["eestado"] = $eestado;
							$_SESSION["rrol"] = $rrol;

							
						}
		}


	}

	//$nuevo = new editarGuerrero_model();
	//$nuevo -> consultaGuerrero();
 ?>