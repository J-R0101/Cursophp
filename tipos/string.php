<div class="titulo"> String</div>

<?php 

echo 'eu sou uma string';

echo '<br>';

var_dump("Eu também");

echo '<br>';

// concatenação

echo "Nós também ". 'somos';
echo '<br>';

echo 'Numero é '. 123;

echo '<br>', "Também aceito " , "virgulas";

echo '<br>';

echo  " 'Teste' ". ' "teste " '. '\'teste\' '. "\"teste\" ". "\\";

echo '<br>';

print("Também existe a função print");

print  "<br>também existe a função print";

//Algumas funções

echo '<br>'. strtoupper('maximizado');
echo '<br>'. strtolower('MINIMIZANDO');
echo '<br>'. ucfirst('So a primera letra');
echo '<br>'. ucwords('todas a palavras');
echo '<br>'. strlen('Quantas letras?');
echo '<br>'. mb_strlen("Eu também" , "utf-8");
echo '<br>'. substr('Só uma parte mesmo', 7, 6);
echo '<br>'. str_replace('isso', 'Aquilo', ' troca isso ');



?>