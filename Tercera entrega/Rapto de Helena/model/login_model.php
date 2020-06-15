<?php

	class login_model
	{

		function __construct($id_guerrero, $contrasena)
		{

			include "conexion.php";

			$contador="0";

				//consulta si este documento ya existe:

					$sql = "SELECT * FROM login WHERE guerrero_id_guerrero = '$id_guerrero'";

						if(!$result = $db->query($sql))
						{
  							die('Pailas!!! [' . $db->error . ']');
						}

						while($row = $result->fetch_assoc())
						{
							$iid_guerrero = stripslashes($row["guerrero_id_guerrero"]);
							$ccontrasena = ($row["contrasena"]);
							
							if ($contrasena==$ccontrasena)
							{
								$contador=$contador+1;
							}
						}

					// Consultar ejercito y rol

					$sql2 = "SELECT * FROM guerrero WHERE id_guerrero = '$id_guerrero'";

					if(!$result = $db->query($sql2))
						{
  							die('Pailas!!! [' . $db->error . ']');
						}

					while($row = $result->fetch_assoc())
					{
						$eejercito = stripslashes($row["ejercito"]);
						$rrol = stripcslashes($row["roles_id_rol"]);
						$nnombre = stripslashes($row["nombre"]);
						$aapellido = stripslashes($row["apellido"]);
						$eedad = stripslashes($row["edad"]);
						$ffuerza = stripslashes($row["fuerza"]);

					}


				
			if ($contador=="0")
			{
				header ("Location: ../index.php");
			}

			if ($contador!="0")
			{
				session_start();

				$_SESSION["login"]="1";
				$_SESSION["id_guerrero"]=$id_guerrero;
				$_SESSION["nombre"]=$nnombre;
				$_SESSION["apellido"]=$aapellido;
				$_SESSION["edad"]=$eedad;
				$_SESSION["fuerza"]=$ffuerza;
				$_SESSION["rol"]=$rrol;
				$_SESSION["ejercito"]=$eejercito;
				//header ("Location: ../view/index_SAdmin_view.php");
			}

			if ($_SESSION["rol"] == "rol_001") 
			{
				header ("Location: ../view/index_SAdmin_view.php");
			}

			if ($_SESSION["rol"] == "rol_002") 
			{
				if ($_SESSION["ejercito"] == "troyano") 
				{
					header ("Location: ../view/index_Administrador_Troyano_view.php");
				}

				if ($_SESSION["ejercito"] == "griego") 
				{
					header ("Location: ../view/index_Administrador_Griego_view.php");
				}
			}

			if ($_SESSION["rol"] == "rol_003") 
			{
				if ($_SESSION["ejercito"] == "troyano") 
				{
					header ("Location: ../view/index_Usuario_Troyano_view.php");
				}

				if ($_SESSION["ejercito"] == "griego") 
				{
					header ("Location: ../view/index_Usuario_Griego_view.php");
				}
			}

		}
	}
?>