<div class="titulo">Op. com Array</div>

<?php

$dados1 = [
    "nome" => "jose",
    "idade" => 28
];

$dados2 = [

    "naturalidades" => "fortaleza"
];

$dadosCompletos = $dados1 + $dados2;

print_r($dadosCompletos);
echo '<br>';

echo is_array($dadosCompletos);
echo '<br>';

echo count($dadosCompletos);
echo '<br>';

//indice randomico
$indice = array_rand($dadosCompletos);
echo "$indice";
echo '<br>';
echo "$dadosCompletos <br>";
echo "{$dadosCompletos['idade'] }";
//echo "$dadosCompletos['idade']"; gera erro
echo '<br>';

unset($dadosCompletos["nome"]);
echo ' <br>';
print_r($dadosCompletos);
echo '<br>';

unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];
$decimais = $pares + $impares;;

echo '<br>';

print_r($decimais);

//junta os valores dos array
$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

//ordena o array
sort($decimais);
echo '<br>';
print_r($decimais);

?>