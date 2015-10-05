<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Resultado 2</title>
	</head>
	<body>
		<h1>Resultado 2</h1>
<?php
	$n1 = $_GET["n1"];
	$n2 = $_GET["n2"];
	$n3 = $n2 + $n1;
	$media = $n3/2;
	if ($media>=6){
		echo "Aluno Aprovado"."<br>"."Média: ".$media;
		}
	else
		echo "Aluno Reprovado"."<br>"."Média: ".$media;
?>
	</body>
</html>