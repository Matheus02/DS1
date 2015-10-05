<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Corpo</title>
</head>
<body>
	<?php 
		$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "";
		
		if ($pagina == 1) {
			include("pagina1.php");
		}
		else
			if ($pagina == 2) {
				include ("pagina2.php");
			}
	 ?>
</body>
</html>