<?php
namespace ifounds\components;
use ifounds\modelo\Item;

class Modal {
  
  public function render(Item $item) {

    echo '
  <div class="modal fade" id="modal-' . $item->getId() . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel-' . $item->getId() . '" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalLabel-' . $item->getId() . '">Editar Item</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="src/service/updateItem.php" method="post">
          <div class="modal-body">
            <input type="hidden" name="id" value="' . $item->getId() . '">
            <div class="mb-3">
              <label for="nome-' . $item->getId() . '" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome-' . $item->getId() . '" name="nome" value="' . htmlspecialchars($item->getNome()) . '" required>
            </div>
            <div class="mb-3">
              <label for="descricao-' . $item->getId() . '" class="form-label">Descrição</label>
              <textarea class="form-control" id="descricao-' . $item->getId() . '" name="descricao" rows="3" required>' . htmlspecialchars($item->getDescricao()) . '</textarea>
            </div>
            <div class="mb-3">
              <label for="local-' . $item->getId() . '" class="form-label">Localização</label>
              <input type="text" class="form-control" id="local-' . $item->getId() . '" name="local" value="' . htmlspecialchars($item->getLocalizacao()) . '" required>
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
}
