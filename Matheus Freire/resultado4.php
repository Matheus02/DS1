<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Resultado 1</title>
</head>
<body>
<?php
 $nome = $_GET ["n"];
 $sal = $_GET ["s"];
if ($sal <=10.000){
 $sal2 = $sal +($sal * 15/100);
 echo "Nome do Jogador: ".$nome."<br>";
 echo "Salário Atual: ".$sal."<br>";
 echo "Salário Reajustado: ".$sal2."<br>";
}
else
if ($sal >10.000 && $sal <=50.000){
 $sal2 = $sal +($sal * 10/100);
 echo "Nome do Jogador: ".$nome."<br>";
 echo "Salário Atual: ".$sal."<br>";
 echo "Salário Reajustado: ".$sal2."<br>";
}
else 
if($sal > 50.000){
 
 echo "Nome do Jogador: ".$nome."<br>";
 echo "Salário Atual: ".$sal."<br>";
 echo "Salário Reajustado: ".$sal."<br>";
}


?>
<p><a href="index.php">Voltar a pagina principal</a></p>
</body>
</html>