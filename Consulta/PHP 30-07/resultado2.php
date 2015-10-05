<!doctype html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css.css">
		<meta charset="utf-8">
	
	</head>
	<body>
	<h1>Eleicao</h1>
	<?php
		$t=$_GET["t"];
		$a=$_GET["a"];
		$b=$_GET["b"];
		$bra=$_GET["bra"];
		$n=$_GET["n"];
		$s=$a+$b+$bra+$n;
			if($t==$s){
		$ra=100*$a/$t;
		$rb=100*$b/$t;
		$rbra=100*$bra/$t;
		$rn=100*$n/$t;
		echo "A porcentagem de votos para o  candidato A é: ".$ra."% de votos"."<br>";
		echo "A porcentagem de votos para o candidato B é: ".$rb."% de votos"."<br>";
		echo "A porcentagem de votos brancos é: ".$rbra."% de votos"."<br>";
		echo "A porcentagem de votos nulos é: ".$rn."% de votos"."<br>";
			}
			else{
				echo "O valores fornecidos são invalidos";
			}
	?></br>
	
	<a href="index.php">Voltar ao menu principal</a><br/>
	</body>
	</html>	
			
		