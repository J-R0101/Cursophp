<div class="titulo">Array Constantes</div>

<?php

const FRUTAS = ['Laranja', 'Abacaxi'];
//FRUTAS[0] = 'Banana'; não permite
//FRUTAS[1] = 'Banana';não permite

echo FRUTAS[0];

const CARROS = [
    "Fiat" => "Uno",
    "Ford" => "Fiesta"
];
    //CARROS ["BMW"] = '325i';
    echo '<br>'. CARROS["Fiat"];

    define( 'CIDADES', array ('Belo Horizonte', 'Recife'));
    //CIDADES[] = '325i';

    echo '<br>'.CIDADES[1];

?>