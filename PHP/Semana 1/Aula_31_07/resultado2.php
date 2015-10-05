<!doctype html>
<head>
<title>Exercício 3</title>
</head>
   
<body>
<h1>Exercício 2</h1>
<?php
 $a = $_GET["a"];
 $b = $_GET["b"];
 $c = $_GET["c"];
 $d = $_GET["d"];
 $e = $_GET["e"];
 $total = $b + $c + $d + $e;
 $res1 = $b * 100 / $total;
 $res2 = $c * 100 / $total;
 $res3 = $d * 100 / $total;
 $res4 = $e * 100 / $total;
 
 echo "O Candidato 1 teve " . $res1 ."% de votos"."<br>";
 echo "O Candidato 2 teve " . $res3 ."% de votos"."<br>";
 echo "A porcentagem de votos branco é de:". $res3 ."%"."<br>";
 echo "A porcentagem de votos nulos é de:". $res4 ."%"."<br>";

 
 
 
 
?>
<p><a href="index.php"/>Voltar ao Menu Principal</a></p>




</body>
</html>