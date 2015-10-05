<!doctype html>
<head>
<title>Resultado 3</title>
</head>
<body>
<?php
$a = $_GET["a"];
if ($a < 12){
 $b = 1.30 * $a;
 echo "O custo da compra é: $b";
}
else
 if ($a >= 12){
$b = 1.00 * $a;
echo "O custo da compra é: ". $b;
}	
?>
<p><a href="exercicio3.php"/>Voltar ao Exercício</a></p>
</body>
</html>