<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
session_start();
echo "Bem vindo a pagina #2";
echo "<br>Valor da variável de sessão x: "
.$_SESSION["x"];
?>
</body>
</html>