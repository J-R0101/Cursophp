<div class="titulo">Post</div>

<form action="#" method="post">
    <input type = "text" name = "Nome">
    <input type = "text" name = "Sobrenome">
    <button>enviar</button>

</form>

<style>
    form > * {
        font-size: 1,8rem;

    }
</style>

<?php

print_r($_GET);
echo '<br>';
print_r($_POST);

echo '<br>'. count($_POST);

?>