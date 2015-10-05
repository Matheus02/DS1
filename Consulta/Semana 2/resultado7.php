<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css.css">
		<title>Resultado de Jogo</title>
	</head>
	<body>
		<h1>Resultado do Jogo</h1>
		<?php
			$t1=$_GET["t1"];
			$t2=$_GET["t2"];
			$n1=$_GET["n1"];
			$n2=$_GET["n2"];
			if($n1>$n2){
				echo "O time $t1 é o vencedor com $n1 pontos.";
			}
			else{
				if($n2>$n1){
					echo "O time $t2 é o vencedor com $n2 pontos.";
				}
				else{
					echo "IMPATE";
				}
			}
		?></br>
		<a href="exercicio7.php">Voltar a pagina anterior</a></br>
		<a href="index.php">Voltar ao menu principal</a>
	</body>
</html>