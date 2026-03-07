<?php 
      require "src/conexaoDB.php";
      $pgAtual=($isAdmin)? "admin.php" : "index.php";

      if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome = $_POST['nome'];
        $local = $_POST['local'];
        $descricao = $_POST['descricao'];

        $item = new Item(null, $nome, $descricao, $local);
        $itemRepositorio = new ItemRepositorio($pdo);
        $itemRepositorio->insertItem($item);
        header("Location: $pgAtual");
        exit(); 
      }
     
      
      
  ?>
    
    <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
      aria-labelledby="staticBackdropLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="staticBackdropLabel">
          Cadastro de item
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <form action="" method="post">
          <div class="mb-3">
            <label for="itemNome" class="form-label">Nome do item</label>
            <input type="text" name="nome" class="form-control" id="itemNome" required />
          </div>
          <div class="mb-3">
            <label for="itemLocal" class="form-label">Aonde foi encontrado</label>
            <input type="text" name="local" class="form-control" id="itemLocal" required />
          </div>
          <div class="mb-3">
            <label for="itemDescricao" class="form-label">Descrição</label>
            <textarea class="form-control" name="descricao" id="itemDescricao" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>
    </div>