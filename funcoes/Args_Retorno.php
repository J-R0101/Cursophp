<div class="titulo">Argumentos & Retorno</div>

<?php

function obterMesagem() {
  return 'Seja bem vindo(a)';
}

obterMesagem();
$m = obterMesagem();
echo $m;
echo '<br>', obterMesagem();
echo '<br>';
var_dump(obterMesagem());

function obetrMesagemComRetorno($nome){
    return "Bem vindo, {$nome}!";
}

echo '<br>', obetrMesagemComRetorno('Wagner');
echo  '<br>', obetrMesagemComRetorno('João');

function soma($a, $b){
    return $a + $b;
}

$x = 4;
$y = 5;
echo '<br>', soma(4, 5);
echo '<br>', soma($x, $y);

function trocavalor($a, $novovalor){
    $a= $novovalor;
}

$variavel = 1;

trocavalor($variavel, 3);
echo '<br>', $variavel;


function trocavalordeverdade(&$a, $novovalor){
    $a = $novovalor;
}

trocavalordeverdade($variavel, 5000);
echo '<br>', $variavel;


?>