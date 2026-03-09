<?php 

class ItemRepositorio{
  private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectItens():array{
        $sql = "SELECT * FROM item ";
        $statement = $this->pdo->query($sql);
        $items = $statement->fetchAll();

        $dadosItens = array_map(function ($item) {
            return $this->criarObjeto($item);
        },$items);

        return $dadosItens;
    }

    private function criarObjeto($dados){
        return new Item (
            $dados['id'],
            $dados['nome'],
            $dados['descricao'],
            $dados['localizacao']
        );
    }

    public function insertItem(Item $item):void{
        $sql = "INSERT INTO item (nome, descricao, localizacao) VALUES (:nome, :descricao, :localizacao)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(':nome', $item->getNome());
        $statement->bindValue(':descricao', $item->getDescricao());
        $statement->bindValue(':localizacao', $item->getLocalizacao());
        $statement->execute();
    }

    public function deleteItem(int $id){
        $sql = "DELETE FROM item WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1,$id);
        $statement->execute();
    }
    

}

?>