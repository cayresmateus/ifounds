<?php
require __DIR__ . "/../repositorio/ItemRepositorio.php";
require __DIR__ . "/../conexaoDB.php";
require __DIR__ . "/../modelo/Item.php";

$itemRepositorios = new ItemRepositorio($pdo);
$itemRepositorios->deleteItem($_POST['id']);

header("Location: /admin.php");

?>