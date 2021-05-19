<div class="titulo">While / Do_while</div>

<?php

const VALOR_LIMITE = 5;
$contador = 2;
//while
while($contador < VALOR_LIMITE){

    echo "while $contador <br>";
    $contador++;
}
echo '<hr>';
echo '<br>';


  //do_while
  $contador = 2;
do {

    echo "while $contador <br>";
$contador++;

}while($contador < VALOR_LIMITE);

echo '<br>';
echo '<hr>';

$contador = 0;
while(true) {
    echo "while $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE) break;

}

echo '<br>';
echo '<h>';

$contador = 100;
do {
    echo "do-while(true) $contador <br>";
    $contador++;

} while($contador < VALOR_LIMITE);


?>