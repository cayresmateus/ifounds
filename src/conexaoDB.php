<?php 
namespace ifounds;
use PDO;

class ConexaoDB{
  private $host = "localhost";
  private $port = 5432;
  private $dbName = "IFounds";
  private $password = "postgres";
  private PDO $pdo;

  public function conexao(){
    return $this->pdo;
  }
  
  public function __construct()
  {
    $this->pdo = new PDO("pgsql:host=$this->host;port=$this->port;dbname=$this->dbName", "postgres", $this->password);
  }
}
