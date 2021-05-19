<div class="titulo">Closure & Callable</div>

<?php

$soma1 = function ($a, $b) {
    return $a + $b;
};

function soma2($a, $b){
    return $a + $b;
}

echo $soma1(2, 3 ) . ' ';
echo (is_callable($soma1) ? 'sim' : 'não') . '<br>';

echo soma2(2, 3 ). ' ';
echo (is_callable(soma2) ? 'sim' : 'não') . '<br>';


var_dump($soma1);

function executar($a, $b, $op, Callable $funcao) {
     
    $resultado = $funcao ($a, $b);
    echo "$a $op $b = $resultado<br>";
}
echo '<br>';
executar(2, 3, '+', $soma1);
executar(2, 3, '+', soma2);


function executar2($a, $b, $op, Closure $funcao) {
     
    $resultado = $funcao ($a, $b);
    echo "$a $op $b = $resultado<br>";
}
echo '1';
echo '<br>';
executar2(2, 2, '+', $soma1);
echo '<br>'. '2';
executar2(2, 2, '+', soma2);

?>