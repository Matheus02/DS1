<!doctype html>
<head>
<title>Exerc�cio 3</title>
</head>
   
<body>
<h1>Exerc�cio 4</h1>
<?php
 $a = $_GET["a"];
 $b = $_GET["b"];
 $res = $a + ($a * $b) / 100;
 echo "Seu novo sal�rio �: " . $res;
?>
<p><a href="index.php"/>Voltar ao Menu Principal</a></p>
</body>
</html>