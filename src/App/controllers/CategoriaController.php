<?php

namespace App\Controllers;

use App\Models\Categoria;

class CategoriaController
{
   $sql = "SELECT  * FROM produto ORDER BY nome";
   $statement = $this->conexao->query($sql, \PDO::FETCH_ASSOC);
   $lsretorno = array();
   foreach ($statement as $row) {
   $lsretorno[] = $this->preencherProduto($row);
}
   return $lsretorno;
}

$sql = "Delete  * FROM Categoria ORDER BY nome";
$statement = $this->conexao->query($sql, \PDO::FETCH_ASSOC);
$lsretorno = array();
foreach ($statement as $row) {
    $lsretorno[] = $this->preencherProduto($row);
}
return $lsretorno;

private function __construct(){
    $this->conexao = Conexao::getInstance();

}
public function inserir(categoria $categoria){
    $sql = "INSERT INTO categoria (Id) 
                 VALUES (:Id)";
    $statement = $this->conexao->prepare($sql);
    $statement->bindValue(":id", $categoria->getId());


    return $statement->execute();
}