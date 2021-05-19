<div class="titulo">Operadores logicos</div>


<?php

echo '<p>V ou F</p><hr>';
var_dump(true);
echo '<br>';

var_dump(!true);//not
echo '<br>';

var_dump(!!true);
echo '<br>';

echo "<p>Tabela Verdade 'and'</p><hr>";
echo '<br>';

var_dump(true && true);
echo '<br>';
var_dump(true && false);
echo '<br>';
var_dump(false && true);
echo '<br>';
var_dump(false && false);
echo '<br>';

var_dump(true and true);
echo '<br>';
var_dump(true and false);
echo '<br>';
var_dump(false and true);
echo '<br>';
var_dump(false and false);
echo '<br>';

echo "<p>Tabela Verdade 'or'</p><hr>";
var_dump(true || true);
echo '<br>';
var_dump(true || false);
echo '<br>';
var_dump(false || true);
echo '<br>';
var_dump(false || false);
echo '<br>';

var_dump(true or true);
echo '<br>';
var_dump(true or false);
echo '<br>';
var_dump(false or true);
echo '<br>';
var_dump(false or false);
echo '<br>';

echo "<p>Tabela 'xor'(ou exclusivo)  </p><hr>";
var_dump(true xor true);
echo '<br>';
var_dump(true xor false);
echo '<br>';
var_dump(false xor true);
echo '<br>';
var_dump(false xor false);
echo '<br>';

var_dump(true != true);
echo '<br>';
var_dump(true != false);
echo '<br>';
var_dump(false != true);
echo '<br>';
var_dump(false != false);
echo '<br>';


echo "<p> Example </p><hr>";

$idade = 62;
$sexo = 'F';
if ( $idade >= 60 && $sexo === 'F') {
    echo 'Pode se aposentar '. $sexo;
} else if($idade >= 65 && $sexo === 'M') {
    echo 'Pode se aposentar '. $sexo;
} else {
    echo 'Vai ter que trabalhar um pouco...';
}

?>