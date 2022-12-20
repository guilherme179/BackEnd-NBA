<?php 

namespace App\DAO;

abstract class Conexao{
    
    protected $pdo;

    public function __construct(){
        // $host = getenv('SLIMPROJECT_MYSQL_HOST');
        // $dbname = getenv('SLIMPROJECT_MYSQL_DBNAME');
        // $port = getenv('SLIMPROJECT_MYSQL_PORT');
        // $user = getenv('SLIMPROJECT_MYSQL_USER');
        // $pass = getenv('SLIMPROJECT_MYSQL_PASSWORD');
        
        
        $host = "localhost";
        $dbname = "nba";
        $port = "3306";
        $user = "root";
        $pass = "";

        $dsn = "mysql:host={$host};dbname={$dbname};port={$port}";

        $this->pdo = new \PDO($dsn, $user, $pass);
        $this->pdo->setAttribute(
            \PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION


        );
    }
}