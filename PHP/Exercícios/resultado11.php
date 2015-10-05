<!doctype html>
<head>
<title>Resultado 2</title>
</head>
<body>
<?php
 $tem = $_GET["t"];
 $vel = $_GET["v"];
 
 $dist = $tem * $vel;
 $lit = $dist/12;
 
 echo "Velocidade Média: ".$vel;
 echo "Tempo Gasto na Viagem:".$tem;
 echo "Distância Percorrida: ".$dist;
 echo "Quantidade de Litros Usados na Viagem: ".$lit;
?>
<p><a href="exercicio10.php"/>Voltar ao Exercício</a></p>
</body>
</html>