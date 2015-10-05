<!doctype html>
<head>
<title>Exercício 5</title>
</head>
<body>
<h1>Exercício 5</h1>
<?php
   $nome = $_GET["nome"];
   $comp = $_GET["comp"];
   $not1 = $_GET["a"];
   $not2 = $_GET["b"];
   $not3 = $_GET["c"];
   $not4 = $_GET["d"];
   $soma = $not1 + $not2 + $not3 + $not4;
   $med = $soma / 4;
   echo "Nome do Aluno: " . $nome."<br>";
   echo "Componente Curricular: " . $comp."<br>";
   echo "Média: " . $med."<br>";  
?>
 <p><a href="index.php"/>Voltar ao Menu Principal</a></p>

</body>
</html>