<!doctype html>
<html lang="pt-br">
<head>
<title>Teste While</title>
</head>
<body>
<h1>Resultado 4</h1>

<?php
  $al1n1 = $_GET["al1n1"];
  $al1n2 = $_GET["al1n2"];
  $al2n1 = $_GET["al2n1"];
  $al2n2 = $_GET["al2n2"];
  $al3n1 = $_GET["al3n1"];
  $al3n2 = $_GET["al3n2"];
  $al4n1 = $_GET["al4n1"];
  $al4n2 = $_GET["al4n2"];
  $al5n1 = $_GET["al5n1"];
  $al5n2 = $_GET["al5n2"];
  
  $m1 = ($al1n1 + $al1n2) /2;
  $m2 = ($al2n1 + $al2n2) /2;
  $m3 = ($al3n1 + $al3n2) /2;
  $m4 = ($al4n1 + $al4n2) /2;
  $m5 = ($al5n1 + $al5n2) /2;
  
  echo "Média do 1º Aluno: ".$m1."<br>";
  echo "Média do 2º Aluno: ".$m2."<br>";
  echo "Média do 3º Aluno: ".$m3."<br>";
  echo "Média do 4º Aluno: ".$m4."<br>";
  echo "Média do 5º Aluno: ".$m5."<br>";
?>
<p><a href="index.php">Voltar Para Página Anterior</a></p>
</body>
</html>