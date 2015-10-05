<!doctype html>
<head>
</head>
<body>
<?php
	$soma=0;
	$meses=array(800,800,800,800,800,800,800,800,800,800,800,800);
	for($i=0;$i<12;$i++){
		$soma = $meses[$i]+$soma;
}
echo $soma;
?>
</body>
</html>