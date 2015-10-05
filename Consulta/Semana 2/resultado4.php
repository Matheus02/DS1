<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css.css">
		<title>Media de aluno</title>
	</head>
	<body>
		<?php
			$n1=$_GET["n1"];
			$n2=$_GET["n2"];
			$r=($n1+$n2)/2;
			if($n1<=10 && $n2<=10){
				if($r>=5){
					echo "A média do aluno foi de $r, sendo assim, o aluno esta APROVADO.";
				}
				else{
					echo "A média do aluno foi de $r, sendo assim, o aluno esta REPROVADO.";
				}
			}
			else{
				echo "Dados invalidos.";
			}
		?></br>
			<a href="exercicio4.php">Voltar a pagina anterior</a></br>
			<a href="index.php">Voltar a pagina principal</a></br>
	</body>
</html>