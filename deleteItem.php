<?php 
    require "src/repositorio/ItemRepositorio.php";
    require "src/conexaoDB.php";
    require "src/modelo/Item.php";

    $itemRepositorios = new ItemRepositorio($pdo);
    $itemRepositorios->deleteItem($_POST['id']);

    header("Location: admin.php");

?>