<html>
<head>
</head>
<body>

<?php
	$pos=0;
	$rest=0;
	$par=0;
	$soma=0;
	$num[]=$_GET["n1"];
	$num[]=$_GET["n2"];
	$num[]=$_GET["n3"];
	$num[]=$_GET["n4"];
	$num[]=$_GET["n5"];
	echo '<h1>Exerc�cio 1</h1>';
	for($i=0;$i<=4;$i++){
		$pos = $i+1;
		echo "O ".$pos."� n�mero �: ".$num[$i].'<br/>';
		$num2[]=$num[$i]*2;
		$soma = $num[$i]+$soma;
	}
	echo '<h1>Exerc�cio 2</h1>';
	echo "A soma dos vetores �: ".$soma;
	
	echo '<h1>Exerc�cio 3</h1>';
	sort($num); //Tambem � possivel usar o comando "max" que ja pega o valor m�ximo por exemplo $maior=max($num);
	echo "O maior valor �: ".$num[4];
	
	echo '<h1>Exerc�cio 4</h1>';
	for($i=0;$i<=4;$i++){
	   $rest = $num[$i]%2;
	   if ($rest==0){
	   $par=$num[$i]+$par;
	   }
	}
	echo "A soma dos n�meros pares �: ".$par;
	
	echo '<h1>Exerc�cio 5</h1>';
	for($i=0;$i<=4;$i++){
		$pos=0;
		$pos= $i+1;
		echo "O ".$pos."� n�mero multiplicado por 2 �: ".$num2[$i]."<br>";
	}
	
	echo '<h1>Exerc�cio 6</h1>';
	sort ($num);
	for($i=0;$i<=4;$i++){
		echo $num[$i]."<br>";
	}
	
?>
</body>
</html>
