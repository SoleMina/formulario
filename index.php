<?php
if(isset($_GET['res'])){
	echo"<script>alert('Debes llenar todos los campos ;) ')</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario con Php - Developero</title>
</head>
<body>
	<h2>Formulario Html - Php</h2><span>Programando</span>
	<form method="post" action="procesar.php">
		<h3>Ingrese sus datos</h3>
		<label for="nombre">Nombre</label>
		<p><input type="text" name="nombre"></p>
		<label for="edad">Edad</label>
		<p><input type="text" name="edad"></p>
		<label for="email">email</label>
		<p><input type="text" name="email"></p>
		<input type="submit" name="submit" valaue="enviar">
	</form>
</body>
</html>