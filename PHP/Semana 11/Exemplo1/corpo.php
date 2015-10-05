<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Corpo</title>
</head>
<body>
	<?php 
		$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : "";
		
		if (empty($_GET["pagina"])) {
			include("home.php");
		}
		else

		if ($pagina == 1) {
			include("pagina1.php");
		}
		else
			if ($pagina == 2) {
				include ("pagina2.php");
			}
		else
		if ($pagina == 3) {
			include("pagina4.php");
		}
		else
			if ($pagina == 4) {
			include("pagina4.php");
		}
		
	 ?>
</body>
</html>