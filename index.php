<?php
  $isAdmin = false;
  require "card.php";
  require "src/conexaoDB.php";
  require "src/modelo/Livro.php";
  require "src/repositorio/LivroRepositorio.php";
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
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header class="d-flex justify-content-between p-2 align-items-center bg-success">
    <a class="titulo" href="/index.html"> <img class="w-25 p-2" src="img/Ifounds_logo.png" alt="Logo Ifounds">  <p>- O que queremos achar </p></a></a>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
      aria-controls="staticBackdrop">
      Cadastrar
    </button>

    <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
      aria-labelledby="staticBackdropLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="staticBackdropLabel">
          Cadastro de item
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <form action="">
          <div class="mb-3">
            <label for="itemNome" class="form-label">Nome do item</label>
            <input type="text" class="form-control" id="itemNome" required />
          </div>
          <div class="mb-3">
            <label for="itemLocal" class="form-label">Aonde foi encontrado</label>
            <input type="text" class="form-control" id="itemLocal" required />
          </div>
          <div class="mb-3">
            <label for="itemDescricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="itemDescricao" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>
    </div>
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