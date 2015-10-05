<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Salario de Funcionario</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	<body>
		<?php
			$n=$_GET["n"];
			$v=$_GET["v"];
			if($n<=160){
				$r=$n*$v;
				echo "O salario de $n horas e de R$".$r;
			}
			else{
				$r=(160*$v)+(($n-160)*($v+(50*$v)/100));
				echo "O salario de $n horas e de R$".$r;
			}
		?></br>
		<a href="exercicio2.php">Voltar a pagina anterior</a></br>
		<a href="index.php">Voltar a pagina principal</a>	
	</body>
</html>