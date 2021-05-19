<div class="titulo">Operador ternario</div>

<?php

$idade = 70;
$status;

if($idade >= 18) {

    $status = 'Maior idade';
} else {

    $status = ' Menor idade';
}

echo "$status <br>";

$idade = 17;
//Operador ternario ?
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade';

echo "$status<br>";
?>