<div class="titulo">Desafio String</div>

<?php

/*
Enunciado
Avaliando os metodos da documentação 
qual os métodos que a posição do texto 'abc'
na string '!AbcaBcabc' retorne 1? 

*/ 
echo strpos('!AbcaBcabc', 'abc'). '<br>';
echo stripos('!AbcaBcabc', 'abc'). '<br>';
echo stripos(strtolower('!AbcaBcabc'), strtolower('ABC'));


?>