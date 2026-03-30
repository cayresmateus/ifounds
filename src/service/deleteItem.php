<?php
require __DIR__ . "/../../vendor/autoload.php";
use ifounds\repositorio\ItemRepositorio;
use ifounds\ConexaoDB;

$pdo = (new ConexaoDB())->conexao();

$itemRepositorios = new ItemRepositorio($pdo);
$itemRepositorios->deleteItem($_POST['id']);

header("Location: /admin");

?>