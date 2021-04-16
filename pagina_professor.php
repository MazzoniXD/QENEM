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
		<h2 id="pagina_atual">Página do Professor</h2>
	</header><br/><br/>

	<div id="centro">
		<form id="id_formulario">
		
			<label for="id_email">Email</label><br/>
			<input id="id_email" placeholder="Email" type="email" name="email" required /><br/><br/>

			<label for="id_cpf">CPF</label><br/>
			<input id="id_cpf" placeholder="CPF" type="text" name="cpf" required /><br/><br/>

			<label for="id_senha">Senha</label><br/>
			<input id="id_senha" placeholder="Senha" type="password" name="senha" required /><br/><br/>

			<input type="reset" name="Reniciar">

			<input onclick="Entrar_pro()" type="submit" name="Enviar"><br/>
		</form>
	</div>

	<footer>
        <?php include 'footer.php';?>
	</footer>
	<script src="javascript/funcoes.js"></script>
</body>
</html>