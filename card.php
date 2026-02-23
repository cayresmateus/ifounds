<?php
function renderCardItem($nome, $descricao, $local, $admin) {
  if($admin){
  echo '
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">' . htmlspecialchars($nome) . '</h5>
        <p class="card-text">' . htmlspecialchars($descricao) . '</p>
        <p class="card-text">' . htmlspecialchars($local) . '</p>
        <button class="btn btn-primary">Atualizar</button>
        <button class="btn btn-danger">Remover</button>
      </div>
    </div>
  </div>';
  }else{
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
}
?>

