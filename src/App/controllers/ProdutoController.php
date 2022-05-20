<?php

namespace App\Controllers;

use App\Models\Produto;

class ProdutoController
{
    private static $instance;
    private $conexao;

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new ProdutoController();
        }
        return self::$instance;
    }

    private function __construct()
    {
        $this->conexao = Conexao::getInstance();

    }

    public function inserir(Produto $produto)
    {
        $sql = "INSERT INTO usuario (nome, descricao, valor, imagem) 
                 VALUES (:nome, :descricao, :valor, :imagem)";
        $statement = $this->conexao->prepare($sql);
        $statement->bindValue(":nome", $produto->getNome());
        $statement->bindValue(":descricao", $produto->getDescricao());
        $statement->bindValue(":valor", $usuario->getValor());
        $statement->bindValue(":imagem", $usuario->getImagem());

        return $statement->execute();
    }

    public function listar()
    {
        $sql = "SELECT  id, nome, descricao, valor, imagem FROM produto ORDER BY nome";
        $statement = $this->conexao->query($sql, \PDO::FETCH_ASSOC);
        $lsretorno = array();
        foreach ($statement as $row) {
            $lsretorno[] = $this->preencherProduto($row);
        }
        return $lsretorno;
    }

    public function preencherProduto($row)
    {
        $produto = new produto();
        $produto->setId($row["id"]);
        $produto->setNome($row["nome"]);
        $produto->setDescricao($row["descricao"]);
        $produto->setValor($row["valor"]);
        $produto->setImagem($row["imagem"]);
        return $produto;
    }
}

}