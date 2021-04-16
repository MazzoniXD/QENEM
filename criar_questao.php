<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Q-ENEM</title>
	<link rel="stylesheet" href="css/normalizacao.css">
	<link rel="stylesheet" href="css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<header>
        <?php include 'header.php';?>
		<h2 id="pagina_atual">Criar Questão</h2>
	</header><br/><br/>

	<div id="centro">
        <form id="id_formulario">
            <label for="id_questao">Questão:</label><br/>
            <textarea id="id_questao" placeholder="Digite a questão com as alternativas" type="text" name="enunciado" rows="20" required></textarea><br/><br/><br/><br/>

            <label for="id_gabarito">Resposta:</label><br/>
			<textarea id="id_gabarito" placeholder="Digite o gabarito" type="text" name="gabarito" rows="15" required ></textarea><br/><br/>
        </form>
	</div>

	<footer>
        <?php include 'footer.php';?>
	</footer>
	<script src="javascript/funcoes.js"></script>
</body>
</html>
