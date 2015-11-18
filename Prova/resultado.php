<!doctype html>
<head>
<title>Resultado</title>
<meta charset="utf8">
</head>
<body>
<?php
 $n1 = $_GET ["n1"];
 $n2 = $_GET ["n2"];
 $n3 = $_GET ["n3"];
 $n4 = $_GET ["n4"];
 
 $med = ($n1+$n2+$n3+$n4)/4;
 if ($med <= 7){
	 echo "Aluno Reprovado."."<br>";
	 echo "Média: ".$med;
}
else
if($med >7){
echo "Aluno Aprovado."."<br>";
echo "Média: ".$med;
}
?>
<p><a href="exercicio.php"/>Voltar ao Exercício</a></p>
</body>
</html>