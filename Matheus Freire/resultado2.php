<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Resultado 1</title>
</head>
<body>
<?php
 $nome = $_GET ["n"];
 $n1 = $_GET ["n1"];
 $n2 = $_GET ["n2"];
 $n3 = $_GET ["n3"];
 $media = ($n1 + $n2 + $n3)/3;
if ($media >= 7){
 echo "Aluno: ".$nome."<br>";
 echo "Média: ".$media."<br>";
 echo "Aluno Aprovado.";
}
else
if ($media <7){
 echo "Aluno: ".$nome."<br>";
 echo "Média: ".$media."<br>";
 echo "Aluno Reprovado.";
}
?>
<p><a href="index.php">Voltar a pagina principal</a></p>
</body>
</html>