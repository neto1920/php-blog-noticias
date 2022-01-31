<?php
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    
    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];

    $texto = $titulo . "#" . $categoria . "#" . $descricao . PHP_EOL;

    $materias = fopen("materias.txt", "a");
    fwrite($materias, $texto);
    fclose($materias);

?>