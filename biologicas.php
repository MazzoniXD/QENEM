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
            <h2 id="pagina_atual">Biológicas</h2>
        </header><br/><br/>

        <div id="centro">
            <div id="id_questao_quadro">
                <p class="questao"><b>Questão 1</b></p></br>
                <p class="questao">(Enem/2018)</p></br>
                <p class="questao">Corredores ecológicos visam mitigar os efeitos da fragmentação dos ecossistemas promovendo a ligação entre diferentes áreas, com o objetivo de proporcionar o deslocamento de animais, a dispersão de sementes e o aumento da cobertura vegetal. São instituídos com base em informações como estudos sobre o deslocamento de espécies, sua área de vida (área necessária para o suprimento de suas necessidades vitais e reprodutivas) e a distribuição de suas populações.</p></br>
                <p class="questao"> Nessa estratégia, a recuperação da biodiversidade é efetiva porque:</p><br>
                <p class="questao">a) Propicia o fluxo gênico.</p>
                <p class="questao">b) Intensifica o manejo de espécies.</p>
                <p class="questao">c) Amplia o processo de ocupação humana.</p>
                <p class="questao">d) Aumenta o número de indivíduos nas populações.</p>
                <p class="questao">e) Favorece a formação de ilhas de proteção integral.</p>
                <button onclick="Resposta()" id="ver_resposta">Ver Resposta</button>
                <p class="questao" id="id_resposta" hidden>A resposta correta é a opção a) propicia o fluxo gênico.</br></br>
                    O fluxo gênico corresponde ao aumento da diversidade sob o ponto de vista genético. Dessa forma, os corredores ecológicos permitem o deslocamento dos animais e a dispersão de sementes.</br></br>
                    Isso resulta no aumento da cobertura vegetal que, por sua vez, faz com que os seres vivos possam se intercruzar.</br></br>
                    As demais alternativas estão erradas pois:</br></br>
                    b) O manejo de espécies tem como característica controlar possíveis danos e consequências negativas causados para a sociedade e até mesmo para o nicho ecológico.</br></br>
                    c) O processo de ocupação humana não está relacionado aos corredores ecológicos.</br></br>
                    d) A estratégia apresentada no enunciado não faz relação com o aumento do número de indivíduos.</br></br>
                    e) Os corredores ecológicos não favorecem a formação de ilhas de proteção integral.</p>
                </div>
        </div>

        <footer>
            <?php include 'footer.php';?>
        </footer>
        <script src="javascript/funcoes.js"></script>
    </body>
</html>
