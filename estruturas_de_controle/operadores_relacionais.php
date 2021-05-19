<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(1 == 1);
echo '<br>';
var_dump(1 > 1);
echo '<br>';
var_dump(1 >= 1);
echo '<br>';
var_dump(4 < 23);
echo '<br>';
var_dump(1 <= 7);
echo '<br>';
var_dump(1 != 1);
echo '<br>';
var_dump(1 <> 1);
echo '<br>';

var_dump(111 == '111');
echo '<br>';
var_dump(111 === '111');
echo '<br>';
var_dump(111 != '111');
echo '<br>';
var_dump(111 !== '111');
echo '<br>';

echo "<p>Relacionais no if/else</p><hr>";
echo '<br>';

$idade = 15;
if($idade = 15) {
    echo 'Menor de idade';
} else if($idade <= 65) {
    echo 'Adulto';
}else {
    echo 'Terceira idade';
}

echo '<br>';
echo '<p>Spaceship</p><hr>';
var_dump(500 <=> 3);
echo '<br>';
var_dump(50 <=> 50);
echo '<br>';
var_dump(5 <=> 50);
echo '<br>';

echo '<p>Valores podem ser V ou F</p><hr>';
var_dump(!!5);
echo '<br>';
var_dump(!!0);
echo '<br>';


?>
<style>
p{
    margin-bottom: 0px;
}

hr{
    margin-top: 0px;
}

</style>