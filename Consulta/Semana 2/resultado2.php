<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css.css">
		<title>Testar Numero</title>
	</head>
	<body>
	<?php
		$n=$_GET["n"];
		if ($n>0){
			echo "O numero $n é positivo.";
		}	
		else{
			if($n<0){
				echo "O numero $n é negativo.";
			}
			else{
				echo "O numero $n é nulo.";
			}
		}
	?></br>
	<a href="index.php">Voltar a pagina principal</a></br>
	<a href="exercicio2.php">Voltar a pagina anterior</a></br>
	
	</body>
</html>
