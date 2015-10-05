<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link href="estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="interface">
    	<header id="cabecalho">
        	<h1>Escola Nova Art</h1>
        </header>
        <nav id="menu">
        	<ul>
            	<li><a href="index.php">Cadastro de Aluno</a></li>
                <li><a href="cadastroboletim.php">Cadastro Boletim</a></li>
            </ul>
        </nav>
        <section id="corpo">
        	<h2>Cadastro do Boletim</h2>
<?
	$m1=$_GET["m1"];
	$m2=$_GET["m2"];
	$m3=$_GET["m3"];
	$m4=$_GET["m4"];
	
	$p1=$_GET["p1"];
	$p2=$_GET["p2"];
	$p3=$_GET["p3"];
	$p4=$_GET["p4"];
	
	$i1=$_GET["i1"];
	$i2=$_GET["i2"];
	$i3=$_GET["i3"];
	$i4=$_GET["i4"];
	
	$h1=$_GET["h1"];
	$h2=$_GET["h2"];
	$h3=$_GET["h3"];
	$h4=$_GET["h4"];
	
	$g1=$_GET["g1"];
	$g2=$_GET["g2"];
	$g3=$_GET["g3"];
	$g4=$_GET["g4"];
	
	$e1=$_GET["e1"];
	$e2=$_GET["e2"];
	$e3=$_GET["e3"];
	$e4=$_GET["e4"];
	
	$a1=$_GET["a1"];
	$a2=$_GET["a2"];
	$a3=$_GET["a3"];
	$a4=$_GET["a4"];

	$mat = ($m1+$m2+$m3+$m4)/4;
	$por = ($p1+$p2+$p3+$p4)/4;
	$ing = ($i1+$i2+$i3+$i4)/4;
	$his = ($h1+$h2+$h3+$h4)/4;
	$geo = ($g1+$g2+$g3+$g4)/4;
	$edu = ($e1+$e2+$e3+$e4)/4;
	$art = ($a1+$a2+$a3+$a4)/4;
	
	echo "Matemática: ".$mat;
	echo "Português: ".$por;
	echo "Inglês: ".$ing;
	echo "História: ".$his;
	echo "Geografia: ".$edu;
	echo "Arte: ".$art;
	
	if ($mat >=7 && $art >=7 && $por >=7 && $ing >=7 && $his >=7 && $geo >=7){
		echo "Aluno Aprovado.";
	}
	else{
		echo "Aluno Reprovado";
	}


	
	
	
?>
 		<h2 class="centro">Criado por Matheus Freire</h2>
	</div>
</body>
</html>