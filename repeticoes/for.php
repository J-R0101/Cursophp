<div class="titulo">For</div>

<?php

for($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}
echo "<hr>";
for(; $cont <= 10; $cont++) {
    echo "$cont <br>";
}
echo "<hr>";

for(; $cont <= 15; ) {
    echo "$cont <br>";
   $cont++;
}

echo '<hr>';
$array = [
    1 => 'domingo',
         'segunda',
          'terça',
           'quarta', 
           'quinta', 
           'sexta', 
           'sabado'
        ];

print_r($array);
echo '<br>';
echo '<hr>';

for($i = 0; $i < count($array); $i++) {
    echo "{$array[$i]} <br>";
}

echo '<hr>';
echo '<br>';

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

for($i = 0; $i < count($matrix); $i++) {
    
    for($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]}";
    }
    echo '<br>';
}

?>