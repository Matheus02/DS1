<!doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css.css">
		<meta charset="utf-8">
	</head>
	<body>
	<h1>Reajuste de Salario</h1>
	<?php
		$s=$_GET["s"];
		$p=$_GET["p"];
		$resu=$s+($s*$p/100);
		echo "O salario com reajuste será de R$".$resu
	?></br>
	<a href="index.php">Voltar a pagine principal</a>
	</body>
</html>	