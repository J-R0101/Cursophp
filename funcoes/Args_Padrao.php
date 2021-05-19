<div class="titulo">Argumentos Padrões</div>

<?php

function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {

    echo "Bem vindo , $nome $sobrenome!<br>";

}

echo saudacao();
echo saudacao(null);
echo saudacao(null, null);
echo saudacao('Mestre', 'Supremo');

function anotarPedido($comida, $bebida = 'Agua') {

    echo "Para comer: $comida <br>";
    echo "para beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'refrigerante');


//não recomendado
echo '<br>'. 'Não recomendado';
function anotarPedido2($bebida = 'Agua', $comida){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

//anotarPedido2('Hamburguer');
anotarPedido2('Pizza', 'refrigerante');

?>