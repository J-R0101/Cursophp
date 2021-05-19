<div class="titulo"> Usando Tipos</div>

<?php
echo "função soma 1" . '<br>' ;
function soma1($a, $b) {
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo soma1(1, 2). '<br>';
echo soma1(1.7, 2.5). '<br>';
echo soma1(1, '4dois'). '<br>';

echo "função soma 2" . '<br>';
function soma2(int $a, int $b){
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo soma2(1, 2). '<br>';
echo soma2(1.7, 2.5). '<br>';
echo soma2(1, '4dois'). '<br>';

echo "função soma 3" . '<br>';
function soma3($a, $b): int{
    echo "<span> Somando $a + $b = </span>";
    return $a + $b;
}

echo soma3(1, 2). '<br>';
echo soma3(1.7, 2.5). '<br>';
echo soma3(1, '4dois'). '<br>';


?>