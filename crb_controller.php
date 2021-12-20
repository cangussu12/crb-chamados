<?php
require "./conexao.php";
require "crb_service.php";

$conexao = new Conexao();
$conexao->conectar();

    $categoriaService = new CategoriaService($conexao);
    $categoria = $categoriaService->recuperar();
    $subcategoria = $categoriaService->subcategoria();


?>