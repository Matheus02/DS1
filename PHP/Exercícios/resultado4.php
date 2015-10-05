<!doctype html>
<head>
<title>Resultado 4</title>
</head>
<body>
<?php
 $a = $_GET ["a"];
 $b = $_GET ["b"];
 
 $med = ($a+$b)/2;
 if ($med < 5){
	 echo "Aluno Reprovado."."<br>";
	 echo "Média: ".$med;
}
else
if($med >=5){
echo "Aluno Aprovado."."<br>";
echo "Média: ".$med;
}
?>
<p><a href="exercicio4.php"/>Voltar ao Exercício</a></p>
</body>
</html>