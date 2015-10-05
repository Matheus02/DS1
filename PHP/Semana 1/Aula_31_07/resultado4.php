<!doctype html>
<head>
<title>Exercício 3</title>
</head>
   
<body>
<h1>Exercício 4</h1>
<?php
 $a = $_GET["a"];
 $b = $_GET["b"];
 $res = $a + ($a * $b) / 100;
 echo "Seu novo salário é: " . $res;
?>
<p><a href="index.php"/>Voltar ao Menu Principal</a></p>
</body>
</html>