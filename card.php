<?php
function renderCardItem($nome, $descricao, $local) {
  echo '
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">' . htmlspecialchars($nome) . '</h5>
        <p class="card-text">' . htmlspecialchars($descricao) . '</p>
        <p class="card-text">' . htmlspecialchars($local) . '</p>
      </div>
    </div>
  </div>';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body><main class="row row-cols-1 row-cols-md-2 g-4 p-2">
    <?php 
    renderCardItem("Mateus","Perdido","Bar");
    ?>
    </main>
</body>
</html>