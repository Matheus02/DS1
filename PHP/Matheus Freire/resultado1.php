<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Resultado 1</title>
	</head>
	<body>
		<h1>Resultado 1</h1>
<?php
	$sal = $_GET["sal"];
	
	$novosal = $sal+($sal/100*10);
	echo "Seu novo salário é: ".$novosal; 
?>
	</body>
</html>