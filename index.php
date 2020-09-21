<!DOCTYPE html>
<html>
<head>
	<title>BlueC</title>
</head>


<body style="background-color: #33AAFF;">


<div style="height: 90hv; background-image: url(images/fondoB.jpeg)"> 

	<div class="PrimerCont">
		<p class="PARRA"> Bienvenidos</p>
		<p class="PARRA"> a BlueC</p>
	</div>
</div>


<div style="height: 620px; background-color: #33AAFF;"> 

		<div> 
			<center><div class="tit"><h2 class="tituloBlueC">Inicio de sesión</h2>
			<center><div class="Ingreso">
			<table border="0" align="center" valign="middle">
				
				<td rowspan=2>
				<form action="validar.php" method="post">

					<table border="0">
						<div>
							<label class="label30" for="correo1"><b>Correo</b></label>
							
								<input id="correo1" class="form-group has-success" class="inputs" type="text" name="mail">
						
						</div>
						<div>
							<label class="labels"><b>Contraseña</b></label>
							
								<input class="inputs"  type="password" name="pass">
					
						</div>
						
						<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
						
					</table>
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
		<label class="labels"><b>Email del padre del estudiante</b></label>
		<input class="inputs" type="text" name="nick" class="form-control"/>
		</div>
		<div class="form-group">
		<label class="labels"><b>Tarjeta de identidad del usuario</b></label>
		<input class="inputs" type="password" name="pass" class="form-control"/>
		</div>
		<div class="form-group">
		<label class="labels" ><b>Repita la tarjeta de identidad</b></label>
		<input class="inputs" type="password" name="rpass" class="form-control"/>
		</div>

		</div>

		<input  class="btn btn-primary" type="submit" name="submit" value="Registrarse"/>
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

	</div>
		




</body>
</html>

