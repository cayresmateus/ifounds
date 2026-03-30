<?php
namespace ifounds\controller;
require __DIR__ . "/../../vendor/autoload.php";
use ifounds\repositorio\ItemRepositorio;
use ifounds\ConexaoDB;

class HomePageController {
  public static function index() {
    $isAdmin = false;
    $conexaoDB = new ConexaoDB();
    $pdo = $conexaoDB->conexao();
    $itemRepositorio = new ItemRepositorio($pdo);
    $items = $itemRepositorio->selectItens();

    include __DIR__ . "/../../homePage.php";
  }
}