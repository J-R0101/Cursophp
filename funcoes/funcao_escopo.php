<div class="titulo">Funções & Escopo</div>

<?php

function imprimirMensagens() {
    echo "ola!";
    echo "Até a proxima! <br>" ;
}

imprimirMensagens();

$variavel = 1;

function trocarvalor() {
    $variavel = 2;
    echo "durante a função : $variavel <br>";
}

echo "Antes: $variavel <br>";
trocarvalor();
echo "depois: $variavel <br>";

function trocarvalordeverdade() {
    global $variavel;
    $variavel = 3;
    echo "durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocarvalordeverdade();
echo "Depois: $variavel <br>";

var_dump(trocarvalordeverdade());
?>