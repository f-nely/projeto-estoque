<?php

require  __DIR__ . '/../bootstrap.php';

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : '/';

if ($pagina == '/') {
    $title = 'Listagem de Produtos';
    require  TEMPLATES . '/lista.php';
}

if ($pagina == '/produto') {

    $codigoProduto = isset($_GET['codigo']) ? $_GET['codigo'] : '';

    if ($codigoProduto) {
        $produtoDetalhe = '';
        // foreach (PRODUTOS as $produto) {
        //     if ($produto['codigo'] == $codigoProduto) {
        //         $produtoDetalhe = $produto;
        //         break;
        //     }
        // }

        $produtoDetalhe = array_filter(PRODUTOS, function($produto) use($codigoProduto) {
            return $produto['codigo'] == $codigoProduto;
        });

        // var_dump($produtoDetalhe); exit;
        $produtoDetalhe = current($produtoDetalhe);
    }

    if (!$codigoProduto || !isset($produtoDetalhe) || !$produtoDetalhe) exit('Produto não existe');

    $title = 'Detalhes do Produto';
    require TEMPLATES . '/produto.php';
}

if ($pagina == '/produto/criar') {
    require TEMPLATES . '/criar-produto.php';
}

if ($pagina == '/produto/salvar') {
    var_dump($_POST);
    var_dump($_FILES);
}