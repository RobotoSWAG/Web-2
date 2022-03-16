<!DOCTYPE HTML>
<html lang="en">
<meta charset="UTF-8">
<title>Tu nombre</title>
<head>
</head>
<body>
<H2>Escribir tu nombre, appelido y edad</H2>
<form action="" method="POST">
	<table>
	<tr>
		<td><input type="text" name="nombres"></td>
	</tr>
	<tr>
		<td><input type="text" name="appe"></td>
	</tr>
    <tr>
		<td><input type="text" name="edad"></td>
	</tr>
	<tr>
		<td> <input type="submit" value="Enviar"> </td>
	</tr>
<?php
	if($_POST)
	{
		$nom1 = $_POST ['nombres'];
		$appe = $_POST ['appe'];
        $edad = $_POST ['edad'];
		echo "Tu Nombre Es: ".$nom1. " " .$appe. ".  Tu Edad Es: " .$edad; 
	}
?>
</table>
</form>
</body>
</html>
