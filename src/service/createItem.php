<?php
require __DIR__ . "/../../vendor/autoload.php";
use ifounds\repositorio\ItemRepositorio;
use ifounds\ConexaoDB;
use ifounds\modelo\Item;
$pdo = (new ConexaoDB())->conexao();

$isAdmin = false;
if (isset($_SERVER['HTTP_REFERER'])) {
  $ref = $_SERVER['HTTP_REFERER'];
  $isAdmin = str_contains($ref, '/admin');
}

$pgAtual = $isAdmin ? '/admin' : '/';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'] ?? '';
  $local = $_POST['local'] ?? '';
  $descricao = $_POST['descricao'] ?? '';

  $item = new Item(null, $nome, $descricao, $local);
  $itemRepositorio = new ItemRepositorio($pdo);
  $itemRepositorio->insertItem($item);

  header("Location: $pgAtual");
  exit();
}
