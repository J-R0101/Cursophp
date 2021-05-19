<div class="titulo">Constante</div>

<?php

define('TAXA_DE_JUROS', 5.9);

echo TAXA_DE_JUROS;

echo '<br>'. $TAXA_DE_JUROS. '!';

//TAXA_DE_JUROS = 2.5;

const NOVA_TAXA = 2.5;
echo '<br>'.NOVA_TAXA;

$valorvariavel = 2.8;
//define('NOVISSIMA_TAXA', $valorvariavel);
//const NOVISSIMA_TAXA = $valorvariavel);
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>'. NOVISSIMA_TAXA;

ECHO '<br>'. PHP_VERSION;
echo '<br>'.PHP_INT_MAX;

echo '<br> Linha:'. __LINE__;
echo '<br>'. __FILE__;
echo '<br>'. __DIR__;

?>