<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Inicio de Sesión</title>

</head>
<body>

<table width="90%" height="100%"  style="margin:auto; border:#960 7px solid;" style="margin-bottom:auto;" >
<tr></tr>
<tr>
  <th scope="col" height="80%"><img src="util/caballero.png" width="60%" height="30%"></th>
  <th scope="col" height="80%"><img src="util/artillero.png" width="60%" height="30%"></th>
  <th scope="col" height="80%"><img src="util/arquero.png" width="60%" height="30%"> </th>

</tr>
<tr>
  <th scope="col" height="100%"><img src="util/borde.png" width="30%" height="7%"><img src="util/borde.png" width="30%" height="7%"><img src="util/borde.png" width="30%" height="7%"></th>
  <th scope="col" height="100%"><img src="util/borde.png" width="30%" height="7%"><img src="util/borde.png" width="30%" height="7%"><img src="util/borde.png" width="30%" height="7%"></th>
  <th scope="col" height="100%"><img src="util/borde.png" width="30%" height="7%"><img src="util/borde.png" width="30%" height="7%"><img src="util/borde.png" width="30%" height="7%"></th>

</tr>
<tr>
  <th scope="row" colspan="3" style="text-align:center;"> <form name="loguin" autocomplete="OFF" action="controller/login_controller.php" method="POST">
    <br>Usuario<br>
    <input type="text" name="id_guerrero" class="inputs_text">
    <br>
    <br>
    Contraseña<br>
    <input type="password" name="contrasena" class="inputs_text" >
    <br>
    <br>
      <input type="submit" class="Enviar" name="Enviar">
      </form><br>
    
      
      </th>
      
  
  
  </th>
</tr>
</table>

</body>
</html>