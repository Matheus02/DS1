<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css.css">
		<title>Maior Número</title>
	</head>
	<body>
		<h1>Maior Número</h1>
		<?php
			$n1=$_GET["n1"];
			$n2=$_GET["n2"];
			$n3=$_GET["n3"];
			if($n1>$n2 && $n1>$n3){
				echo "O maior número é ".$n1;	
			}
			else{
				if($n2>$n1 && $n2>$n3){
					echo "O maior número é ".$n2;
				}
				else{
					if($n3>$n2 && $n3>$n1){
						echo "O maior número é ".$n3;
					}
					else{
						if($n1==$n2 && $n2==$n3){
							echo "Todos os números tem o mesmo valor, ".$n1;
						}
						else{
							if($n1==$n2){
								echo "O primeiro e segundo número possuem o mesmo valor, ".$n1;
							}
							else{
								if($n1==$n3){
									echo "O primeiro e segundo número possuem o mesmo valor, ".$n1;
								}
								else{
									echo "O segundo e terceiro número possuem o mesmo valor, ".$n2;
								}
							}
						}
					}
				}
			}
		?></br>
		<a href="exercicio6.php">Voltar a pagina anterior</a></br>
		<a href="index.php">Voltar ao menu principal</a> 
		
	</body>
</html>


