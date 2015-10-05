<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Resultado 1</title>
</head>

<body>
<?php
	$n1= $_GET["n1"];
	$n2= $_GET["n2"];
	
	function somar($x, $y)
	{
		return $x+$y;	
	}
	
	function multiplicar($x, $y)
	{
		return $x*$y;
	}
	echo "A soma dos dois é ".somar($n1, $n2);
	echo "<br>"."A multiplicação dos dois números é ".multiplicar($n1, $n2);
?>
</body>
</html>