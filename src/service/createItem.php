<?php
require __DIR__ . "/../conexaoDB.php";
require __DIR__ . "/../modelo/Item.php";
require __DIR__ . "/../repositorio/ItemRepositorio.php";

$isAdmin = false;
if (isset($_SERVER['HTTP_REFERER'])) {
  $ref = $_SERVER['HTTP_REFERER'];
  $isAdmin = str_contains($ref, '/admin.php');
}

$pgAtual = $isAdmin ? '/admin.php' : '/index.php';

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
