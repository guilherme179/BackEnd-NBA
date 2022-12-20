<?php 

namespace App\DAO;
use App\Models\UsersModel;

class UsersDAO extends Conexao {

    public function __construct(){

        parent::__construct();

    }

    public function getUserByUser(string $user): ?UsersModel{
        $statement = $this->pdo->prepare('SELECT id,user,password FROM users WHERE user = :user');
        $statement->bindParam('user', $user);
        $statement->execute();
        $users = $statement->fetchAll(\PDO::FETCH_ASSOC);
        if(count($users) === 0){
            return null;
        }
        $user = new UsersModel();
        $user->setId($users[0]['id']);
        $user->setUser($users[0]['user']);
        $user->setPassword($users[0]['password']);
        return $user;
    }

} 