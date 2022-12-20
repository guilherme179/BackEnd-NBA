<?php

namespace src;

function slimConfiguration(): \Slim\Container{
    $configuration = [
        'settings' => [
            'displayErrorDetails' => true,
        ],
    ];
    return new \Slim\Container($configuration);
}