<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css.css">
		<title>Ordem cresente</title>
	</head>
	<body>
		<h1>Ordem Crescente</h1>
		<?php
			$n1=$_GET["n1"];
			$n2=$_GET["n2"];
			if($n1>$n2){
				echo "A ordem crscente é $n1, $n2.";
			}
			else{
				echo "A ordem crescente é $n2, $n1.";
			}
		?></br>
		<a href="index.php">Voltar ao menu principal</a></br>
		<a href="exercicio5.php">Voltar a pagina anterior</a>
	</body>
</html>