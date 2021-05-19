<div class="titulo">Break/Continue</div>

<?php

$cont = 1;

for(;;) {
    echo "$cont <br>";
    $cont++;

    If($cont > 5) {
    break;
    }
}
echo '<hr>';
for(;;) {
    $cont++;
    if($cont % 2 === 1) {
        continue;
    }
    echo "$cont <br>";
    echo '<hr>';

    if($cont >= 30) {
    break;
    }
    

    foreach (array(1,2,3,4,5,6) as $valor ) {
        if($valor === 5) break;
        if($valor % 2 === 0 ) continue;
        echo "$valor <br>";
    }
}
echo 'Fim!!';

echo '<hr>';

?>