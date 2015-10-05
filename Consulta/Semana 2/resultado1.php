<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css.css">
		<title>Teste de 10</title>
		
	</head>
	<body>
	<?php
		$n=$_GET["n"];
		if($n==10){
			echo "O numero é igual a 10.";	
		}
		else{
			if($n>10){
				echo "O número é maior que 10.";
			}
			else{
				echo "O numero é menor que 10.";
			}
		}	
	?></br>
	<a href="exercicio1.php">Voltar a pagina anterior</a></br>
	<a href="index.php">Voltar a pagina principal</a></br>
	</body>
	
</html>
