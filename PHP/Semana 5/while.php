<!doctype html>
<html lang="pt-br">
<head>
<title>Teste While</title>
</head>
<body>
<h1>While.php</h1>

<?php
  echo "Com incremento:  <br>";
  $i = 0;
  while ($i <10){
	  echo "Valor de i = ".$i."<br>";
	  $i++;
	  
  }
  echo "<br>Com decremento: <br>";
  $a = 10;
  while ($a > 0){
	  echo "Valor de a = ".$a."<br>";
	  $a--;
  }
?>
</body>
</html>