<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/estilos2.css">
	<title>BlueC</title>
</head>
<body style="background-color: #33AAFF;">
<div style="height: 625px; background-image: url(images/fondoB.jpeg)"> 

<div style= "width: 645px; height: 625px; background-color: rgba(255,255,255,0.5);">
<p style="font-size: 120px; text-align: center; padding-top: 170px; color: #2262C4; font-family:time news roman"> Bienvenidos</p>
<p style="font-size: 120px; text-align: center; padding-top: 170px; color: #2262C4; font-family:time news roman"> a BlueC</p>
</div>
</div>
    <div> 
	<center><div class="tit"><h2 style="color: white; font-family:Arial Narrow; font-size: 20pt;">Inicio de sesión</h2>
		<center><div class="Ingreso">
	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

		<label style="font-size: 16pt; color: white; font-family:Arial Narrow;"><b>Correo</b></label>
			<td width=80> 
	<input class="form-group has-s	uccess" style="border-radius:15px;" type="text" name="mail">
	<label style="font-size: 16pt; color: white; font-family:Arial Narrow;"><b>Contraseña</b></label>
			<td witdh=80>
			<input style="border-radius:15px;" type="password" name="pass">
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table>
		</form>
<br>
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 20pt; color: white; font-family:Arial Narrow;"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 16pt; color: white; font-family:Arial Narrow;"><b>Nombre del estudiante</b></label>
      <input style="border-radius:15px;" type="text" name="realname" class="form-control"/>
    </div>
    <div class="form-group">
      <label style="font-size: 16pt; color: white; font-family:Arial Narrow;"><b>Ingrese email del padre del estudiante</b></label>
      <input style="border-radius:15px;" type="text" name="nick" class="form-control"/>
    </div>
    <div class="form-group">
      <label style="font-size: 16pt; color: white; font-family:Arial Narrow;"><b>Ingrese tarjeta de identidad del usuario</b></label>
      <input style="border-radius:15px;" type="password" name="pass" class="form-control"/>
    </div>
    <div class="form-group">
      <label style="font-size: 16pt; color: white; font-family:Arial Narrow;"><b>Repita la tarjeta de identidad</b></label>
      <input style="border-radius:15px;" type="password" name="rpass" class="form-control"/>
    </div>

    </div>

    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>
</div>
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
<p class="BotonCa"><a class="laA" href="calendario/index.php">calendario</a></p>
		





</body>
</html>
