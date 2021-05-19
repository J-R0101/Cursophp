<div class="titulo"> Valor VS Referencia</div>

<?php
//Atribuição por valor
$variavelA = 'Valor inicial';
echo $variavelA;
$variavelvalor = $variavelA;
echo '<br>', $variavelvalor;

$variavelvalor = 'Novo valor';
echo "<br>$variavelA";
echo " $variavelvalor";

//Attribuição por referência

$variavelreferencia = &$variavelA; //referenciando memorial atraves do (&)

$variavelreferencia = ' mesma referencia';

echo '<br>';
echo "$variavelreferencia , $variavelA";

?>