<!doctype html>
<html lang="pt-br">
<head>
<title>Resultado 3</title>
</head>
<body>
<?php
 $nome = $_GET["n"];
 $hab = $_GET["hab"];

if ($hab >= 200000){
 echo "A Cidade � Grande.";
}
else
if($hab <= 50000){
 echo "A Cidade � Pequena.";
}
else
 echo "A Cidade � M�dia.";
?>




</body>
</html>