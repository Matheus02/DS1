<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Posto de Combustível</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	<body>
		<h1>Posto de Combustível</h1>
		<?php
			$t=$_GET["t"];
			$q=$_GET["q"];
			if($t=="G" || $t=="g"){
				if($q<=20){
					$q=20*(2.8-(2.8*3)/100);
					echo "O total a ser pago de combustível é R$".$q;
				}
				else{
					$q=$q*(2.8-(2.8*6)/100);
					echo "O total a ser pago de combustível é R$".$q;
				}
			}
			else{
				if($t=="A" || $t=="a"){
					if($q<=20){
						$q=$q*(1.9-(1.9*3)/100);
						echo "O total a ser pago de combustível é R$".$q;
					}
					else{
						$q=$q*(1.9-(1.9*4)/100);
						echo "O total a ser pago de combustível é R$".$q;
					}
				}	
				else{
					echo "Os valores fornecidos estão incorretos!";
				}
			}
		?></br>
		<a href="exercicio1.php">Voltar a pagina anterior</a></br>
		<a href="index.php">Voltar a pagina principal</a>
	</body>
</html>