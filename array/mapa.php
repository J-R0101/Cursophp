<div class="titulo">Mapa</div>

<?php


$dados = array(
    "idade" => 25, 
    "cor" => "verde",
     "peso" => 49.8
    );

print_r($dados);
echo '<br>';

echo $dados[0];
echo '<br>';
var_dump($dados[0]);//null
echo '<br>'. $dados["idade"];
echo '<br>'. $dados["cor"];
echo '<br>'. $dados["peso"];
echo '<br>';
var_dump($dados["outra_informacao"]);//null

echo '<br>';

$lista = array (
    "a",
    "cinco" => "b",
    8 => "d",
    "e",
    6 => "f",
    8 => "h"
);//não recomendado

echo '<br>';

print_r($lista);

//Acresentar valor ao array
$lista[] = 'i';
echo '<br>';
print_r($lista);

//Não recomendado
$lista[false] = "Tentei indexar com false"; // indexao 0
echo '<br>';
print_r($lista);


$lista[true] = "Tentei indexar com true"; // indexa o 1
echo '<br>';
print_r($lista);

?>