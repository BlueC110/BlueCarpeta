<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		
		<link rel="stylesheet" type="text/css" href="css/style1.css">
	<title>BlueC</title>
</head>
<body style="background-color: #33AAFF;">
<div style="height: 625px; background-image: url(images/fondoB.jpeg)"> 

<div class="PrimerCont">
<p class="PARRA"> Bienvenidos</p>
<p class="PARRA"> a BlueC</p>
</div>
</div>
    <div> 
	<center><div class="tit"><h2 class="tituloBlueC">Inicio de sesión</h2>
		<center><div class="Ingreso">
	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

		<label class="label30""><b>Correo</b></label>
			<td width=80> 
	<input class="form-group has-success" class="inputs" type="text" name="mail">
	<label class="labels"><b>Contraseña</b></label>
			<td witdh=80>
			<input class="inputs"  type="password" name="pass">
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table>
		</form>
<br>
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend class="legend" ><b>Registro</b></legend>
    <div class="form-group">
      <label class="labels"><b>Nombre del estudiante</b></label>
      <input class="inputs"  type="text" name="realname" class="form-control"/>
    </div>
    <div class="form-group">
      <label class="labels"><b>Ingrese email del padre del estudiante</b></label>
      <input class="inputs" type="text" name="nick" class="form-control"/>
    </div>
    <div class="form-group">
      <label class="labels"><b>Ingrese tarjeta de identidad del usuario</b></label>
      <input class="inputs" type="password" name="pass" class="form-control"/>
    </div>
    <div class="form-group">
      <label class="labels" ><b>Repita la tarjeta de identidad</b></label>
      <input class="inputs" type="password" name="rpass" class="form-control"/>
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
