
	<?php 
		$modulo = isset($_GET["modulo"]) ? $_GET["modulo"] : "";
		
		if (empty($_GET["modulo"])) {
			include("home.php");
		}
		else

		if ($modulo == 1) {
			include("modulo1.php");
		}
		else
			if ($modulo == 2) {
				include ("modulo2.php");
			}
		else
		if ($modulo == 3) {
			include("modulo3.php");
		}
		
	 ?>