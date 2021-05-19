<div class="titulo">Desafio Inpressão</div>

<!--
Enunciado:
-Imprimir apenas os valores do array que contem indice par
-Desifio adicional: Resolver com for e foreach
-Valores esperados: AAA, CCC, EEE

-->

<?php

$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for( $i = 0; $i < count($array); $i++) {

    if($i % 2 === 1) continue;
    echo "{$array[$i]} ";
}
echo '<br>';
echo '<hr>';

foreach($array as $chave => $valor) {
    if($chave % 2 !== 0) continue;
    echo "$valor ";
}
?>