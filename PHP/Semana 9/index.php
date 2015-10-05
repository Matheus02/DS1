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
        	<h2>Cadastro de Alunos</h2>
            <form action="resultadocadastro.php" method="get">
            	<p>Matricula <input type="text" name="matricula" size="10" maxlength="6"/></p>
                <p>Nome <input type="text" name="nome" size="50" maxlength="30"/></p>
                <p> Sala:
                 <select name="sala" size="1">
                	<option value="1º Ano">1ºAno</option>
                    <option value="2º Ano">2ºAno</option>
                    <option value="3º Ano">3ºAno</option>
                    <option value="4º Ano">4ºAno</option>
                    <option value="5º Ano">5ºAno</option>
                 </select>
                 </p>
                 <p>Periodo:
                 <input type="radio" name="periodo" value="manhã" id="periodoM"/>Manhã
                 <input type="radio" name="periodo" value="tarde" id="periodoT"/>Tarde
                 </p>
                 <p>Atividade extra:</p>
                 <p><input type="checkbox" name="atividadeextra" value="ingles"
                    id="atividadeingles">Ingles
                    <input type="checkbox" name="atividadeextra" value="informatica"
                    id="atividadeinformatica">Informática
                    <input type="checkbox" name="atividadeextra" value="futsal"
                    id="atividadefutsal">Futsal
                    <input type="checkbox" name="atividadeextra" value="teatro"
                    id="atividadeteatro">Teatro
                    <input type="submit" value="Enviar"/>
					<input type="reset" value="Limpar"/></p>
            </form>
            <section id="corpo">
        	<h2 class="centro">Criado por Matheus Freire</h2>
            </section>
	</div>
</body>
</html>