<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exemplo 1</title>
	</head>
	<body>
		<?php
			$var = "0"; //$var � uma string
			$var += 2; //$var � agora um inteiro
			$var = $var + 1.3; //$var � agora um float(3.3)
			$var = 5 + 10; //$var � um inteiro(15)
			
			echo "O valor da vari�vel $var � " . $var;
		
	
		?>
	</body>
</html>