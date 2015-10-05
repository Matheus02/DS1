<!doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css.css">
		<meta charset="utf-8">
	</head>
	<body>
	<h1>Nota de Aluno</h1>
	<?php
		$a=$_GET["a"];
		$c=$_GET["c"];
		$n1=$_GET["n1"];
		$n2=$_GET["n2"];
		$n3=$_GET["n3"];
		$n4=$_GET["n4"];
		$m=($n1+$n2+$n3+$n4)/4;
		echo "O aluno $a, no componente curricular $c, ficou com media final de ".$m;
	?></br>
	<a href="index.php">Voltar a pagine principal</a>
	
	</body>
</html>	