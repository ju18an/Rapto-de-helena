<?php

$id_guerrero=$_POST["id_guerrero"];
$contrasena=$_POST["contrasena"];

include "../model/login_model.php";

$login = new login_model("$id_guerrero", "$contrasena");

?>