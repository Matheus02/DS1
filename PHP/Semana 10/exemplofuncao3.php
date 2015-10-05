<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?php
	//funções devem receber dados para processá-los. A inserção de dados na função é dada por meio dos parâmetos ou argumenos da função.
	function somar($x, $y)
	{
		return $x+$y;	
	}
	
	function subtrair($x, $y)
	{
		return $x-$y;	
	}
	
	function multiplicar($x, $y)
	{
		return $x*$y;
	}
	
	function dividir($x, $y)
	{
		return $x/$y;	
	}
	
	$nr1 =10;
	$nr2 =5;
	echo ("<p>Operações Matemáticas:</p>" .
	"<p>$nr1 + $nr2 = ".somar($nr1, $nr2) .
	"<br>$nr1 - $nr2 = ".subtrair ($nr1, $nr2) .
	"<br>$nr1 * $nr2 = ".multiplicar ($nr1, $nr2) .
	"<br>$nr1 / $nr2 = ".dividir ($nr1, $nr2) ."</p>");
?>
</body>
</html>