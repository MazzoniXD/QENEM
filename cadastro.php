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
		<h2 id="pagina_atual">Cadastro</h2>
	</header><br/><br/>

	<div id="corpo">
		<div id="centro">
			<form id="id_formulario">
				<label for="id_nome">Nome</label><br/>
				<input id="id_nome" placeholder="Nome" type="text" name="nome" required /><br/><br/>

				<label for="id_sobrenome">Sobrenome</label><br/>
				<input id="id_sobrenome" placeholder="Sobrenome" type="text" name="sobrenome" required /><br/><br/>

				<label for="id_email">Email</label><br/>
				<input id="id_email" placeholder="Email" type="email" name="email" required /><br/><br/>

				<label for="id_data">Data de Nascimento</label><br/>
				<input id="id_data" type="date" name="data" required /><br/><br/>

				<label for="id_tipo">Tipo</label><br/>
				<input onclick="Pro_ou_alu(x = 1)"id="id_professor" type="radio" name="professor" value="op1" checked/>Professor<br/>
				<input onclick="Pro_ou_alu(x = 2)" id="id_aluno" type="radio" name="aluno" value="op2"/>Aluno<br/><br/>

				<label for="id_cpf">CPF</label><br/>
				<input id="id_cpf" placeholder="CPF" type="text" name="cpf" required /><br/><br/>

				<label for="id_escola">Escola</label><br/>
				<input id="id_escola" placeholder="Escola" type="text" name="escola" required /><br/><br/>

				<label for="id_senha">Senha</label><br/>
				<input id="id_senha" placeholder="Senha" type="password" name="senha" required /><br/><br/>

				<label for="id_consenha">Confirmar Senha</label><br/>
				<input id="id_consenha" placeholder="Senha Novamente" type="password" name="consenha" required /><br/><br/>

				<input type="reset" name="Reniciar">

				<input onclick="Pro_Alu()" type="submit" name="Enviar"><br/>
			</form>
		</div>
	</div>

	<br/><br/>

	<footer>
        <?php include 'footer.php';?>
	</footer>
	<script src="javascript/funcoes.js"></script>
	</body>
</html>
