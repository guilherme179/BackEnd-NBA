<?php

namespace src;

use App\DAO\TokensDAO;
use App\Models\TokensModel;
use Firebase\JWT\JWT;

function generateToken(array $usuario): Array{
    $expiredAt = (new \DateTime('now', new \DateTimeZone('America/Sao_Paulo')))->modify('+2 days')->format('Y-m-d H:i:s');

        $tokenPayLoad = [
            'sub' => $usuario['id'],
            'name' => $usuario['nome'],
            'email' => $usuario['email'],
            'exp' => (new \DateTime($expiredAt))->getTimestamp()
        ];

        $token = JWT::encode($tokenPayLoad, getenv('JWT_SECRET_KEY'), 'HS256');
        $refreshTokenPayLoad = [
            'email' => $usuario['email'],
            'ramdom' => uniqid()
        ];
        $refreshToken = JWT::encode($refreshTokenPayLoad, getenv('JWT_SECRET_KEY'), 'HS256');

        $tokenModel = new TokensModel();
        $tokenModel->setExpired_at($expiredAt);        
        $tokenModel->setRefresh_token($refreshToken);        
        $tokenModel->setToken($token);        
        $tokenModel->setUsuarios_id($usuario['id']);        
        
        $tokensDAO = new TokensDAO();
        $tokensDAO->createToken($tokenModel);

        $tokenArray = [
            "token" => $token,
            "refresh_token" => $refreshToken,
        ];

        return $tokenArray;
}