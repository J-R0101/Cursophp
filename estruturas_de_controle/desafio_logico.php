<div class="titulo">Desafio Logico</div>

<!--
  Dois trabalhos -> terça e quinta!
  -se os dois forem executados -> tv 50` e sorvete
  -se apenas um for executados -> tv 32` e sorvete
  -se nenhum for executados -> fica em casa!!
-->

<form action="#" method="post">
    <div>
      <label for="t1">Trabalho 1 (terça):</label>
      <select name="t1" id="t1">
          <option value="1">Executado</option>
          <option value="0">Não Executado</option>
      </select>
   </div>
    <div>
      <label for="t2">Trabalho 2 (Quinta):</label>
      <select name="t2" id="t2">
          <option value="1">Executado</option>
          <option value="0">Não Executado</option>
      </select>
   </div>
   <button>Executar</button>

</form>

<style>
    button, select{
        font-size:1.8rem;
    }
</style>
<?php

//echo $_POST['t1'];
//echo "</br>";
//echo $_POST['t2'];

// if(isset($_POST['t1']) && isset($_POST['t2'])) verifica se esta setado ou não 
$t1 = $_POST['t1'] === '1';
$t2 = !!$_POST['t2'];
$tv = '';
$sorvete = false;

if($t1 && $t2) {
    
    $tv = '50"';

} elseif ($t1 xor $t2) {
    
    $tv = '32"';

}

if ($t1 or $t2) {
    
    $sorvete = true;

}

if ($tv) {
    
    $resultado = "Vamos compra uma tv de $tv";

} else {

    $resultado = "Sem tv dessa vez :(";

}

if(!$sorvete) {

    $resultado .= '<br>Estamos mais saudaveis!';

} else {

    $resultado .= '<br>Sorvete liberado \o/';
}

echo "<p>$resultado</p>";


?>