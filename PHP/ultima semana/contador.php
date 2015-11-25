<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<h1>contador.php</h1>
<?php
$nome = "contador.txt";

//abre o arquivo contador.txt - r=somente leitura
$arquivo = fopen($nome, "r");
$contador = fgets($arquivo, 25);

//fecha o arquivo contador.txt
fclose($arquivo);
$contador++;

//abre o arquivo contador.txt - w=escrita
$arquivo = fopen($nome, "w+");

//grava o valor de conteúdo no arquivo
fwrite($arquivo, $contador, 25);
fclose($arquivo);
echo "Esta página foi visitada $contador vezes";
?>
</body>
</html>