<?php 
    require "src/repositorio/ItemRepositorio.php";
    require "src/conexaoDB.php";
    require "src/modelo/Item.php";

    $itemRepositorioz = new ItemRepositorio($pdo);
    $itemRepositorioz->deleteItem($_POST['id']);

    header("Location: admin.php");

?>