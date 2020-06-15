
<?php 

	$id_guerrero = $_POST["id_guerrero"];

	include "../model/consultar_Guerrero_model.php";

		$nuevo = new consultarGuerrero_model();
		$nuevo -> consultaGuerrero($id_guerrero);
		
	include "../view/formularioEditar_Guerrero_view.php";

 ?>
   

