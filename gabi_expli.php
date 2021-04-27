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
		<h2 id="pagina_atual">Questões</h2>
	</header><br/><br/>

	<div>
		<h2 id="quadro_principal">Matérias</h2>
		<button onclick="Botao_selecao(int = 1)" id="botao_um">Humanas</button>
		<button onclick="Botao_selecao(int = 2)" id="botao_dois">Linguagens</button>
		<button onclick="Botao_selecao(int = 3)" id="botao_tres">Matemática</button>
		<button onclick="Botao_selecao(int = 4)" id="botao_quatro">Natureza</button>
	</div>

	<footer>
        <?php include 'footer.php';?>
	</footer>
	<script src="javascript/funcoes.js"></script>
</body>
</html>
