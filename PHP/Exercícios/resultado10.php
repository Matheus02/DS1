<!doctype html>
<head>
<title>Resultado 2</title>
</head>
<body>
<?php
 $lad1 = $_GET ["a"];
 $lad2 = $_GET ["l"];
 
 $area = $lad1 * $lad2;
 $pot = $area * 18;
 echo "Area de: ".$area."m²."."<br>";
 echo "Deve-se Usar ".$pot."w de Potência.".
?>
<p><a href="exercicio10.php"/>Voltar ao Exercício</a></p>
</body>
</html>