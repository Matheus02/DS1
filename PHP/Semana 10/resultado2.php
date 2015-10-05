<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>resultado 1</title>
</head>

<body>
<?php 
	include('formula.php');
	
	$n1=$_GET["n1"];
	$n2=$_GET["n2"];
	$n3=$_GET["n3"];
	$n4=$_GET["n4"];
	
	echo "Soma: ".somar($n1, $n2, $n3, $n4)."<br>";
	echo "Subtração: ".subtrair($n1, $n2, $n3, $n4)."<br>";
	echo "Multiplicação: ".multiplicar($n1, $n2, $n3, $n4)."<br>";
	echo "Média: ".media($n1, $n2, $n3, $n4);
?>
</body>
</html>