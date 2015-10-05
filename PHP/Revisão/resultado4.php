<!doctype html>
<html lang="pt-br">
<head>
<title>Resultado 4</title>
</head>
<body>
<?php
 $n1 = $_GET["n1"];
 $n2 = $_GET["n2"];
 $n3 = $_GET["n3"];
 $n4 = $_GET["n4"];
 $n5 = $_GET["n5"];
 $soma = $n1+$n2+$n3+$n4+$n5;
 $media = $soma / 5;
 echo "A Média é: ".$media;
?>




</body>
</html>