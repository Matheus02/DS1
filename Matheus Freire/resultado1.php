<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Resultado 1</title>
</head>
<body>
<?php
   $n = $_GET ["n"];
   $suce = $n + 1;
   $ante = $n - 1;
   
   echo "O antecessor do n�mero ".$n." � ".$ante." e o sucessor � ".$suce;


?>
<p><a href="index.php">Voltar a pagina principal</a></p>
</body>
</html>