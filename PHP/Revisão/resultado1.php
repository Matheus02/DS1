<!doctype html>
<html lang="pt-br">
<head>
<title>Resultado 1</title>
</head>
<body>
<?php
 $nome = $_GET["n"];
 $idade = $_GET["idade"];
 $tel = $_GET["tel"];
 $tcar = $_GET["car"];
 $placa = $_GET["pla"];
 $valor = $_GET["val"];

if($idade < 30){
  $seg = $valor * 21/100;
  echo "O valor do seguro é: ".$seg;
}
else{
 $seg = $valor * 1/100;
 print "O valor do seguro é: ".$seg;
}
?>




</body>
</html>