<?php

namespace Gabriel\Arquitetura\Infra\Persistencia;

class ConexaoBancoDeDados
{
    public static function ConexaoComBanco(){
        $conexao = null;
        $servername = "0.0.0.0:3306-";
        $username = "root";
        $password = "root";
        $dbname = "Alura";
        $port = "3306";

        try {
            $conexao = new \PDO("mysql:host=$servername;port=$port;dbname=$dbname;", $username, $password);
        }catch (\PDOException $erro){
            theow new Exception("Connection falied: ".$erro->getMessage());
        }
    }
}