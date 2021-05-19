<!DOCTYPE html>
<html lang="pt/br">
<head>
    <meta charset="UTF_8">
    <link rel="stylesheet" href="assets/CSS/estilo.css">
    <link rel="stylesheet" href="assets/CSS/exercicios.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
   
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Vizualização do Exercicios</h2>
    </header>
    
    <nav class=" navegacao">
      <a href= "<?="/{$_GET['dir']}/{$_GET['file']}.php"?>" class="verde">Sem formatação</a>
      <a href="Index.php" class="vermelho">Voltar</a>
    </nav>
    
    <main class="principal">
        <div class="conteudo">
                
        <?php
            // forma para mostrar onteudo na tela sem precisar colocar o caminho no codigo
            //include($_GET['dir']."/".$_GET['file'].".php")
           //include("{$_GET['dir']}/{$_GET['file']}.php");
           include(__DIR__. "/{$_GET['dir']}/{$_GET['file']}.php"); 
        
        ?>
        </div>
    </main>
   
    <footer class="rodape">
        JrReis @ 2019 <?= date('Y'); ?>
    </footer>
    
</body>
</html>