<!doctype html>
<html lang="pt-br">
<head>
<title>Teste While</title>
</head>
<body>
<h1>Resultado 6</h1>

<?php
  $n = $_GET["n"];
  $i = 1;
 if ($n >= 1 && $n <=10){
	 while ($i <= 10){
		$s = $i * $n; 
		echo "$n X $i = $s <br>";
		$i++;
	 }
 }
 else
	 echo "O Número Digita Não é Entre 1 e 10."
  
?>
<p><a href="exercicio6.php">Voltar Para Página Anterior</a></p>
<p><a href="index.php">Voltar ao Menu Inicial</a></p>
</body>
</html>