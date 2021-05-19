<div class="titulo">Basico de Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
EcHo $soma;
echo $Soma;// variaveis sao case sensitive
$somaDosNumeros = 0;

echo '<br>';
echo isset($somaDosNumeros);// verifica se a variavel esta setada

echo '<br>';
unset($somaDosNumeros);// tira o valor da variavel 
echo isset($somaDosNumeros);// mostra nada
echo '<br>';
var_dump($somaDosNumeros);
echo '<br>';
echo !isset($somaDosNumeros);// mostra setada novamente
echo '<br>';

$variavel = 10;
echo '<br>';

echo $variavel;
echo '<br>';

$variavel = "agora sou uma variavel";
 echo $variavel;
 echo '<br>';

 // Nomeclaturas de variaveis

 $var = 'valida';
 $var2 = "valida";
 $VAR3 = 'Valida';
 $_var_4 ='valida';
 $vâr5 ='valida'; // valida porem ão recomendado utilizar acentos ou carcteres especiais
 //$6var = invalida;
//$%var7 = invalida;
//$var8% = invalida;
//$var-9 = invalida;
echo '<br>';
var_dump($_SERVER["HTTP_HOST"]); // exxemplo de variavel pre-definida


?>