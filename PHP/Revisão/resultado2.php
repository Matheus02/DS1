<!doctype html>
<html lang="pt-br">
<head>
<title>resultado 2</title>
</head>
<body>
<?php
 $val = $_GET["val"];
 $val2 = $val + ($val * 10/100);
 $custo = $val2 + ($val2 * 10/100);
 
 echo "O Custo Final é de: ".$custo;
?>

</body>
</html>