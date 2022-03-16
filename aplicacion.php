<!DOCTYPE HTML>
<html lang="en">
<meta charset="UTF-8">
<title>suma de 2 numeros</title>
<head>
</head>
<body>
<H2>Suma de 2 numeros</H2>
<form method="POST">
	<table>
	<tr>
		<td><input type="text" name="numero1"></td>
	</tr>
	<tr>
		<td><input type="text" name="numero2"></td>
	</tr>
	<tr>
		<td> <input type="submit" value="sumar"> </td>
	</tr>
<?php
	if($_POST)
	{
		$num1 = $_POST ['numero1'];
		$num2 = $_POST ['numero2'];
		$suma = $num1 + $num2;
		echo "La suma de ".$num1." y ".$num2." es ".$suma; 
	}
?>
</table>
</form>
</body>
</html>
