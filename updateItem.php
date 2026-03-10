<?php 
    require "src/repositorio/ItemRepositorio.php";
    require "src/conexaoDB.php";
    require "src/modelo/Item.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $local = $_POST['local'];

    $item = new Item($id, $nome, $descricao, $local);

    $itemRepositorios = new ItemRepositorio($pdo);
    $itemRepositorios->updateItem($item);

    header("Location: admin.php");
?>