<?php
  $isAdmin = false;
  require "src/components/card.php";
  require "src/conexaoDB.php";
  require "src/modelo/Item.php";
  require "src/repositorio/ItemRepositorio.php";
  $dadosItens = new ItemRepositorio($pdo);
  $items = $dadosItens->selectItens();
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IFounds</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css"/>
</head>

<body>
  <header class="d-flex justify-content-between p-2 align-items-center bg-success">
    <a class="titulo" href="/"> <img class="w-25 p-2" src="img/Ifounds_logo.png" alt="Logo Ifounds"> <p id="titulo">- O que queremos achar</p>  </a></a>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
      aria-controls="staticBackdrop">
      Cadastrar
    </button>

    <?php include 'src/components/offcanvas.php'; ?>
  </header>

  <main class="row row-cols-1 row-cols-md-2 g-4 p-2">
    <?php
      foreach($items as $item){
        renderCardItem($item->getId(),$item->getNome(),$item->getDescricao(),$item->getLocalizacao(),$isAdmin);
      }
    ?>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
</body>

</html>