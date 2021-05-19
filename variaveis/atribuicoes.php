<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições';

$numero = 10;
echo $numero;

echo '<br>';
$numero = $numero - 1;
echo '<br>';

echo $numero;
echo '<br>';

echo $numero + 1.5;
echo '<br>';

$numero--;//$numero = $numero - 1;

echo $numero;
echo '<br>';

--$numero;//$numero = $numero - 1;
echo $numero;

echo '<br>';
$numero++;//$numero = $numero + 1;

echo $numero;
echo '<br>';

++$numero;//$numero = $numero + 1;
echo $numero;
echo '<br>';

$numero = 20;
echo $numero;
echo '<br>';

$numero -= 5; 
echo $numero;
echo '<br>';

$numero += 5; 
echo $numero;
echo '<br>';

$numero *= 5;
echo $numero;
echo '<br>'; 

$numero /= 5; 
echo $numero;
echo '<br>'; 

$numero %= 6; 
echo $numero;
echo '<br>';

$numero **= 5;
echo $numero;
echo '<br>';

$numero .= 5;// apenas concatenação
echo $numero;
echo '<br>';

$texto = 'Esse e um texto';
echo $texto;
echo '<br>';

$texto = $texto . ' QUALQUER';

echo $texto;
echo '<br>';
$texto .= ' de verdade';

echo $texto;
echo '<br>';

//$variavelInexistente = valor existente

echo $variavelInexistente;
echo '<br>';
var_dump($variavelInexistente);

$valor = $variavelInexistente ?? 'valor default';

echo '<br>';

echo $valor;










?>