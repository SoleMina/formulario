<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Obtención de datos con Php</title>
</head>
<body>
<div class="container">
	<div class="page-header">
		<h1>Formulario Html y Php <small></small> </h1>
	</div>
	<div>
		<?php
		if(isset($_POST['submit'])) {

			if(strlen($_POST['nombre']) > 0) {
				echo "<p>El nombre ingresado es : $_POST[nombre]</p>";
			}else{
				header("location: index.php");
			}
			if(strlen($_POST['edad']) > 0) {
				if(is_numeric($_POST['edad'])) {
					echo "<p>Y la edad es $_POST[edad]</p>";
				}else{
					echo "<p>Y la edad ingresada no es válida</p>";
				}

			}else{
				header("location: index.php");
			}
			if(strlen($_POST['email']) > 0) {
				if (strpos($_POST['email'], "@")) {
					echo "<p>El correo $_POST[email] es valido</p>";
				}else{
					echo "<p>El correo ingresado es invalido</p>";
				}

			}else{
				header("location: index.php?res=vacio");
			}

		}else{
			header("location: index.php");
		}

		?>
	</div>
	
</div>
</body>
</html>