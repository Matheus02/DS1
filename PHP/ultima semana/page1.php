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
	echo "Bem vindo a pagina #1";
$_SESSION["x"] = "PHP";
?>
<br>
<a href="page2.hp">page 2</a>
</body>
</html>