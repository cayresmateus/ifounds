<?php
namespace ifounds\controller;
require __DIR__ . "/../../vendor/autoload.php";
use ifounds\repositorio\ItemRepositorio;
use ifounds\ConexaoDB;

class AdminPageController {
  public static function index() {
    $isAdmin = true;
    $conexaoDB = new ConexaoDB();
    $pdo = $conexaoDB->conexao();
    $itemRepositorio = new ItemRepositorio($pdo);
    $items = $itemRepositorio->selectItens();

    include __DIR__ . "/../../src/views/admin.php";
  }
}
