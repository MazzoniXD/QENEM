

function testeConteudo() {
    elemento = document.querySelector('#campo1');

    alert(elemento.value);
}

document.querySelector('#botao').onclick = function() {
    testeConteudo();
};

document.querySelector('#botao_esconder').onclick = function() {
    elemento = document.querySelector('#formulario');
    botao = document.querySelector('#botao_esconder');
     
    if(elemento.style.display === "none") {
        elemento.style.display = '';
        botao.innerHTML = 'Esconder';
    }
    else {
        elemento.style.display = 'none';
        botao.innerHTML = 'Mostrar';
    }
};

document.querySelector('#campo1').onkeyup = function() {
    
    elemento = document.querySelector('#campo1');
    
    valor = elemento.value;
    
    msg = document.querySelector('#msg_validar');
    
    if(valor.length < 10) {
       msg.innerHTML = '<p style="color:red">Inválido</p>';
    }
    else {
        msg.innerHTML = '<p style="color:green">Válido</p>';
    }
};


document.querySelector('#botao_estilo').onclick = function() {
    elemento = document.getElementById('texto');
    
    elemento.style.color = 'blue';
    elemento.style.backgroundColor = 'green';
    elemento.style.marginLeft = '200px';
    elemento.style.fontSize = '5em';
}

document.querySelector('#botao_conteudo').onclick = function() {
    elemento = document.getElementById('id_div');
    
    elemento.innerHTML = "<ol><li>Item 1</li><li>Item 2</li></ol>";
}