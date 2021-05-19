<div class="titulo">Recursividade</div>

<?php

function somaumAte($numero) {
    $soma = 0;
    for(; $numero >= 1; $numero--){

        $soma += $numero;
    }
    return $soma;

}

echo somaumAte(150) . '<br>';


function somaRecursividadeUmAte($numero){
    if($numero === 1){
        return 1;
    }
    return $numero + somaRecursividadeUmAte($numero - 1);

}

echo somaRecursividadeUmAte(150). '<br>';

function somaRecursivaEconomica($numero){
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursivaEconomica(150). '<br>';

?>