<!doctype html>
<head>
<title>Resultado 7</title>
</head>
<body>
<?php
 $time1 = $_GET ["a"];
 $time2 = $_GET ["b"];
 $gols1 = $_GET ["c"];
 $gols2 = $_GET ["d"];
 
 if ($gols1 > $gols2){
 echo "O time ".$time1." � o vencedor.";
 }else
 if ($gols1 < $gols2){
 echo "O time ".$time2." � o vencedor.";
 }
 else
 echo "EMPATE.";
?>
<p><a href="exercicio7.php"/>Voltar ao Exerc�cio</a></p>
</body>
</html>