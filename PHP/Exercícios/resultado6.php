<!doctype html>
<head>
<title>Resultado 6</title>
</head>
<body>
<?php
 $a = $_GET ["a"];
 $b = $_GET ["b"];
 $c = $_GET ["c"];
 
 if ($a>$b && $a>$c){
 echo "O maior n�mero �: ".$a;
 }
 else{
 if ($b>$a && $b>$c){
 echo "O maior n�mero �: ".$b;
 }
 else{
 if ($c>$a && $c>$b){
 echo "O maior n�mero �: ".$c;
 }
 else{
 if ($a==$b && $a==$c){
 echo "Todos os n�meros s�o iguais.";
 }else{
 if ($a==$b){
 echo "O primeiro e o segundo n�mero s�o iguais.";
 }else{
 if($a==$c){
 echo "O primeiro e o terceiro n�mero s�o iguais";
 }else{
 echo "O segundo e o terceiro n�mero s�o iguais";
}
 }
 }
 }
 }
 }
?>
<p><a href="exercicio6.php"/>Voltar ao Exerc�cio</a></p>
</body>
</html>