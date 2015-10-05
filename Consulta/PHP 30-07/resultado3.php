<!doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css.css">
		<meta charset="utf-8">
	</head>
	<body>
	<h1>Soma de 4 Numeros</h1>
	<?php
		$n1=$_GET["n1"];
		$n2=$_GET["n2"];
		$n3=$_GET["n3"];
		$n4=$_GET["n4"];
		$soma=$n1+$n2+$n3+$n4;
		echo "O resultado da soma é: ".$soma;
	?></br>
	<a href="index.php">Voltar a pagine principal</a>
	</body>
</html>	