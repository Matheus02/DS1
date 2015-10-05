<!doctype html>
<head>
<title>Resultado 2</title>
</head>
<body>
<?php
$a = $_GET["a"];
if ($a > 10){
	echo "O número é maior que 10.";
}
else
if ($a < 10){
	echo "O número é menor que 10";
}
else
echo "O número é igual a 10";
?>
<p><a href="exercicio1.php"/>Voltar ao Exercício</a></p>
</body>
</html>