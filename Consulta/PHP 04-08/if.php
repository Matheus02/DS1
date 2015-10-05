<!doctype html> 
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
	<?php
		$a=6;
		$b=2;
		$c= false;
		if($a>=5){
			echo "A varialvel $a e maior ou igual a 5";
		}
		else{
			echo "A variavel $a e menor ou igual a 5";
		}
		//Operador And
		if($a > 0 && $b > 0 ){
			echo "A ou B é maiores que Zero "."<br>";
		}
		//Operador OU
		if($a<5||$b<5){
			echo "A ou B é maior que cenco". "<br>";
		}	
		//Operador NÃO
		if (!$c){
			echo "C não é verdadeiro".",br>";
		}	
		//Operador Diferente
		if($a != 0){
			echo " A não é igual a B"."<br>";
		}
	?>	
	</body>

</html>