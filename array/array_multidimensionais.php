<div class="titulo">Multidimensionais</div>

<?php

$dados = [
    ["Nome" => "Roberto",
    "Idade" => 26,
    "Naturalidade" => "São paulo"
],
["Nome" => "Maria",
"Idade" => 25,
"Naturalidade" => "Bahia"
],
];

print_r($dados);

echo '<br>'. $dados[0]['Idade'];

echo '<br>'. $dados[1]['Idade'];

$dados = [
    "Nome" => "Florinda",
    "Idade" => 30,
    "Naturalidade" => "Cidade do mexico"
];

echo '<br>';
print_r($dados);
echo '<br>'. $dados[2] ['Idade'];

$dados[2]["vizinho"] = "Chaves";
echo '<br>';

print_r($dados[2]);

unset($dados[1]);
echo '<br>';
print_r($dados);
var_dump($dados[1000]);

?>