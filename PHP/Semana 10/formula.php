<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>formula</title>
</head>

<body>
<?php
	function somar($a, $b, $c, $d)
	{
		return $a+$b+$c+$d;
	}
	
	function multiplicar($a, $b, $c, $d)
	{
		return $a*$b*$c*$d;	
	}
	
	function subtrair($a, $b, $c, $d)
	{
		return $a-$b-$c-$d;	
	}
	
	function media($a, $b, $c, $d)
	{
		return somar($a, $b, $c, $d)/4;	
	}
?>
</body>
</html>