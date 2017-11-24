<?php

header("Content-type: text/html;charset=UTF-8");

function block() {

    $arquivos = array();

    $arquivos[] = 'config.php';

    $pagina = $_SERVER['PHP_SELF'];
    $arr_barra = explode("/", $pagina);
    $tamanho = count($arr_barra) - 1;

    $pagina_atual = $arr_barra[$tamanho];

    if (in_array($pagina_atual, $arquivos)) {
        return exit("Você não pode acessar esta página diretamente!");
    }
}

echo block();
?>