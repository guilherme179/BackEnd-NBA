<?php

namespace src;

use Tuupola\Middleware\JwtAuthentication;

function jwtAuth(): JwtAuthentication {
    
    return new JwtAuthentication([
        'secret' => 'dd33d297f0352992cc54eb253fcf020f',
        'attribute' => 'jwt'
    ]);
}