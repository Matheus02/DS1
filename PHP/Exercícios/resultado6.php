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
 echo "O maior número é: ".$a;
 }
 else{
 if ($b>$a && $b>$c){
 echo "O maior número é: ".$b;
 }
 else{
 if ($c>$a && $c>$b){
 echo "O maior número é: ".$c;
 }
 else{
 if ($a==$b && $a==$c){
 echo "Todos os números são iguais.";
 }else{
 if ($a==$b){
 echo "O primeiro e o segundo número são iguais.";
 }else{
 if($a==$c){
 echo "O primeiro e o terceiro número são iguais";
 }else{
 echo "O segundo e o terceiro número são iguais";
}
 }
 }
 }
 }
 }
?>
<p><a href="exercicio6.php"/>Voltar ao Exercício</a></p>
</body>
</html>