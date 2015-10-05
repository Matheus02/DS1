<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Exemplo 1</title>
	</head>
	<body>
		<?php
			$var = "0"; //$var é uma string
			$var += 2; //$var é agora um inteiro
			$var = $var + 1.3; //$var é agora um float(3.3)
			$var = 5 + 10; //$var é um inteiro(15)
			
			echo "O valor da variável $var é " . $var;
		
	
		?>
	</body>
</html>