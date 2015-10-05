<!doctype html>
<head>
<title>Exemplo de condição</title>
</head>
<body>
<h1>if.php</h1>
<?php
$a = 6; $b = 2; $c = false;
//Operador AND
if ($a > 0 && $b > 0){
	echo "A e B é maior que zero " . "<br>";
}
//Operador OU
if($a < 5 || $b < 5){
	echo "A ou B é maior que cinco "."<br>";
} 
//Operador NÃO
if (!$c){
	 echo "C não é verdadeiro"."<br>";
}
//Operador Diferente
if ($a != 0){
	echo "A não é igual a B"."<br>";
}

?>
</body>
</html>