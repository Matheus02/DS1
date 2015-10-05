<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	<body>
		<h1>CUSTO DA MAÇÃ</h1>
	<?php
		$q=$_GET["q"];
		if($q>=12){
			echo "O preço total das maçãs é de R$".$q;
		}
		else{
			$q=$q*1.3;
			echo "O preço total das maçãs é de R$".$q;
		}
	?></br>
	<a href="exercicio3.php">Voltar a pagina anterior</a></br>
	<a href="index.php">Voltar a pagina principal</a>
	</body>
	
</html>