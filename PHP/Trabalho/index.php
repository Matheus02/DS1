<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="X-UA-Compatible" content="IE-edge"/>
	<meta name="viewport" content="width=device-width, initial-sacale=1"/>
	<title>Trabalho com incluse</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="recursos/css/bootstrap.css">
	<link href="recursos/css/default.css" rel="stylesheet"/>
</head>
<body>
	<div id="principal">
		<header id="cabecalho">
			<?php
			include ("topo.php");
			?>
		</header>
		<nav id="menu">
			<?php
			include ("menu.php");
			?>
		</nav>
		<section id="corpo">
			<?php
			include ("corpo.php");
			?>
		</section>
		<footer id="rodape">
			<?php
			include ("rodape.php");
			?>
		</footer>
	</div>
	
</body>
</html>