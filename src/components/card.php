<?php


function renderCardItem($id,$nome, $descricao, $local,$isAdmin) {
  echo '
  <div class="col">
    <div class="card" name = "'. $id .'">
      <div class="card-body">
        <h5 class="card-title">' . htmlspecialchars($nome) . '</h5>
        <p class="card-text">' . htmlspecialchars($descricao) . '</p>
        <p class="card-text">' . htmlspecialchars($local) . '</p>
      ';

  
  if ($isAdmin) {
    echo '
    <div class="mt-3 d-flex gap-2 ">
      <form>
        <input type="hidden" name="id" value=" '.$id.' " >
        <input type="submit" class="btn btn-primary btn-sm" value="Editar" >
      </form>
      <form action="../deleteItem.php" method="post">
        <input type="hidden" name="id" value=" '.$id.' " >
        <input type="submit" class="btn btn-danger btn-sm" value="Deletar" >
      </form>
    </div>
    ';
  }
  echo '
  </div>
    </div>
  </div>';
}
?>
