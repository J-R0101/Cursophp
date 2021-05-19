<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="Km-milha">Km > Milha</option>
        <option value="milha-Km">Miha > Km</option>
        <option value="metro-Km">Metros > Km</option>
        <option value="Km-metro">Km > Metros</option>
    </select>
 <button>Calcular</button>


</form>
<style>

    form > * {
        font-size: 1.4rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'Km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Km";
        break;
    case 'milha-Km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Km = $distancia Km";
        break;
    case 'metro-Km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metro(s) = $distancia Km";
        break;
    case 'Km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia Metro(s)";
        break;
        
    
    default:
        $mensagem = "Nenhum valor calculado";
        break;
}

echo $mensagem;


?>