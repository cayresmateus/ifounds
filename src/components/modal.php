<?php

function renderEditModal($item) {
  $id = $item->getId();
  $nome = $item->getNome();
  $descricao = $item->getDescricao();
  $local = $item->getLocalizacao();
  echo '
  <div class="modal fade" id="modal-' . $id . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel-' . $id . '" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalLabel-' . $id . '">Editar Item</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="src/service/updateItem.php" method="post">
          <div class="modal-body">
            <input type="hidden" name="id" value="' . $id . '">
            <div class="mb-3">
              <label for="nome-' . $id . '" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome-' . $id . '" name="nome" value="' . htmlspecialchars($nome) . '" required>
            </div>
            <div class="mb-3">
              <label for="descricao-' . $id . '" class="form-label">Descrição</label>
              <textarea class="form-control" id="descricao-' . $id . '" name="descricao" rows="3" required>' . htmlspecialchars($descricao) . '</textarea>
            </div>
            <div class="mb-3">
              <label for="local-' . $id . '" class="form-label">Localização</label>
              <input type="text" class="form-control" id="local-' . $id . '" name="local" value="' . htmlspecialchars($local) . '" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>';
}
?>