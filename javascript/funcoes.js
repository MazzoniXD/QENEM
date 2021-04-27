function Entrar_alu(){
    elemento = document.querySelector('#id_email');
    elemento2 = document.querySelector('#id_cpf');
    elemento3 = document.querySelector('#id_senha');
    if(elemento.value.length >= 20 && elemento2.value.length == 11 && elemento3.value >= 1){
        event.preventDefault()
        window.location='gabi_expli.php';
    }
}

function Entrar_pro(){
    elemento = document.querySelector('#id_email');
    elemento2 = document.querySelector('#id_cpf');
    elemento3 = document.querySelector('#id_senha');
    if(elemento.value.length >= 20 && elemento2.value.length == 11 && elemento3.value >= 1){
        event.preventDefault()
        window.location='criar_questao.php';
    }
}

function Botao_selecao(){
    if(int == 1){
        window.location='humanas.php';
    }else if (int == 2){
        window.location='linguagens.php';
    }else if (int == 3){
        window.location='matematica.php';
    }else if (int == 4){
        window.location='biologicas.php';
    }
}

function Pro_ou_alu(){
    if(x == 1){
        document.querySelector('#id_aluno').checked = false;
    }else if(x == 2){
        document.querySelector('#id_professor').checked = false;
    }
}

function Pro_Alu(){
    elemento = document.querySelector('#id_email');
    elemento2 = document.querySelector('#id_cpf');
    elemento3 = document.querySelector('#id_senha');
    elemento4 = document.querySelector('#id_consenha');
    if(elemento.value.length >= 20 && elemento4.value == elemento3.value && elemento2.value.length == 11){
        event.preventDefault()
        if(document.querySelector('#id_professor').checked === true){
            window.location='pagina_professor.php';
        }else if(document.querySelector('#id_aluno').checked === true){
            window.location='pagina_aluno.php';
        }
    }
}

function Resposta(){
    if(document.querySelector('#id_resposta').hidden === true){
    document.querySelector('#id_resposta').hidden = false;
    }else{
    document.querySelector('#id_resposta').hidden = true;
    }
}
