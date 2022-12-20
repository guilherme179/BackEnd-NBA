<?php 

namespace App\DAO;
use App\Models\ClientesModel;

class IndexDAO extends Conexao {

    public function __construct(){
        parent::__construct();
    }

    public function getAllData(string $tabel): array{
        $dados = $this->pdo
        ->query('SELECT * FROM ' . $tabel)
        ->fetchAll(\PDO::FETCH_ASSOC);

        return $dados;
    }
}