<?php
function renderCardItem($nome, $descricao, $local,$isAdmin) {
  echo '
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">' . htmlspecialchars($nome) . '</h5>
        <p class="card-text">' . htmlspecialchars($descricao) . '</p>
        <p class="card-text">' . htmlspecialchars($local) . '</p>
      ';

  
  if ($isAdmin) {
    echo '
    <div class="mt-3">
    <a href="" class="btn btn-success btn-sm">Editar</a>
    <a href="" class="btn btn-success btn-sm">Deletar</a>
    </div>
    ';
  }
  echo '
  </div>
    </div>
  </div>';
}
?>

