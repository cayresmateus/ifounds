<?php

namespace ifounds\components;

class Card {
  private $id;
  private $nome;
  private $descricao;
  private $local;
  private $isAdmin;

  public function __construct($id, $nome, $descricao, $local, $isAdmin = false) {
    $this->id = $id;
    $this->nome = $nome;
    $this->descricao = $descricao;
    $this->local = $local;
    $this->isAdmin = $isAdmin;
  }

  public function render() {
    echo '
    <div class="col">
      <div class="card" name = "'. $this->id .'">
        <div class="card-body">
          <h5 class="card-title">' . htmlspecialchars($this->nome) . '</h5>
          <p class="card-text">' . htmlspecialchars($this->descricao) . '</p>
          <p class="card-text">' . htmlspecialchars($this->local) . '</p>
        ';

    if ($this->isAdmin) {
      echo '
      <div class="mt-3 d-flex gap-2 ">
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-' . $this->id . '">Editar</button>
        <form action="src/service/deleteItem.php" method="post">
          <input type="hidden" name="id" value=" '.$this->id.' " >
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
}
?>
