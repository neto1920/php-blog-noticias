<?php
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    
    $titulo = str_replace('#', "-", $_POST['titulo']);
    $categoria = str_replace('#', "-", $_POST['categoria']);
    $descricao = str_replace('#', "-", $_POST['descricao']);

    if(empty(($titulo) && ($descricao))) {
        echo '
            <div class="text-danger">
                Nescessário preencher os campos
            </div>
        ';
    };

    $texto = $titulo . "#" . $categoria . "#" . $descricao . PHP_EOL;

    $arquivo = fopen("arquivo.hd", "a");
    fwrite($arquivo, $texto);
    fclose($arquivo);

    header('Location: home.php');
?>