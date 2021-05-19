<div class="titulo">Switch</div>

<?php

$categoria = 'luxo';
$preco = 0.0;
$carro = '';

if($categoria === 'luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
}
elseif($categoria === 'suv') {
    $carro = 'renegade';
    $preco = 80000;
}
elseif($categoria === 'sedan') {
    $carro = 'etios';
    $preco = 55000;
}
else {
    $carro = 'mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');

echo "<p>Carro: $carro<br> Preço: $precoFormatado</p>";

$categoria = '???';
switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;

    case 'suv':
        $carro = 'renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'etios';
        $preco = 55000;
        break;    
    default:
        $carro = 'mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco,2 ,',', '.');

echo "<p>Carro: $carro<br> Preço: $precoFormatado</p>";

?>