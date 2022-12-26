<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\DAO\UsersDAO;
use Firebase\JWT\JWT;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class AuthController{

    public function login(Request $request, Response $response, array $args): Response{
        
        $data = $request->getParsedBody();
        $users = new UsersModel;
        $usersDAO = new UsersDAO();
        
        if(!empty($data['user']) && !empty($data['password'])) {
            $name = $data['user'];
            $password = $data['password'];
            $expiredAt = (new \DateTime('now'))->modify('+1 day')->format('Y-m-d H:i:s');
        
            $users = $usersDAO->getUserByUser($name);

            if(is_null($users))
            return $response->withStatus(401);

            if(!password_verify($password, $users->getPassword()))
                return $response->withJson(401);

            $usersArray = [
                "id" => $users->getId(),
                "user" => $users->getUser(),
                "exp" => (new \DateTime($expiredAt))->getTimestamp(),
                "iat" => time()
            ];

            $token = JWT::encode($usersArray, 'dd33d297f0352992cc54eb253fcf020f', 'HS256'); 

            $response = $response->withJson([
                "token" => $token,
                "status" => "202"
            ]);

            return $response;
            
        } else {
            $response = $response->withJson([
                "status" => "406"
            ]);

            return $response;
        }       
        
    }    
}