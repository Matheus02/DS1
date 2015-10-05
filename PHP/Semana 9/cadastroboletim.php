<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Projeto interdiciplinar - DDWII e DSI</title>

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
            <form action="resultadoboletim.php" method="get">
                <p>Nome <input type="text" name="nome" size="45" maxlength="30"/></p>
            <table>
            <tr>
                <td>Matemática</td>
                	<td><input type="text" name="m1" size="10" maxlength="2"/></td>
                	<td><input type="text" name="m2" size="10" maxlength="2"/></td>
                	<td><input type="text" name="m3" size="10" maxlength="2"/></td>
                	<td><input type="text" name="m4" size="10" maxlength="2"/></td>
            </tr>
            <tr>
                <td>Português</td>
                	<td><input type="text" name="p1" size="10" maxlength="2"/></td>
                	<td><input type="text" name="p2" size="10" maxlength="2"/></td>
                	<td><input type="text" name="p3" size="10" maxlength="2"/></td>
                	<td><input type="text" name="p4" size="10" maxlength="2"/></td>
            </tr>
            <tr>
                <td>Inglês</td>
                	<td><input type="text" name="i1" size="10" maxlength="2"/></td>
                	<td><input type="text" name="i2" size="10" maxlength="2"/></td>
                	<td><input type="text" name="i3" size="10" maxlength="2"/></td>
                	<td><input type="text" name="i4" size="10" maxlength="2"/></td>
            </tr>
            <tr>
                <td>História</td>
                	<td><input type="text" name="h1" size="10" maxlength="2"/></td>
                	<td><input type="text" name="h2" size="10" maxlength="2"/></td>
                	<td><input type="text" name="h3" size="10" maxlength="2"/></td>
                	<td><input type="text" name="h4" size="10" maxlength="2"/></td>
            </tr>
            <tr>
                <td>Geografia</td>
                	<td><input type="text" name="g1" size="10" maxlength="2"/></td>
                	<td><input type="text" name="g2" size="10" maxlength="2"/></td>
                	<td><input type="text" name="g3" size="10" maxlength="2"/></td>
                	<td><input type="text" name="g4" size="10" maxlength="2"/></td>
            </tr>
            <tr>
                <td>Ed. Física</td>
                	<td><input type="text" name="e1" size="10" maxlength="2"/></td>
                	<td><input type="text" name="e2" size="10" maxlength="2"/></td>
                	<td><input type="text" name="e3" size="10" maxlength="2"/></td>
                	<td><input type="text" name="e4" size="10" maxlength="2"/></td>
            </tr>
            <tr>
                <td>Arte</td>
                	<td><input type="text" name="a1" size="10" maxlength="2"/></td>
                	<td><input type="text" name="a2" size="10" maxlength="2"/></td>
                	<td><input type="text" name="a3" size="10" maxlength="2"/></td>
                	<td><input type="text" name="a4" size="10" maxlength="2"/></td>
            </tr>
            </table>
            <input type="submit" value="Enviar"/>
            <input type="reset" value="Limpar"/>
            </form>
            <h2 class="centro">Criado por Matheus Freire</h2>
	</div>
</body>
</html>