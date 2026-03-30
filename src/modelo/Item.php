<?php
namespace ifounds\modelo;
class Item{
    private ?int $id;
    private string $nome;
    private string $descricao;
    private string $localizacao;

    public function __construct(?int $id, string $nome, string $descricao, string $localizacao){
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->localizacao = $localizacao;
    }

    public function getId():?int{
       return $this->id;
    }
    

    public function getNome():string{
       return $this->nome;
    }
    
    public function getDescricao():string{
       return $this->descricao;
    }
    
    public function getLocalizacao():string{
       return $this->localizacao;
    }
}

?>