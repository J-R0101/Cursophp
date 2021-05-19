<div class="titulo">Desafio For</div>

<!--
    1° pode usar incremento $i++
    2° Não pode usarr incremento
-->

<?php
$inpressao = '';

for( $cont = 1; $cont <= 5; $cont++) {

    $inpressao = '#';
    echo "$inpressao <br>";
}
echo '<hr>';

for ($inpressao2 = '#'; $inpressao2 !== '######'; $inpressao2 .= '#') {
    echo "$inpressao2 "
}

?>