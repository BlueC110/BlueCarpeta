<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos2.css">
	<title>BlueC</title>
</head>
<body background="images/fondoA.jpg" style="background-attachment: fixed" >
	<div style="border: 1px solid red; height: 500px">
		<p>holaaaa</p>
	    </div>
	<center><div class="tit"><h2 style="color: #0000FF; ">Inicio de sesión</h2>
		<center><div class="Ingreso">
	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

		<tr><td><label style="font-size: 14pt"><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td></tr>
		<tr><td><label style="font-size: 14pt"><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table>
		</form>
<br>
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Nombre del estudiante</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>ingrese email del padre del estudiante</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>ingrese tarjeta de identidad del usuario</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa ID" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Repita la tarjeta de identidad</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite ID" />
    </div>

    </div>

    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>
		<p><a href="calendario/index.php">calendario</a></p>
<h1>hola G hola</h1>
<h1>Melito jeje</h1>
</body>
</html>
