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

