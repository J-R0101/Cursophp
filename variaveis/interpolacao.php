<div class="titulo">Interpolação</div>

<?php

$numero = 10;
echo $numero;
echo '<div>';
echo '$numero';
echo '<div>';
echo "$numero";

echo '<br>';

$texto = "A sua nota é : $numero";

echo $texto;
echo '<br>';

$objeto = 'caneta';

echo "eu tenho 5 $objeto";
echo '<br>';
echo "eu tenho 5 {$objeto}s.";
echo '<br>';
echo "eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s ";
echo '<br>';
echo "$numero + 1";
echo '<br>';
//echo "{$numero + 1}";// não permitido


?>