<?php

class Conexao {

    private $usuario;
    private $senha;
    private $bancoDeDados;
    private $host;
    private $arquivo;

    public function __construct() {
        $this -> usuario = 'root';
        $this -> senha = '';
        $this -> bancoDeDados = 'senai';
        $this -> host = 'localhost';
        $this -> arquivo = 'banco_de_dados/senai.db';
    }

    public function getConexao($bd = 'mysql') {
        if($bd == 'mysql'){
            return $this -> getConexaoMySql();
        }  
        else {
            return $this -> getConexaoSqlite();
        }
    }

    //Retorna a conexão com o banco de dados
    private function getConexaoMySql() {
        //URL da conexão com o banco de dados
        $con = new \PDO('mysql:host='.$this -> host.';dbname='.$this -> bancoDeDados, $this -> usuario, $this -> senha);      
        return $con;
    }

    private function getConexaoSqlite() {

        $con = new \PDO('sqlite:'. $this -> arquivo);
        return $con;

    }

}