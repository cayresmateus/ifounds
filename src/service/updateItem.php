<?php
require __DIR__ . "/../../vendor/autoload.php";
use ifounds\repositorio\ItemRepositorio;
use ifounds\ConexaoDB;
use ifounds\modelo\Item;

$pdo = (new ConexaoDB())->conexao();

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$local = $_POST['local'];

$item = new Item($id, $nome, $descricao, $local);

$itemRepositorios = new ItemRepositorio($pdo);
$itemRepositorios->updateItem($item);


header("Location: /admin");
?>