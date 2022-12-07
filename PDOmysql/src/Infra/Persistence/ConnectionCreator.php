<?php

namespace Alura\Pdo\Infra\Persistence;


use mysql_xdevapi\Exception;

class ConnectionCreator
{
    protected $conn;

    public  function createConnection(){
        $servername = "0.0.0.0:3306";
        $username = "root";
        $password = "root";
        $dbname = "AluraPdo";
        $port = "3306";

        try{
            $this->conn = new \PDO("mysql:host=$servername;port=$port;dbname=$dbname;",$username,$password);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
            return $this->conn;
        } catch(PDOException $e){
            throw new Exception("Connection failed: " . $e -> getMessage());
        }
    }
}