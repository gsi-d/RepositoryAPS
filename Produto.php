<?php

require 'Conexao.php';

class Produto {

    private $conexao;

    public function __construct() {

        $con = new Conexao();
        $this -> conexao = $con -> getConexao('sqlite');

    }

    public function listar() {

        $sql = 'select * from produto;';

        $q = $this -> conexao -> prepare($sql);

        $q -> execute();

        return $q;

    }

    public function getProduto($codigo) {
        $sql = 'select * from produto where codigo = ?';
        $q = $this -> conexao -> prepare($sql);

        //Substitui o '?' da query sql
        $q -> bindParam(1, $codigo);

        $q -> execute();

        return $q;
    }

    public function getProdutoLike($nome) {
        $sql = 'select * from produto where nome like ?';
        $q = $this -> conexao -> prepare($sql);

       

        $conc = '%'.$nome.'%';

        //Substitui o '?' da query sql
        $q -> bindParam(1, $conc);

        $q -> execute();

        return $q;
    }

    public function addProduto($nome, $descricao, $valor = 0) {
        $sql = 'insert into produto (nome, descricao, valor) values (?, ?, ?)';
        $q = $this -> conexao -> prepare($sql);

        //Substitui o '?' da query sql
        $q -> bindParam(1, $nome);
        $q -> bindParam(2, $descricao);
        $q -> bindParam(3, $valor);

        $q -> execute();

        return $q;
    }

    public function updateProduto($nome, $descricao, $valor = 0, $codigo) {
        $sql = 'update produto set nome = ?, descricao = ?, valor = ? where codigo = ?';
        $q = $this -> conexao -> prepare($sql);

        //Substitui o '?' da query sql
        $q -> bindParam(1, $nome);
        $q -> bindParam(2, $descricao);
        $q -> bindParam(3, $valor);
        $q -> bindParam(4, $codigo);

        $q -> execute();

        return $q;
    }

    public function deleteProduto($codigo) {
        $sql = 'delete from produto where codigo = ?';
        $q = $this -> conexao -> prepare($sql);

        $q -> bindParam(1, $codigo);

        $q -> execute();

        return $q;
    }
}