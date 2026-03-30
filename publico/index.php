<?php 
require __DIR__ . "/../vendor/autoload.php";
use ifounds\controller\HomePageController;
use ifounds\controller\AdminPageController;

if(!array_key_exists('REQUEST_URI', $_SERVER) || $_SERVER['REQUEST_URI'] == '/'){
  HomePageController::index();
} else if($_SERVER['REQUEST_URI'] == '/admin'){
  AdminPageController::index();
}else if($_SERVER['REQUEST_URI'] == '/src/service/createItem.php'){
  require_once (__DIR__."/../src/service/createItem.php");
}else if($_SERVER['REQUEST_URI'] == '/src/service/updateItem.php'){
  require_once (__DIR__."/../src/service/updateItem.php");
}else if($_SERVER['REQUEST_URI'] == '/src/service/deleteItem.php'){
  require_once (__DIR__."/../src/service/deleteItem.php");
}else {
  http_response_code(404);
  echo "Página não encontrada. Volte para a <a href='/'>página inicial</a>.";
}

?>

