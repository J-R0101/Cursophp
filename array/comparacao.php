<div class="titulo">Comparação  Arrays</div>

<?

$arr1 = ['Nome' => 'Maria', 'Idade' => 20];
$arr2 = ['Nome' => 'Maria', 'Idade' => 20];
var_dump($arr1 == $arr2);
echo '<br>';
var_dump($arr1 === $arr2);

$arr3 = ['Idade' => 20, 'Nome' => 'Maria'];
echo '<br>';

var_dump($arr1 == $arr3);
echo '<br>';
var_dump($arr1 === $arr3);
echo '<br>';
var_dump($arr1 != $arr3);
echo '<br>';
var_dump($arr1 !== $arr3);
echo '<br>';

$arr4 = ['Idade' => '20', 'Nome' => 'Maria'];

var_dump($arr1 == $arr4);
echo '<br>'
;
var_dump($arr1 === $arr4);

?>