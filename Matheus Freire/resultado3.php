<html lang="pt-br">
<head>
   <meta charset="utf-8">
    <title>Resultado 1</title>
</head>
<body>
<?php
$alt = $_GET ["a"];
$peso = $_GET ["p"];
$imc = $peso/($alt*$alt);


if ($imc < 18.5){
 echo "Vo�� est� Abaixo do Peso.";
}
else
if ($imc >=18.5 && $imc < 25){
echo "Vo�� est� Peso Normal.";
}
else
if ($imc >=25 && $imc <31){
echo "Vo�� est� Acima do Peso.";
}
else
if ($imc >30){
echo "Vo�� est� Obeso.";
}
?>
<p><a href="index.php">Voltar a pagina principal</a></p>
</body>
</html>