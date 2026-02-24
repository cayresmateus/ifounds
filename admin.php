<?php
  require "card.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IFounds - Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header class="d-flex justify-content-between p-2 align-items-center bg-success">
    <a class="titulo">
      <img class="w-25 p-2" src="./img/Ifounds_logo.png" alt="Logo IFOUNDS"> <p> - Administração</p> 
    </a>
    <a class="btn btn-primary" href="index.php" role="button">Sair Pagina Admin</a>
  </header>

  <main class="row row-cols-1 row-cols-md-2 g-4 p-2">
    <?php renderCardItem("Nome do item perdido", "Descrição do item","Aonde foi encontrado") ?>
    <?php renderCardItem("Nome do item perdido", "Descrição do item","Aonde foi encontrado") ?>
    <?php renderCardItem("Nome do item perdido", "Descrição do item","Aonde foi encontrado") ?>
    <?php renderCardItem("Nome do item perdido", "Descrição do item","Aonde foi encontrado") ?>
  </main>
</body>

</html>